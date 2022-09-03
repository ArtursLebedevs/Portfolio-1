<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeaverTravel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">

<?php
    session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        require "header/header-login.php"; 
    }else{
        require "header/header-user.php";
    }
    $username = $_SESSION["username"];
?>

<img
      src="images/plane.jpg"
      class="img-fluid"
      style="width: 100%; height: 60vh"
      alt="Photografer image"
/>


<!-Your tickets->

<?php       
        $destination = $info = $image = $date = "";
        $destination_err = $info_err = $date_err = "";     
    if (isset($_POST['tickets'])) {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $conn=mysqli_connect("localhost","root","","beavertraveldb");

            if(empty(trim($_POST["destination"]))){
                $destination_err = "Please enter destination.";
            } else{
                $destination = trim($_POST["destination"]);
            }

            $info = trim($_POST["info"]);


            if(empty(trim($_POST["date"]))){
                $date_err = "Please enter date.";
            } else{
                $date = trim($_POST["date"]);
            }
            // Check input errors before inserting in database
            if (empty($destination_err) && empty($date_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO your_tickets (destination, info, date, username) VALUES ( ?, ?, ?, ?)";
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ssss", $param_destination, $param_info, $param_date, $param_username);
                
                // Set parameters
                $param_username = $username;
                $param_destination = $destination;
                $param_info = $info;
                $param_date = $date;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: planning.php");
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
            }   
            mysqli_close($conn);
        }
    }
?>

<div class="mt-5 mb-5" style="margin-left:20px">
    <h1 class="text-muted">Your tickets</h1>
</div>

<?php 
    $conn=mysqli_connect("localhost","root","","beavertraveldb");
    $sqlcount = "SELECT * from your_tickets WHERE username='$username'";
    if ($result = mysqli_query($conn, $sqlcount)) {
        $rowcount = 0;
    }
        while ($row = mysqli_fetch_array($result))
        {   $rowcount++;
            $destination = $row['destination'];
            $info = $row['info'];
            $date = $row['date'];
            echo "
            <div class=\"mb-3\" style=\"border-bottom: 1px solid black; margin-left:10px;\">
                <div style=\"margin-left: 20px; margin-bottom:20px; display: flex\">
                    <div style=\"margin-right: 40px; margin-top:5px; margin-left: 40px; width: 150px;\">
                        <h1> $rowcount </h1>
                    </div>
                    <div style=\"margin-right:40px; width: 500px;\">
                        <p>$destination</p>
                        <p class=\"text-muted\">$info</p>
                    </div>
                    <div>
                        <p>Date</p>
                        <p class=\"text-muted\">$date</p>
                    </div>
                    <div style=\"margin-top:15px; display: flex; margin-left:500px\">
                    <a href=\"delete-entry-ticket.php?id=$row[id]\"><button type=\"button\" class=\"btn btn-outline-dark\" style=\"width: 180px; height: 40px; background-color: red; color: white;\">Delete</button></a>
                </div>
                </div>
            </div>";
        }
    
?>
<div style="margin-left: 20px; margin-bottom:10px">
        <button data-modal-target="#modal" type="button" class="btn btn-outline-dark" style="width: 180px; background-color: green; color: white;">Add</button>
</div>

<div class="container" id="modal">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2 class="text-center mt-2">Your tickets</h2>
        <div>
            <div class="form-group">
                <label>Destination</label>
                <input type="text" name="destination" class="form-control <?php echo (!empty($destination_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $destination; ?>">
                <span class="invalid-feedback"><?php echo $destination_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Info</label>
                <input type="text" name="info" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" class="form-control <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $date_err; ?></span>
            </div>
            <div style="display: flex; justify-content: center; gap: 5px" class="mt-3 mb-4">
                <input type="submit" name="tickets" value="Submit" class="btn btn-success" style="padding-left: 20px; padding-right: 20px">
                <button data-close-button type="button" class="btn btn-outline-dark" style="color: red">Cancel</button>
            </div>  
        </div> 
    </form>     
 </div>

<!-Your night stays->

<?php       
        $name = $info = $date_in = $date_out = "";
        $name_err = $info_err = $date_in_err = $date_out_err ="";     
    if (isset($_POST['night_stays'])) {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $conn=mysqli_connect("localhost","root","","beavertraveldb");

            if(empty(trim($_POST["name"]))){
                $name_err = "Please enter your night stay name.";
            } else{
                $name = trim($_POST["name"]);
            }

            $info = trim($_POST["info"]);


            if(empty(trim($_POST["date_in"]))){
                $date_in_err = "Please enter your check-in date.";
            } else{
                $date_in = trim($_POST["date_in"]);
            }

            if(empty(trim($_POST["date_out"]))){
                $date_out_err = "Please enter your check-out date.";
            } else{
                $date_out = trim($_POST["date_out"]);
            }
            // Check input errors before inserting in database
            if (empty($name_err) && empty($info_err) && empty($date_in_err) && empty($date_out_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO your_night_stays (name, info, date_in, date_out, username) VALUES ( ?, ?, ?, ?, ?)";
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_info, $param_date_in, $param_date_out, $param_username);
                
                // Set parameters
                $param_username = $username;
                $param_name = $name;
                $param_info = $info;
                $param_date_in = $date_in;
                $param_date_out = $date_out;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=planning.php\">";
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
            }   
            mysqli_close($conn);
        }
    }
?>

<div class="mt-5 mb-5" style="margin-left:20px">
    <h1 class="text-muted">Your night stays</h1>
</div>

<?php 
    $conn=mysqli_connect("localhost","root","","beavertraveldb");
    $sqlcount = "SELECT * from your_night_stays WHERE username='$username'";
    if ($result = mysqli_query($conn, $sqlcount)) {
        $rowcount = 0;
    }
        while ($row = mysqli_fetch_array($result))
        {   $rowcount++;
            $name = $row['name'];
            $info = $row['info'];
            $date_in = $row['date_in'];
            $date_out = $row['date_out'];
            echo "
            <div class=\"mb-3\" style=\"border-bottom: 1px solid black; margin-left:10px;\">
                <div style=\"margin-left: 20px; margin-bottom:20px; display: flex\">
                    <div style=\"margin-right: 40px; margin-top:5px; margin-left: 40px; width: 150px;\">
                        <h1> $rowcount </h1>
                    </div>
                    <div style=\"margin-right:40px;  width: 500px;\">
                        <p>$name</p>
                        <p class=\"text-muted\">$info</p>
                    </div>
                    <div>
                        <p>Date</p>
                        <p class=\"text-muted\">Check in <br> $date_in <br> Check out <br> $date_out</p>
                    </div>
                    <div style=\"margin-top:15px; display: flex; margin-left:440px\">
                    <a href=\"delete-entry-ticket.php?id=$row[id]\"><button type=\"button\" class=\"btn btn-outline-dark\" style=\"width: 180px; height: 40px; background-color: red; color: white;\">Delete</button></a>
                </div>
                </div>
            </div>";
        }
?>
<div style="margin-left: 20px; margin-bottom:10px">
    <button data-modal-target="#modal3" type="button" class="btn btn-outline-dark" style="width: 180px; background-color: green; color: white;">Add</button>
</div>

<div class="container" id="modal3">

<style>
    #modal3 {
    border: 1px solid black; 
    border-radius: 10px; 
    position: fixed; top: 50%; 
    left: 50%; 
    transform: translate(-50%, -50%) scale(0); 
    transition: 200ms ease-in-out;
    z-index: 10; 
    background-color: white; 
    width:1000px; 
    max-width: 80%;
    }
    #modal3.active {
        transform: translate(-50%, -50%) scale(1);
    }
</style>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2 class="text-center mt-2">Your night stays</h2>
        <div>
            <div class="form-group">
                <label>Night stay</label>
                <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Info</label>
                <input type="text" name="info" class="form-control">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Check-in date</label>
                <input type="datetime-local" name="date_in" class="form-control <?php echo (!empty($date_in_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $date_in_err; ?></span>
            </div>
            <div class="form-group">
                <label>Check-out date</label>
                <input type="datetime-local" name="date_out" class="form-control <?php echo (!empty($date_out_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $date_out_err; ?></span>
            </div>
            <div style="display: flex; justify-content: center; gap: 5px" class="mt-3 mb-4">
                <input type="submit" name="night_stays" value="Submit" class="btn btn-success" style="padding-left: 20px; padding-right: 20px">
                <button data-close-button3 type="button" class="btn btn-outline-dark" style="color: red">Cancel</button>
            </div>  
        </div> 
    </form>     
 </div>

<!-Your planning->

<?php       
    $marker = $date2 = "";
    $marker_err = $date2_err = "";    
    
    if (isset($_POST['planning'])) { 
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $conn=mysqli_connect("localhost","root","","beavertraveldb");
    
            if(empty(trim($_POST["marker"]))){
                $marker_err = "Please enter destination.";
            } else{
                $marker = trim($_POST["marker"]);
            }
    
    
            if(empty(trim($_POST["date2"]))){
                $date2_err = "Please enter date.";
            } else{
                $date2 = trim($_POST["date2"]);
            }
    
            // Check input errors before inserting in database
            if (empty($marker_err) && empty($date2_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO your_planning (marker, date2, username) VALUES (?, ?, ?)";
             
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sss", $param_marker, $param_date2,$param_username);
                
                // Set parameters
                $param_username = $username;
                $param_marker = $marker;
                $param_date2 = $date2;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=planning.php\">";
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
            mysqli_close($conn);
        }
    }
?>

<div class="mt-5 mb-5" style="margin-left:20px">
    <h1 class="text-muted">Your planning</h1>
</div>

<?php 
    $conn=mysqli_connect("localhost","root","","beavertraveldb");
    $sqlcount = "SELECT * from your_planning WHERE username='$username'";
    if ($result = mysqli_query($conn, $sqlcount)) {
        $rowcount = 0;
    }
        while ($row = mysqli_fetch_array($result))
        {   $rowcount++;
            $marker = $row['marker'];
            $date2 = $row['date2'];
            echo "
            <div class=\"mb-3\" style=\"border-bottom: 1px solid black; margin-left:10px;\">
            <div style=\"margin-left: 20px; margin-bottom:5px; display: flex\">
                <div style=\"margin-right: 40px; margin-top:5px; margin-left: 40px; width: 150px;\">
                    <h1> $rowcount </h1>
                </div>
                <div style=\"margin-right:40px;  width: 400px;\">
                    <p>".($row['marker'])."</p>
                    <p class=\"text-muted\">".($row['date2'])."</p>
                </div>
                <div style=\"margin-top:15px; display: flex\">
                    <button type=\"button\" class=\"btn btn-outline-dark\" style=\"width: 180px; height: 40px; margin-right: 10px; background-color: orange; color: white;\">Show on the map</button>
                    <button type=\"button\" class=\"btn btn-outline-dark\" style=\"width: 180px; height: 40px; background-color: red; color: white;\">Delete</button>
                </div>
            </div>
            </div>";
        }
?>

<div style="margin-left: 20px; margin-bottom:10px">
        <button data-modal-target="#modal2" type="button" class="btn btn-outline-dark" style="width: 180px; background-color: green; color: white;">Add</button>
</div>

<div class="container" id="modal2">

    <style>
        #modal2 {
        border: 1px solid black; 
        border-radius: 10px; 
        position: fixed; top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%) scale(0); 
        transition: 200ms ease-in-out;
        z-index: 10; 
        background-color: white; 
        width:1000px; 
        max-width: 80%;
        }
        #modal2.active {
            transform: translate(-50%, -50%) scale(1);
        }
    </style>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2 class="text-center mt-2">Your planning</h2>
        <div>
            <div class="form-group">
                <label>Destination</label>
                <input type="text" name="marker" class="form-control <?php echo (!empty($marker_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $destination; ?>">
                <span class="invalid-feedback"><?php echo $marker_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date2" class="form-control <?php echo (!empty($date2_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $date2_err; ?></span>
             </div>
             <div style="display: flex; justify-content: center; gap: 5px" class="mt-3 mb-4">
                <input type="submit" name="planning" value="Submit" class="btn btn-success" style="padding-left: 20px; padding-right: 20px">
                <button data-close-button2 type="button" class="btn btn-outline-dark" style="color: red">Cancel</button>
            </div>  
        </div> 
    </form>     
</div>

<div class="mapouter" style="margin-top:40px;">
    <div class="gmap_canvas">
        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1200&amp;height=800&amp;hl=en&amp;q=tallin old town&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    <style>.mapouter{position:relative;text-align:right;width:100%;height:800px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:800px;}.gmap_iframe {height:800px!important;}</style>
</div>

<!-Bootstrap bundle->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

<div id="overlay"></div>

<?php require "footer.php" ?>

<script src="script.js?v=1"></script>

</html>