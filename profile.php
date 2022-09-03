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

        <!-Header change->
        <?php
            session_start();
            // Check if the user is logged in, if not then redirect him to login page
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                require "header/header-login.php"; 
            }else{
                require "header/header-user.php";
            }
        ?>

        <!-Profile card (Variables for picture change / Profile information retrieving)->
        <?php
            $username = $_SESSION["username"];
            $conn=mysqli_connect("localhost","root","","beavertraveldb");
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result))
                {
                    $name = $row['name'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $member = $row['created_at'];
                }
            
            $sessionId = $_SESSION["id"];
            $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $sessionId"));

            $id = $user["id"];
            $name = $user["name"];
            $image = $user["image"];
        ?>

        <!-Card/About me layout->
        <div style="display: flex; flex-direction: row; justify-content: space-around; background-image: url(images/about_background.jpg); background-repeat: no-repeat; background-size: cover; padding: 50px">
        <!-Profile card (Form)->
            <div class="card text-white bg-dark" style="height:100%; width:100%; margin-left: 50px; margin-top: 50px; max-width: 300px; max-height: 700px; min-width: 300px;">
                <div class="card-body">
                    <!-Profile picture {START}->
                    <div class="text-center" style="margin-bottom:5px;">
                        <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
                            <div class="upload">
                                <img src="images/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>">
                                <div class="round">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                                    <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
                                    <i class = "fa fa-camera" style = "color: #fff;"></i>
                                </div>
                            </div>
                        </form>
                        <script type="text/javascript">
                            document.getElementById("image").onchange = function(){
                                document.getElementById("form").submit();
                            };
                        </script>
                        <?php
                        if(isset($_FILES["image"]["name"])){
                        $id = $_POST["id"];
                        $name = $_POST["name"];

                        $imageName = $_FILES["image"]["name"];
                        $imageSize = $_FILES["image"]["size"];
                        $tmpName = $_FILES["image"]["tmp_name"];

                        // Image validation
                        $validImageExtension = ['jpg', 'jpeg', 'png'];
                        $imageExtension = explode('.', $imageName);
                        $imageExtension = strtolower(end($imageExtension));
                        if (!in_array($imageExtension, $validImageExtension)){
                            echo
                            "
                            <script>
                            alert('Invalid Image Extension');
                            document.location.href = '../beavertraveldb';
                            </script>
                            ";
                        }
                        elseif ($imageSize > 1200000){
                            echo
                            "
                            <script>
                            alert('Image Size Is Too Large');
                            document.location.href = '../beavertraveldb';
                            </script>
                            ";
                        }
                        else{
                            $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
                            $newImageName .= '.' . $imageExtension;
                            $query = "UPDATE users SET image = '$newImageName' WHERE id = $id";
                            mysqli_query($conn, $query);
                            move_uploaded_file($tmpName, 'images/' . $newImageName);
                            echo
                            "
                            <script>
                            document.location.href = '../beavertraveldb';
                            </script>
                            ";
                        }
                        }
                        ?>
                        </div>
                        <!-Profile picture {END}->

                        <h6 class="card-subtitle mb-2 text-center"> <?php echo $name," ", $lastname ; ?> </h6>
                        
                        <small class="text-muted"> Email </small>
                        <p class="card-text"> <?php echo $email; ?></p>
                        <small class="text-muted"> Total trips </small>
                        <p class="card-text">68</p>
                        <small class="text-muted"> Total reviews </small>
                        <p class="card-text">32</p>
                        <small class="text-muted"> Member since </small>
                        <p class="card-text"> <?php echo $member; ?></p>
                        <small class="text-muted"> Account raiting 4.3/5 </small>
                        <div>
                            <img  src="images/star.png" height="20" width="20">
                            <img  src="images/star.png" height="20" width="20">
                            <img  src="images/star.png" height="20" width="20">
                            <img  src="images/star.png" height="20" width="20">
                        </div>
                    </div>
                </div>
            
                <!-About me container->
                <div style="margin-top: 50px; color: white;">
                    <div style="margin-bottom: 50px;">
                        <h1 class="text-center"> About me</h1>
                    </div>

                    <!-Get bio from database->
                        <?php
                            $sessionId = $_SESSION["id"];
                            $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $sessionId"));
                        
                            $id = $user["id"];
                            $bio = $user["bio"];
                        ?>

                    <div class="container" style="max-width: 1000px">
                        <p> <?php echo $bio; ?></p>              
                    </div>
                </div>
            </div>


            <!-Changing About me modal->           
        <div class="container" id="modal">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h2 class="text-center mt-2">About me</h2>
                <div style="display:flex; justify-content:center">
                    <textarea name="bio-edit" id="bio-edit" class="mt-2 mb-3" rows="10" cols="110"></textarea> 
                </div>
                <div style="display: flex; justify-content: center; gap: 5px" class="mb-4">
                        <input type="submit" value="Submit" class="btn btn-success" style="padding-left: 20px; padding-right: 20px">
                        <button data-close-button type="button" class="btn btn-outline-dark" style="color: red">Cancel</button>
                </div>   
            </form>     
        </div>
            
                <?php            
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $conn=mysqli_connect("localhost","root","","beavertraveldb");

                        $biotext = trim($_POST["bio-edit"]);

                        $update = "UPDATE users SET bio = ? WHERE id = ?";

                        if($stmt = mysqli_prepare($conn, $update)){
                            mysqli_stmt_bind_param($stmt, "si", $param_bio, $param_id);

                            $param_bio = $biotext;
                            $param_id = $_SESSION["id"];

                            // Attempt to execute the prepared statement
                            if(mysqli_stmt_execute($stmt)){
                                echo "<meta http-equiv=\"refresh\" content=\"0;URL=profile.php\">";
                            } else{
                                echo "Oops! Something went wrong. Please try again later.";
                            }

                            mysqli_stmt_close($stmt);
                        }
                    mysqli_close($conn);
                    }
                ?>

        <!-Account settings->
        <div style="margin-top: 30px; margin-left: 30px; margin-right: 60px;">
            <div style="margin-bottom: 30px;">
                <h1 class="text-muted">Account settings</h1>
            </div>
            <div class="flex-profile-buttons">
                <a href="reset-password.php"><button type="button" class="btn btn-outline-dark">Change password</button></a>
                <a href="reset-email.php"><button type="button" class="btn btn-outline-dark">Change email</button></a>
                <button data-modal-target="#modal" type="button" class="btn btn-outline-dark">Edit "About me"</button>
                <a href="logout.php"><button type="button" class="btn btn-outline-dark" style="color:red;">Logout</button></a>
                <a href="delete-account.php"><button type="button" class="btn btn-outline-dark" style="color:red;">Delete account</button></a>
            </div>
        </div>

        <!-Recend trips->           
        <div style="margin-top: 30px; margin-left: 30px; margin-right: 60px; margin-bottom: 30px;">
            <div style="margin-bottom: 30px;">
                <h1 class="text-muted">Recent trips</h1>
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
            </div>

        <div id="overlay"></div>

        <?php require "footer.php" ?>

        <script src="script.js?v=1"></script>


        <!-Bootstrap bundle->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>
</html>