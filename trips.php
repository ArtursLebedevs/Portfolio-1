<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BeaverTravel</title>
    <link rel="stylesheet" href="Stylelogin.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
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

    <form>
        <section style="background-color: #C3F9E7;">
            <div class="container py-5">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="">
                                            <img src="images/London.jpg" class="w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5>London</h5>
                                        <div class="d-flex flex-row">
                                            <div class="text-danger mb-1 me-2"> 

                                            </div>
                                                <p class="text-truncate mb-4 mb-md-1">
                                                 London is the capital and largest city of England
                                                </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 border-start">        
                                        <div class="d-flex flex-column mt-3">
                                            <button onClick="location.href='trips_London.php'" class="btn btn-success btn-lg " type="button">FROM 70$</button>
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
                                            <img src="images/Riga2.jpg" class="w-100" />
                                        </div>
                                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5>Riga</h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">                             
                                        </div>
                                            <p class="text-truncate mb-4 mb-md-1">
                                            Riga  is the capital of Latvia
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 border-start">        
                                        <div class="d-flex flex-column mt-3">
                                            <button onClick="location.href='Riga_trips.php'" class="btn btn-success btn-lg" type="button">FROM 60$</button>
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
                            <img src="images/Tallin.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Tallin</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                           <p class="text-truncate mb-4 mb-md-1">
                            Tallin is the most populous, primate, and capital city of Estonia
                          </p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='Tallin_trips.php'" class="btn btn-success btn-lg" type="button">FROM 65$</button>
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
                            <img src="images/Berlin.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Berlin</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                           <p class="text-truncate mb-4 mb-md-1">
                            Berlin is Berlin
                          </p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='Berlin_trips.php'" class="btn btn-success btn-lg" type="button">FROM 75$</button>
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
                            <img src="images/Dublin.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Dublin</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                           <p class="text-truncate mb-4 mb-md-1">
                            Dublin is the capital and largest city of Ireland
                          </p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='Dublin_trips.php'" class="btn btn-success btn-lg" type="button">FROM 90$</button>
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
                            <img src="images/Rome.jpg"
                              class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Rome</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                           <p class="text-truncate mb-4 mb-md-1">
                            Rome is the capital city of Italy</p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button onClick="location.href='Rome_trips.php'" class="btn btn-success btn-lg" type="button">FROM 80$</button>
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
    <!-Bootstrap bundle->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <?php require "footer.php" ?>
  </body>
</html>