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
  <body class="bg-light" style="margin:0">

    <!-Check if user is logged in->
    <?php
        session_start();
        // Check if the user is logged in, if not then redirect him to login page
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
          require "header/header-user.php"; 
        }else{
          require "header/header-login.php";
        }
      ?>
      <!-First wide img->
       <img src="images/Tallin3.jpg" class="img-fluid" style="width: 100%; height: 60vh" alt="Photografer image"/>
       <div class="mb-5 mt-5">
           <div style="margin-left: 20px; border-bottom: 1px solid black;">
               <h1>Special offers</h1>
           </div>
           <div class="mb-5 mt-3">
              <div style="margin-left: 20px">
                <h3>From: Riga</h3>
              </div>
              <div>
                <div>
                  <div class="col-md-5 col-xl-5">
                    <div class="card shadow-0 border rounded-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div>
                              <img src="images/Ryanair.jpg" class="w-100" />
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5>Ryanair</h5>
                              <div class="d-flex flex-row">
                                <div class="text-danger mb-1 me-2">                             
                                </div>
                            <p class="text-truncate mb-4 mb-md-1">1.06.22-09.06.22</p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button class="btn btn-success btn-lg" type="button">Only 65$</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           <div>
              <div class="col-md-5 col-xl-5">
                <div class="card shadow-0 border rounded-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                        <div>
                          <img src="images/Wizz.png" class="w-100" />
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xl-6">
                        <h5>Wizzair</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                            
                            </div>
                            <p class="text-truncate mb-4 mb-md-1">29.05.22-07.06.22</p>
                          </div>
                      </div>
                      <div class="col-xl-3 border-start">        
                        <div class="d-flex flex-column mt-3">
                          <button class="btn btn-success btn-lg" type="button">Only 65$</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="col-md-5 col-xl-5">
                <div class="card shadow-0 border rounded-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                        <div>
                          <img src="images/Ryanair.jpg" class="w-100" />
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xl-6">
                        <h5>Ryanair</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                             
                            </div>
                            <p class="text-truncate mb-4 mb-md-1">27.05.22-05.06.22</p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button class="btn btn-success btn-lg" type="button">Only 70$</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="col-md-5 col-xl-5">
                  <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                          <div>
                            <img src="images/Airbaltic.png" class="w-100" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                          <h5>Airbaltic</h5>
                          <div class="d-flex flex-row">
                            <div class="text-danger mb-1 me-2">                          
                            </div>
                           <p class="text-truncate mb-4 mb-md-1">24.05.22-02.06.22</p>
                          </div>
                        </div>
                        <div class="col-xl-3 border-start">        
                          <div class="d-flex flex-column mt-3">
                            <button class="btn btn-success btn-lg" type="button">Only 60$</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-5 mt-5">
              <div style="margin-left: 20px; border-bottom: 1px solid black;">
                <h1>Buy Ticket</h1>
              </div>
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white text-dark">
                      <div class="card-body p-10 text-center">
  
                        <form action="#">
                          <div class="form-group border-bottom d-flex align-items-center justify-content-between flex-wrap">
                            <h5>From: Riga</h5>
                            <a href="#">
                              Change flight location <span></span></a>
                            </div>
                            <div>
                              <label>
                                  <input type="radio" name="radio" checked>Round Trip
                                  <span class="checkmark"></span>
                              </label>
                              <label>
                                <input type="radio" name="radio">One Way
                                <span class="checkmark"></span>
                              </label> 
                            </div>
                          </div>
                            <div class="form-group d-sm-flex">
                              <div class="d-flex align-items-center flex-fill me-sm1 my-sm-0 border-bottom position-relative">
                                <input type="date" required placeholder="Depart Date" class="form-control">
                                <div class="label" id="depart"></div>                                                         
                              </div>
                                <div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
                                  <input type="date" required placeholder="Return Date" class="form-control">
                                    <div class="label" id="return"></div>                                                 
                                    </div>
                                </div>
                                <div class="form-group my-1">
                                  <div class="btn btn-success rounded-3 d-flex justify-content-center text-center p-3">Search Flights
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </form>
                    <div>
                      <img 
                        src="images/plane1.jpg"
                        style="object-fit: cover; height: 50vh; width: 100vw;"
                        alt="Deep"
                        class="img-fluid"
                      />
                    </div>
    
    <div style="margin-bottom:-50px"><?php require "footer.php" ?></div>

    <!-Bootstrap bundle->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>