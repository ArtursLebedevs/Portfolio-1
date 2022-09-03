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

       <section style="background-color: #C3F9E7;">
            <div class="container py-5">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="">
                                            <img src="images/bebruala1.jpg" class="w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5>Bebru ala</h5>
                                        <div class="d-flex flex-row">
                                            <div class="text-danger mb-1 me-2"> 

                                            </div>
                                                <p class="text-warning text-truncate mb-4 mb-md-1">
                                                 Rating: 4.3/5.0
                                                </p>
                                                
                                        </div>
                                    </div>
                                    <div class="col-xl-3 border-start">        
                                        <div class="d-flex flex-column mt-3">
                                            <button onClick="location.href='Reviewlist.php'" class="btn btn-warning btn-lg " type="button">Review</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="">
                                            <img src="images/blackhead.jpg" class="w-100" />
                                        </div>
                                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5>House of the Blackheads (Riga)</h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">                             
                                        </div>
                                            <p class="text-warning text-truncate mb-4 mb-md-1">
                                            Rating: 4.5/5.0
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 border-start">        
                                        <div class="d-flex flex-column mt-3">
                                            <button onClick="location.href='blackhead.php'" class="btn btn-warning btn-lg" type="button">Review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


              <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                  <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="">
                            <img src="images/walls.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Walls of Tallinn</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                           <p class="text-warning text-truncate mb-4 mb-md-1">
                            Rating: 4.2/5.0
                          </p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='walls.php'" class="btn btn-warning btn-lg" type="button">Review</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                  <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="">
                            <img src="images/reih.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Reichstag building (Berlin)</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                          <p class="text-warning text-truncate mb-4 mb-md-1">
                            Rating: 4.7/5.0
                          </p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='reih.php'" class="btn btn-warning btn-lg" type="button">Review</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                  <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="">
                            <img src="images/sobor.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Christ Church Cathedral (Dublin)</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                          <p class="text-warning text-truncate mb-4 mb-md-1">
                            Rating: 4.8/5.0
                          </p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='sobor.php'" class="btn btn-warning btn-lg" type="button">Review</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>           
          </section>
    
        <?php require "footer.php" ?>

        <!-Bootstrap bundle->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
</body>

</html>