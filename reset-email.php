<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "Config.php";
 
// Define variables and initialize with empty values
$new_email = $confirm_email = "";
$new_email_err = $confirm_email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_email"]))){
        $new_email_err = "Please enter the new e-mail.";     
    } else{
        $new_email = trim($_POST["new_email"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_email"]))){
        $confirm_email_err = "Please confirm the email.";
    } else{
        $confirm_email = trim($_POST["confirm_email"]);
        if(empty($new_email_err) && ($new_email != $confirm_email)){
            $confirm_email_err = "E-mail did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_email_err) && empty($confirm_email_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET email = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_email, $param_id);
            
            // Set parameters
            $param_email = $new_email;
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("location: profile.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset E-mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>


<body>
    <div class="wrapper">
        <h2>Reset E-mail</h2>
        <p>Please fill out this form to reset your E-mail.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New E-mail</label>
                <input type="email" name="new_email" class="form-control <?php echo (!empty($new_email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_email; ?>">
                <span class="invalid-feedback"><?php echo $new_email_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm New E-mail</label>
                <input type="email" name="confirm_email" class="form-control <?php echo (!empty($confirm_email_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_email_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="profile.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>
</html>