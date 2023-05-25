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
    <title>C I N E</title>
</head>

<body class="bg-neutral-600">
    <header>
        <div class="flex flex-row items-start flex-wrap sm:flex-nowrap justify-between sm:justify-normal sm:items-center pt-2 bg-neutral-400 pb-2">
            <div class="basis-1/3 flex items-center justify-center sm:justify-start sm:ml-7 hover:cursor-pointer" onclick="goTo('home')">
                <img src="../src/assets/glue.svg" alt="" srcset="" alt="Logo" width="100px" height="60px">
                <h1 class="ml-3 hidden sm:block">C I N E</h1>
            </div>

            <form action="index.php" class="mt-2 sm:mt-0 mx-2 sm:mx-0 order-3 sm:order-none w-full sm:basis-1/3 flex items-center justify-between rounded-md bg-violet-300 h-8"> 
                <label for="page"></label>
                <input type="text" value="list" name="page" class="hidden">
                <div id="input-text-container" class="w-full">
                    <label for="title"></label>
                    <input class="bg-violet-300 border-none rounded-md h-8 w-full" 
                        type="search" id="search-input" name="title" srcset="">
                </div>    
            
                <button type="submit" class="mx-2">
                    <img src="../src/assets/magnifying-glass-solid.svg" width="20px" height="20px" alt="magnifying glass">
                </button>
            </form>
            <form action="index.php" class="mx-1"> 
                <label for="page" class="hidden"></label>
                <input type="text" value="advSearch" name="page" class="hidden">  

                <label for="action" class="hidden"></label>
                <input type="text" value="viewAdvancedSearch" name="action" class="hidden">  

                <button type="submit" class="flex  mx-2 text-amber-400">
                    <img src="../src/assets/magnifying-glass-plus-solid.svg" width="20px" height="20px" alt="magnifying glass">
                </button>
            </form>

            <div class="basis-1/3 flex justify-center mr-2 sm:mr-3 mt-4 sm:mt-0 sm:justify-end">
                <button class="bg-amber-400 rounded-md py-2 px-3 mx-2 sm:mx-2 hover:cursor-pointer whitespace-nowrap" onclick="goTo('signUp','viewSignUp')">Sign Up</button> 
                <button class="bg-amber-400 rounded-md py-2 px-3 sm:mx-2 hover:cursor-pointer whitespace-nowrap" onclick="goTo('logIn','viewLogIn')">Log In</button> 
            </div>
        </div>
    </header>

    <main class="bg-neutral-600 pt-5">

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
                        foreach( $moviesCarousel as $movie ){
                            if($movie->getMoviePoster() == "N/A")
                                    continue;
                                echo'<form action="index.php">';

                                echo ' <button type="submit" class="gallery-cell">';
                                    echo '<label for="page"></label>';
                                    echo '<input type="text" value="reviews" name="page" class="hidden">';
            
                                    echo '<label for="title"></label>';
                                    echo '<input type="text" value="'.$movie->getMovieTitle().'" name="title" class="hidden">';
            
                                    echo '<label for="imdbID"></label>';
                                    echo '<input type="text" value="'.$movie->getMovieCode().'" name="imdbID" class="hidden">';
                                
                                    echo '<img class="hover:scale-105 bg-neutral-600" src="'.$movie->getMoviePoster().'" alt="'.$movie->getMovieTitle().' poster" srcset="" height="308px" width="200px">';
                                    echo '<span class="flex justify-center items-center bg-neutral-400 w-full p-2 h-16">'. $movie->getMovieTitle(). '</span>';
                                echo '</button>';

                                echo '</form>';

                            
                        }
                    ?>
                </div>
            </div>
        </section>

        <section class="flex justify-center m-6">
            <div class="flex flex-col border-solid border-2 rounded-md border-neutral-200 shadow-2xl md:w-2/3 text-neutral-200">
                <div class="text-center text-xl sm:text-3xl sm:font-bold m-2">
                    <p>The Showcase</p>
                </div>

                <form action="index.php">
                <label for="page"></label>
                <input type="text" value="reviews" name="page" class="hidden">

                <label for="title"></label>
                <input type="text" value="<?php echo $showcaseMovie->getMovieTitle()?>" name="title" class="hidden">

                <label for="imdbID"></label>
                <input type="text" value="<?php echo $showcaseMovie->getMovieCode()?>" name="imdbID" class="hidden">


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

    <footer class="flex flex-col sm:flex-row justify-center sm:justify-evenly items-center sm:items-start py-8 sm:py-0 sm:pt-8 bg-gradient-to-tr to-90% to-neutral-600 from-neutral-950 text-neutral-300 h-fit sm:h-50">
        <div class="logo-container flex items-center min-w-fit m-4">
            <img src="../src/assets/glue.svg" alt="company logo" srcset="" width="100px" height="60px">
            <p class="ml-3 block">C I N E</p>
        </div>

        <div class="flex flex-col w-52 m-4 text-center">
            <p class="mb-2 underline text-lg">Contact us</p>

            
        </div>

        <div class="resources w-52 m-4 text-center">
            <p class="mb-2 underline text-lg">Resources</p>

            <div>
                <a class="group flex flex-row justify-between items-center my-1" href="https://eim-laboratoriovirtual.unavarra.es/gitlab/ingweb2023/grupo-ocelote">
                    <p class="group-hover:text-amber-400 group-hover:underline">Code</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-white w-5 h-5 group-hover:fill-amber-400">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M503.5 204.6L502.8 202.8L433.1 21.02C431.7 17.45 429.2 14.43 425.9 12.38C423.5 10.83 420.8 9.865 417.9 9.57C415 9.275 412.2 9.653 409.5 10.68C406.8 11.7 404.4 13.34 402.4 15.46C400.5 17.58 399.1 20.13 398.3 22.9L351.3 166.9H160.8L113.7 22.9C112.9 20.13 111.5 17.59 109.6 15.47C107.6 13.35 105.2 11.72 102.5 10.7C99.86 9.675 96.98 9.295 94.12 9.587C91.26 9.878 88.51 10.83 86.08 12.38C82.84 14.43 80.33 17.45 78.92 21.02L9.267 202.8L8.543 204.6C-1.484 230.8-2.72 259.6 5.023 286.6C12.77 313.5 29.07 337.3 51.47 354.2L51.74 354.4L52.33 354.8L158.3 434.3L210.9 474L242.9 498.2C246.6 500.1 251.2 502.5 255.9 502.5C260.6 502.5 265.2 500.1 268.9 498.2L300.9 474L353.5 434.3L460.2 354.4L460.5 354.1C482.9 337.2 499.2 313.5 506.1 286.6C514.7 259.6 513.5 230.8 503.5 204.6z"/>
                    </svg>
                </a>
                <a class="group flex flex-row justify-between items-center my-1" href="https://docs.google.com/document/d/1zqZAzW1Ktz8cG_RPNX09CWtMRme3xzheYW9RDkZgnWs/edit?usp=sharing">
                    <p class="group-hover:text-amber-400 group-hover:underline">Docs</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="fill-white w-5 h-5 group-hover:fill-amber-400">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                    </svg>
                </a>
            </div>
            

        </div>

        <div class="location w-52 m-4 text-center">
            <p class="mb-2 underline text-lg">Location</p>
            <p>Av. Cataluña, 31006</p>
            <p>Pamplona, Navarra</p>
        </div>

    </footer>
</body>

</html>