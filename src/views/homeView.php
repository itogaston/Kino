<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../src/assets/cinema-center.png" type="image/x-icon">
    <link rel="stylesheet" href="../src/css/flickity.min.css">
    <link rel="stylesheet" href="../src/css/home.css">
    <link rel="stylesheet" href="../src/css/tailwind.css">
    <script src="../src/js/flickity.pkgd.min.js"></script>
    <script src="../src/js/searchListener.js"></script>
    <title>K I N O</title>
</head>

<body class="bg-headerMenu">
    <header>
        <div class="flex flex-row items-start flex-wrap sm:flex-nowrap justify-between sm:justify-normal sm:items-center pt-2 bg-headerMenu pb-2 mr-4">
            <button class="basis-1/3 flex items-center justify-center sm:justify-start sm:ml-7 hover:cursor-pointer" onclick="goTo('home')">
                <img src="../src/assets/glue.svg" alt="" srcset="" alt="Logo" width="100px" height="60px">
                <h1 class="ml-3 hidden sm:block text-textTitle">K I N O</h1>
            </button>

            <div class="mt-2 flex-row-reverse sm:flex-row sm:mt-0 mx-2 sm:mx-0 order-3 sm:order-none w-full sm:basis-1/3 flex items-center justify-between rounded-md h-8">
                <form action="index.php" class="flex items-center justify-between rounded-md bg-textBase text-fondo flex-grow"> 
                    <label for="page-searchBar"></label>
                    <input id="page-searchBar" type="text" value="list" name="page" class="hidden">
                    <div id="input-text-container" class="w-full">
                        <label for="title-searchBar"></label>
                        <input id="title-searchBar" class="bg-textBase border-none rounded-md h-8 w-full" 
                            type="search" id="search-input" name="title" srcset="">
                    </div>    
                
                    <button type="submit" class="mx-2">
                        <img src="../src/assets/magnifying-glass-solid.svg" width="20px" height="20px" alt="magnifying glass">
                    </button>
                </form>
                <form action="index.php" class="mx-1"> 
                    <label for="page-adv" class="hidden" name="page"></label>
                    <input id="page-adv" type="text" value="advSearch" name="page" class="hidden">  

                    <label for="action-adv" class="hidden" name="action"></label>
                    <input id="action-adv" type="text" value="viewAdvancedSearch" name="action" class="hidden">  

                    <button type="submit" class="flex  mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-textBase w-5 h-5" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM184 296c0 13.3 10.7 24 24 24s24-10.7 24-24V232h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H232V120c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"/></svg>
                    </button>
                </form>
            </div>
            <div class="basis-1/3 flex justify-center mr-2 sm:mr-3 mt-4 sm:mt-0 sm:justify-end text-textTitle">
                <button class="bg-hover hover:bg-textBase hover:text-fondo rounded-md py-2 px-3 mx-2 sm:mx-2 hover:cursor-pointer whitespace-nowrap" onclick="goTo('signUp','viewSignUp')">Sign Up</button> 
                <button class="bg-hover hover:bg-textBase hover:text-fondo rounded-md py-2 px-3 sm:mx-2 hover:cursor-pointer whitespace-nowrap" onclick="goTo('logIn','viewLogIn')">Log In</button> 
            </div>
        </div>
    </header>

    <main class="bg-fondo text-textTitle pt-5">

        <section>
            <div class="carousel-container sm:mx-16 md:mx-28 mb-10">
                <div class="section-title flex flex-col items-center text-neutral-200 mb-4 text-xl sm:text-3xl sm:font-bold">
                    <h2>Our selection</h2>
                </div>

                <div class="carousel" data-flickity='{ 
                    "autoPlay": 3000, 
                    "pauseAutoPlayOnHover": true, 
                    "wrapAround": true,  
                    "prevNextButtons": true,
                    "pageDots": false
                }'>
                    <?php
                        $index = 0;
                        foreach( $moviesCarousel as $movie ){
                            if($movie->getMoviePoster() == "N/A")
                                    continue;
                            echo'<form action="index.php">';

                            echo ' <button type="submit" class="gallery-cell mx-2">';
                                echo '<label for="page-'.$index.'"></label>';
                                echo '<input id ="page-'.$index.'" type="text" value="reviews" name="page" class="hidden">';
        
                                echo '<label for="action-'.$index.'"></label>';
                                echo '<input id ="action-'.$index.'" type="text" value="viewReviewPage" name="action" class="hidden">';
        
                                echo '<label for="title-'.$index.'"></label>';
                                echo '<input id ="title-'.$index.'" type="text" value="'.$movie->getMovieTitle().'" name="title" class="hidden">';
        
                                echo '<label for="imdbID-'.$index.'"></label>';
                                echo '<input id ="imdbID-'.$index.'" type="text" value="'.$movie->getMovieCode().'" name="imdbID" class="hidden">';
                            
                                echo '<img class="hover:scale-105 bg-headerMenu" src="'.$movie->getMoviePoster().'" alt="'.$movie->getMovieTitle().' poster" srcset="" height="308px" width="200px">';
                                echo '<span class="flex justify-center items-center bg-headerMenu w-full p-2 h-16 text-textTitle">'. $movie->getMovieTitle(). '</span>';
                            echo '</button>';

                            echo '</form>';

                            $index += 1;
                        }
                    ?>
                </div>
            </div>
        </section>

        <section class="flex justify-center p-6">
            <div class="flex flex-col border-solid border-2 rounded-md border-neutral-200 shadow-2xl md:w-2/3 text-neutral-200 bg-headerMenu">
                <div class="text-center text-xl text-textTitle sm:text-3xl sm:font-bold m-2">
                    <h2>The Showcase</h2>
                </div>

                <form action="index.php">
                <label for="page-show"></label>
                <input id="page-show" type="text" value="reviews" class="hidden" name="page">

                <label for="title-show"></label>
                <input id="title-show" type="text" value="<?php echo $showcaseMovie->getMovieTitle()?>" class="hidden" name="title">

                <label for="action-show"></label>
                <input id ="action-show" type="text" value="viewReviewPage" name="action" class="hidden">

                <label for="imdbID-show"></label>
                <input id="imdbID-show" type="text" value="<?php echo $showcaseMovie->getMovieCode()?>" class="hidden" name="imdbID">

                <button type="submit" class="flex flex-col sm:flex-row">
                    <div class="mx-4 mb-4">
                        <img class="hover:scale-105" src="<?php echo $showcaseMovie->getMoviePoster()?>" alt="Poster for <?php echo $showcaseMovie->getMovieTitle()?>" srcset="" width="300px" height="444px">
                    </div>
                    <div class="mx-4">
                        <div class="mb-4"><?php echo $showcaseMovie->getMovieTitle()?></div>
                        <div><?php echo $showcaseMovie->getYear()?></div>
                    </div>
                </button>
                </form>
            </div>
        </section>
    </main>

    <footer class="flex flex-col sm:flex-row justify-center sm:justify-evenly items-center sm:items-start py-8 sm:py-0 sm:pt-8 bg-textBase to-80% to-textBase from-hover h-fit sm:h-50">
        <div class="logo-container flex items-center min-w-fit m-4">
            <img src="../src/assets/glue.svg" alt="company logo" srcset="" width="100px" height="60px">
            <p class="ml-3 block">C I N E</p>
        </div>

        <div class="flex flex-col w-52 m-4 text-center">
            <p class="mb-2 text-lg sm:text-xl">Contact us</p>

            
        </div>

        <div class="resources w-52 m-4 text-center">
            <p class="mb-2 text-lg sm:text-xl">Resources</p>

            <div>
                <a class="group flex flex-row justify-between items-center my-1" href="https://eim-laboratoriovirtual.unavarra.es/gitlab/ingweb2023/grupo-ocelote">
                    <p class="group-hover:text-hover group-hover:underline">Code</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-white w-5 h-5 group-hover:fill-hover">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M503.5 204.6L502.8 202.8L433.1 21.02C431.7 17.45 429.2 14.43 425.9 12.38C423.5 10.83 420.8 9.865 417.9 9.57C415 9.275 412.2 9.653 409.5 10.68C406.8 11.7 404.4 13.34 402.4 15.46C400.5 17.58 399.1 20.13 398.3 22.9L351.3 166.9H160.8L113.7 22.9C112.9 20.13 111.5 17.59 109.6 15.47C107.6 13.35 105.2 11.72 102.5 10.7C99.86 9.675 96.98 9.295 94.12 9.587C91.26 9.878 88.51 10.83 86.08 12.38C82.84 14.43 80.33 17.45 78.92 21.02L9.267 202.8L8.543 204.6C-1.484 230.8-2.72 259.6 5.023 286.6C12.77 313.5 29.07 337.3 51.47 354.2L51.74 354.4L52.33 354.8L158.3 434.3L210.9 474L242.9 498.2C246.6 500.1 251.2 502.5 255.9 502.5C260.6 502.5 265.2 500.1 268.9 498.2L300.9 474L353.5 434.3L460.2 354.4L460.5 354.1C482.9 337.2 499.2 313.5 506.1 286.6C514.7 259.6 513.5 230.8 503.5 204.6z"/>
                    </svg>
                </a>
                <a class="group flex flex-row justify-between items-center my-1" href="https://docs.google.com/document/d/1zqZAzW1Ktz8cG_RPNX09CWtMRme3xzheYW9RDkZgnWs/edit?usp=sharing">
                    <p class="group-hover:text-hover group-hover:underline">Docs</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="fill-white w-5 h-5 group-hover:fill-hover">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                    </svg>
                </a>
            </div>
            

        </div>

        <div class="location w-52 m-4 text-center">
            <p class="mb-2 text-lg sm:text-xl">Location</p>
            <p>Av. Cataluña, 31006</p>
            <p>Pamplona, Navarra</p>
        </div>

    </footer>
</body>

</html>