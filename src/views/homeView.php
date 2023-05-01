<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/cinema-center.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/flickity.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/flickity.pkgd.min.js"></script>
    <script src="../js/searchListener.js"></script>
    <title>C I N E</title>
</head>

<body>
    <main>
        <section id="heder">
            <div class="header">
                <div class="logo">
                    <img src="/assets/glue.svg" alt="" srcset="" height="80px" style="transform: rotate();">
                </div>

                <div class="search-bar">
                    <div class="bar">
                        <input type="search" id="search-input" alt="" srcset="" onkeypress="searchKeyEvent(event)">
                        <div class="search-icon">
                            <img src="/assets/magnifying-glass-solid.svg">
                        </div>
                    </div>
                </div>  

                <div class="signin-btn">
                    Login
                </div>
            </div>
        </section>

        <section>
            <h2>TEST</h2>

            <div class="carousel" data-flickity='{ 
                    "autoPlay": 2500, 
                    "pauseAutoPlayOnHover": true, 
                    "wrapAround": true,  
                    "prevNextButtons": false,
                    "pageDots": false
                }'>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/301" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/302" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/303" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/304" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/305" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/306" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/307" alt="" srcset="">
                </div>
                <div class="gallery-cell">
                    <img src="https://picsum.photos/200/308" alt="" srcset="">
                </div>
            </div>
        </section>

        <section>
            <div class="staf-pick">
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
            </div>
        </section>

        <footer>
            <p>Footer</p>
            <div class="footer-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
                    <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.031 1.031 0 0 0 0-1.457" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                    <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
                </svg>
            </div>

        </footer>
    </main>
</body>

</html>