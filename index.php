<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BeaverTravel</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    </head>
    <body class="bg-light">

    <?php
        session_start();
        // Check if the user is logged in, if not then redirect him to login page
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            require "header/header-user.php"; 
        }else{
            require "header/header-login.php";
        }
    ?>

        <!-Search bar->
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Find your adventure!">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">Search</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
                </div>
            </div>

        <!-Carousel Autoplay->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/Venice.jpg" class="d-block w-100 carousel-autoplay-img" alt="Venice">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>VENICE</h5>
                            <p>Venice, Venezia in Italian, is best known for its beauty, canals, architecture, and art</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/China.jpg" class="d-block w-100 carousel-autoplay-img" alt="China">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>CHINA</h5>
                            <p>It is the largest of all Asian countries and has the largest population of any country in the world</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/Canada.jpg" class="d-block w-100 carousel-autoplay-img" alt="Canada">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>CANADA</h5>
                            <p>Canada, second largest country in the world in area (after Russia)</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        <!-Forums->
            <div style="margin-top: 200px; margin-bottom: 200px">
                <div>
                    <h1 class="text-center">Seek travelling advice? Try out these travel forums</h1>
                </div>
                <div class="forums-links mt-5 mb-5">
                    <a href="https://www.travellerspoint.com/forum.cfm"><button class="btn btn-warning" style="padding-top: 25px; padding-bottom: 25px" type="button">Travellerspoint</button></a>
                    <a href="https://www.ricksteves.com/travel-forum"><button class="forum-button btn btn-warning" style="padding-top: 25px; padding-bottom: 25px; padding-left: 30px; padding-right: 30px" type="button">Ricksteves</button></a>
                    <a href="https://www.fodors.com"><button class="forum-button btn btn-warning" style="padding-top: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px" type="button">Fodors</button></a>
                </div>
            </div>

        <!-Popular locations->
        <div class="mb-5" style="margin-left: 20px">
            <h2>Top rated locations</h2>
        </div>
            <div class="popular-locations" style="display: flex; flex-direction: row; gap: 20px; justify-content: center;">
                <div class="card" style="width: 18rem;">
                    <img src="images/Canada.jpg" class="card-img-top" alt="Canada" style="height: 200px">
                    <div class="card-body">
                        <p class="card-text">Canada, second largest country in the world in area (after Russia).</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/Venice.jpg" class="card-img-top" alt="Venice" style="height: 200px">
                    <div class="card-body">
                        <p class="card-text">Venice, Venezia in Italian, is best known for its beauty, canals, architecture, and art.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/China.jpg" class="card-img-top" alt="China" style="height: 200px">
                    <div class="card-body">
                        <p class="card-text">It is the largest of all Asian countries and has the largest population of any country in the world.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/japan.jpg" class="card-img-top" alt="japan" style="height: 200px">
                    <div class="card-body">
                        <p class="card-text">Japan is an island country in East Asia. It is situated in the northwest Pacific Ocean</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/italy.jpg" class="card-img-top" alt="Italy" style="height: 200px">
                    <div class="card-body">
                        <p class="card-text">The country is known for its more than 3,000 years of history.</p>
                    </div>
                </div>
            </div>

            <!-Top rated reviews->
            <div class="mb-5 mt-5" style="margin-left: 20px">
                <h2>Top rated reviews</h2>
            </div>
                <div class="popular-locations mb-5" style="display: flex; flex-direction: row; gap: 20px; justify-content: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Lefratte.jpg" class="card-img-top" alt="..." style="height: 200px">
                        <div class="card-body">
                            <p class="card-text">Sant'Angelo Le Fratte in Basilicata</p>
                            <p class="card-text">John Shellburg</p>
                            <p class="card-text">The must see Italy section is divided up into ten main categories. The cities of Italy are split into four 
                                different sections which detail the major cities... </p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/basilica.jpg" class="card-img-top" alt="Basilica" style="height: 200px">
                        <div class="card-body">
                            <p class="card-text">Basilica Palladiana, Vicenza</p>
                            <p class="card-text">Alex Porzingis</p>
                            <p class="card-text">Apart from my longing to explore Italy which has no limits, the aim was to improve the photo collection of cities 
                                in the regions of Veneto and Emilia Romagna... </p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/Harbin.jpg" class="card-img-top" alt="Harbin" style="height: 200px">
                        <div class="card-body">
                            <p class="card-text">Harbin Ice Festival</p>
                            <p class="card-text">Clancy Harm</p>
                            <p class="card-text">Our guide Feng is incredible. I cannot say good enough words. Feng was knowledgable, kind, funny, patient, helpful and kept us safe. Thank you Feng!</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/checkers.jpg" class="card-img-top" alt="Checkers" style="height: 200px">
                        <div class="card-body">
                            <p class="card-text">Chinese Checkers</p>
                            <p class="card-text">Nicola Rought</p>
                            <p class="card-text">We've throughout enjoyed the tour. Many highlights, a good pace and good amount of free time.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/shanghai.jpg" class="card-img-top" alt="..." style="height: 200px">
                        <div class="card-body">
                            <p class="card-text">Shanghai to Beijing</p>
                            <p class="card-text">Giancarlo Cerquozzi</p>
                            <p class="card-text">Excellent fast-paced tour, highlighting the best that China has to offer! Every interaction with On The Go Tours was very pleasant, easy and efficient...</p>
                        </div>
                    </div>
                </div>
        <!-Bootstrap bundle->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <?php require "footer.php" ?>
    </body>
</html>

