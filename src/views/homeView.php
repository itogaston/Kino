<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/cinema-center.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/flickity.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/tailwind.css">
    <script src="../js/flickity.pkgd.min.js"></script>
    <script src="../js/searchListener.js"></script>
    <title>C I N E</title>
</head>

<body class="bg-neutral-600">
    <header>
        <div class="flex flex-row items-center pt-2 mb-5 bg-neutral-400 pb-2">
            <div class="basis-1/3 flex items-center justify-center sm:justify-start sm:ml-5">
                <img src="/assets/glue.svg" alt="" srcset="" width="100px">
                <h1 class="ml-2 hidden sm:block">C I N E</h1>
            </div>

            <div class="basis-1/3 flex items-center justify-between rounded-md bg-violet-300 h-8">   
                <input class="bg-violet-300 border-none rounded-md h-8 w-11/12" 
                    type="search" id="search-input" alt="" srcset="" onkeypress="searchKeyEvent(event)">
                <img src="/assets/magnifying-glass-solid.svg" class="w-5 h-5 hover:cursor-pointer mx-1" onclick="goToList()">
            </div>

            <div class="basis-1/3 flex justify-center sm:justify-end">
                <p class="bg-amber-400 rounded-md py-2 px-3 sm:mr-5 hover:cursor-pointer">Login</p> 
            </div>
        </div>
    </header>

    <main class="bg-neutral-600">

        <section>
            <div class="carousel-container sm:mx-16 md:mx-28 mb-10">
                <div class="section-title flex flex-col items-center text-neutral-200 mb-4">
                    <h2>Titulo de la sección</h2>
                </div>

                <div class="carousel" data-flickity='{ 
                    "autoPlay": 0, 
                    "pauseAutoPlayOnHover": true, 
                    "wrapAround": true,  
                    "prevNextButtons": false,
                    "pageDots": false
                }'>
                    
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="/docs/" alt="" srcset="" style="height: 308px; width: 200px">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://m.media-amazon.com/images/M/MV5BNmZjZDQ1N2QtMTNkMS00OGYyLWI2MTktOWVlMzliMjlhMTBjXkEyXkFqcGdeQXVyODkwNDUwNw@@._V1_SX300.jpg" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://picsum.photos/200/303" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://picsum.photos/200/304" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://picsum.photos/200/305" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://picsum.photos/200/306" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://picsum.photos/200/307" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                    <div class="gallery-cell">
                        <img class="hover:scale-105" src="https://picsum.photos/200/308" alt="" srcset="">
                        <div class="bg-white w-full p-2">Titulo</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="staf-pick m-3 border-neutral-200 shadow-2xl">
                <div class="staf-header">
                    <p>Our Selection</p>
                </div>
 
                <?php
                    echo '<ul class="product-info">';
                    foreach( $movies as $movie ){
                        echo '<li><span></span>'. $movie->getMovieTitle().' - '. $movie->getYear().'</li>';
                    }
                    echo '</ul>';
                ?>
        </section>
        </main>

    <footer class="pt-4 bg-gradient-to-tr to-neutral-600 from-neutral-950 text-neutral-300 h-40">
        <p class="ml-2">Footer</p>
        <div class="flex ml-2 my-5">
            <img src="/assets/gitlab.svg" class="w-5 h-5 mx-2">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
            </svg>
        </div>

    </footer>
</body>

</html>