<?php
include "connect.php";
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}


$firstnameErr="";$lastnameErr="";
$usernameErr="";$passwordErr="";$emailErr="";

if(isset($_POST['update'])){
    $id = $_SESSION['id'];

       $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
       $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
       $username = mysqli_real_escape_string($conn, strtolower($_POST['userName']));
       $password = mysqli_real_escape_string($conn,$_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $query = "UPDATE register SET 
        firstname = '$firstname',
        lastname = '$lastname',
        username = '$username',
        password = '$hash',
        email = '$email'
         WHERE id=$id ";
          if(empty($firstname)){
            $firstnameErr = "Please enter your username";
          } elseif(empty($lastname)){
            $lastnameErr = "Please enter your username";
        }
          elseif(empty($username)){
            $usernameErr = "Please enter your username";
        }elseif(empty($password)){
            $passwordErr = "Please choose a password";
        }elseif(strlen($password)<=4){
            $passwordErr = "Password must be up to 5 characters";
        }elseif(empty($email)){
            $emailErr = "Please enter your email address";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "The email address is not correct";
        }
        elseif(mysqli_query($conn, $query)){
            header("location:login.php");
        }else{
            echo "Wrong username!!!";
            
        }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>   
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
    <div class='settings'>


            <form action="settings.php" method="post">
                <br><br><br>
            <input type='text' name='firstName' placeholder='Change First Name' class='name'>
            <div class="error"><?php echo $firstnameErr ?></div>
                <br />
                <input type='text' name='lastName' placeholder='Change Last Name' class='name'>
                <div class="error"><?php echo $lastnameErr ?></div>
                <br />
                <input type='text' name='userName' placeholder='Change User Name' class='name'>
                <div class="error"><?php echo $usernameErr ?></div>
                <br />
                <input type='password' name='password' placeholder='Change password' class='name' id="pass">
                <div class="error"><?php echo $passwordErr ?></div>
                <br />
                <input type='email' name='email' placeholder='Change E-Mail' class='name'>
                <div class="error"><?php echo $emailErr ?></div>
                <br />
                <input type='submit' name='update' value='Update' class='btn'>
                <br />
            </form>
        </div>
        <i class="fa fa-eye" aria-hidden="true" id="fa-eye4" onclick="show()"></i>
        
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