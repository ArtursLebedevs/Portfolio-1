	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BeaverTravel</title>
    <link rel="stylesheet" href="../style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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

       	 <div class="mb-5 mt-5" style="display: flex; flex-direction: column; justify-content: center; gap: 40px;">
           <div style="margin-left: 20px">
                <h1>Review and rating > House of the Blackheads (Riga)</h1>
           </div>
           <div style="display: flex; justify-content: center;">
                <img src="images/blackhead1.jpg" class="img-rounded" alt="Bebru ala" style="height: 60vh; width: 100vw">
           </div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: center; margin-bottom: 150px">
            <div class="container" style="margin-left:100px">
                <div class="row">
                    <div class="col-sm-7">
                        <hr />
                        <div class="review-block">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                                    <div class="review-block-name">Name Surname</div>
                                    <div class="review-block-date">Data<br /></div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="review-block-rate">
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="review-block-title">Skaisti</div>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                                    <div class="review-block-name">Name Surname</div>
                                    <div class="review-block-date">Data<br /></div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="review-block-rate">
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button style="display: none"type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button style="display: none; "type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="review-block-title">A kur blackheads??</div>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                                    <div class="review-block-name">Name Surname</div>
                                    <div class="review-block-date">Data<br /></div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="review-block-rate">
                                        
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="review-block-title">Gribu dzivot tur!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:40px; margin-left: 150px;">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="text-right">
                                <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Here is
                                    your review</a>
                            </div>

                            <div class="row" id="post-review-box" style="display:green;">
                                <div class="col-md-12">
                                    <form accept-charset="UTF-8" action="" method="post">
                                        <input id="ratings-hidden" name="rating" type="hidden">
                                        <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                                            placeholder="Enter your review here..." rows="5"></textarea>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-warning btn-xs"
                                                aria-label="Left Align">
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-xs"
                                                aria-label="Left Align">
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-xs"
                                                aria-label="Left Align">
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-xs"
                                                aria-label="Left Align">
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-xs"
                                                aria-label="Left Align">
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            </button>
                                            <div class="stars starrr" data-rating="0"></div>
                                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box"
                                                style="display:none; margin-right: 10px;">
                                                <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                            <button class="btn btn-success btn-lg" type="submit">Add review</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <?php require "footer.php" ?>

        <!-Bootstrap bundle->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
</body>

</html>