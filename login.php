<<<<<<< HEAD
<?php 
session_start();
    include "connect.php";
    $usernameError = "";$passwordError="";

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn,$_POST['userName']);
        $pass = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT * from register where username='$username'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $password = $row['password'];
            $decrypt = password_verify($pass, $password);

            if($decrypt){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("location:profile.php");
            }else{
                $passwordError = "Wrong password";
            }
        }else{
            $usernameError = "Wrong username";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
<div class='login-form'>
            <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
                <input type='text' name='userName' placeholder='Enter your User Name' class='userName' >
                <div class="error"><?php echo $usernameError ?></div>
                <br />
                
                <input type='password' name='password' placeholder='Enter your Password' class='password' id="pass" >
                <div class="error"><?php echo $passwordError ?></div>
                <br />
               
                <input type='submit' name='submit' value='Log In' class='btn'></input>
                <br />
                <p><a href="forgottenPassword.php">Forgotten Password?</a></p>
            </form>
        </div>
        <i class="fa fa-eye" aria-hidden="true" id="fa-eye" onclick="show()"></i>
        
        <script src="./js/intro.js"></script>
</body>

