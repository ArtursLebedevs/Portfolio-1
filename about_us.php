<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BeaverTravel</title>
    <link rel="stylesheet" href="../style.css" />
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

    <img
      src="images/boat.png"
      class="img-fluid"
      style="width: 100%; height: 60vh"
      alt="Photografer image"
    />

    <!-About main text->
    <div class="container" style="margin-top: 200px; margin-bottom: 200px">
      <div class="row">
        <div class="col">
          <img
            src="images/tree.png"
            class="mt-5 ml"
            style="height: 300px; width: 325px"
            alt="Profile picture"
          />
        </div>
        <div class="col-5">
          <h4 style="margin-top: 10px">Who are we?</h4>
          <p>We are students of Riga Technical University and this website is our joint project. </p>
          <h4 style="margin-top: 75px">Why webpage is about travel?</h4>
          <p>Who doesn't like to travel? We all have this activity in common, so we decided to make our project related to it.</p>
          <h4 style="margin-top: 75px">What's next?</h4>
          <p>The project itself has many positive aspects. It can be used in the future as a portfolio of our works, which will be useful for job interviews. After the handover of the project, the work on it will continue until a full-fledged website is made.</p>
        </div>
      </div>
    </div>

    
    <div class="container-fluid px-0 mt-5" style="margin-top: 50px">  
        <img 
          src="images/deep.png"
          style="object-fit: cover; height: 50vh"
          class="w-100"
          alt="Deep"
        />
    </div>

    <!-Bootstrap bundle->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <?php require "footer.php" ?>

  </body>
</html>
