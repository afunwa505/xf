
<?php
include "connect.php";

$firstnameError="";$lastnameError="";$usernameError="";$password1Error="";$password2Error="";$emailError="";
if(isset($_POST['submit'])){
    $id="";
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $username = mysqli_real_escape_string($conn,strtolower($_POST['username']));
    $password1 = mysqli_real_escape_string($conn,$_POST['password1']);
    $hash = password_hash($password1, PASSWORD_DEFAULT);
    $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $sql = "INSERT INTO register VALUES('$id','$firstName','$lastName','$username','$hash','$email')";

    if(empty($firstName)){
        $firstnameError = "Enter your firstname";
    }elseif(empty($lastName)){
        $lastnameError = "Enter your Last Name";
    }elseif(empty($username)){
        $usernameError = "Enter your username";
    }elseif(empty($password1)){
        $password1Error = "Enter your password";
    }elseif(strlen($password1) <= 4){
        $password1Error = "Password must be up to 5 characters";
    }elseif(empty($password2)){
        $password2Error = "Verify your password";
    }elseif($password2 != $password1){
        $password2Error = "Password does not match";
    }elseif(empty($email)){
        $emailError = "Enter your email address";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailError = "Invalid email address";
    }elseif(mysqli_query($conn,$sql)){
        header('location:login.php');
    }else{
        echo "ERROR: something went wrong!!!"
            .mysqli_error($conn);
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://use.fontawesome.com/1dfdf7e8fe.js">

    </script>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </nav>
        <div class="nav2">
            <a href="login.php" class="link1"><div class="login">LOG IN</div></a>
            <a href="register.php" class="link2"><div class="register">SIGN UP</div></a>
        </div>
    </header>
    <div class="mobile-nav">
   <a href="login.php" class="mobile-login"><div >LOG IN</div></a>
            <a href="register.php" class="mobile-register"><div >SIGN UP</div></a>
   </div>
   <i class="fa fa-bars" aria-hidden="true" id="hamburger" onclick="display()"></i>
   <i class="fa fa-times" aria-hidden="true" id="close" onclick="hide()"></i>

<div class='register-form'>
            <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
            <input type='text' name='firstName' placeholder='Enter your First Name' class='name'>             
                <div class="error"><?php echo $firstnameError ?></div>
                <br />
                <input type='text' name='lastName' placeholder='Enter your Last Name' class='name'>
                <div class="error"><?php echo $lastnameError ?></div>
                <br />
                <input type='text' name='username' placeholder='Choose a Username' class='name'>
                <div class="error"><?php echo $usernameError ?></div>
                <br />              
                <input type='password' name='password1' placeholder='Choose a strong password' class='password' id="pass">
                <div class="error"><?php echo $password1Error ?></div>
                <br />
                <input type='password' name='password2' placeholder='Re-type your password
                ' class='password' id="pass2">
                <div class="error"><?php echo $password2Error ?></div>
                <br />
                <input type='email' name='email' placeholder='Enter your E-Mail' class='name'>
                <div class="error"><?php echo $emailError ?></div>
                <br />
                <input type='submit' name='submit' value='Register' class='btn'>
                <br />
            </form>
        </div>
        <i class="fa fa-eye" aria-hidden="true" id="fa-eye2" onclick="show()"></i>
        <i class="fa fa-eye" aria-hidden="true" id="fa-eye3" onclick="show2()"></i>
        
        <div class="mobile-nav2">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>
        <script src="./js/intro.js"></script>
</body>
</html>