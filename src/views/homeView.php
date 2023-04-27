<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .signin-btns {
        min-width: 200px;
        display: flex;
        justify-content: space-around;
    }

    .signin-btns>* {
        background-color: #3390ec;
        padding: 10px;
        border-radius: 5px;
    }

    .movie-carousel {
        display: flex;
        justify-content: space-evenly;
    }

    .movie-carousel>img {
        border: solid 1px black;
        border-radius: 7px;

    }
</style>

<body>
    <main>
        <div class="header">
            <div class="logo">
                <img src="/assets/logo.jpeg" alt="" srcset="" width="200px" height="200px">
            </div>

            <div class="signin-btns">
                <div class="login">
                    Log In
                </div>
                <div class="signin">
                    Sign In
                </div>
            </div>
        </div>

        <section>
            <div class="movie-carousel">
                <img src="/assets/pepega.png" alt="" width="100px" height="150px">
                <img src="/assets/pepega.png" alt="" width="100px" height="150px">
                <img src="/assets/pepega.png" alt="" width="100px" height="150px">
            </div>
        </section>

    </main>
</body>

</html>