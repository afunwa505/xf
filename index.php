


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <!--Navigation for mobile-->
   <div class="mobile-nav">
   <a href="login.php" class="mobile-login"><div >LOG IN</div></a>
            <a href="register.php" class="mobile-register"><div >SIGN UP</div></a>
   </div>
   <i class="fa fa-bars" aria-hidden="true" id="hamburger" onclick="display()"></i>
   <i class="fa fa-times" aria-hidden="true" id="close" onclick="hide()"></i>

    <div class="container1">
    <!-- There is a background image here -->
    </div>
    <div class="mobile-nav2">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>
    <div class="footer">      
    <div class="terms"><a href="terms.php">Terms and Condition</a></div>
        <div class="year">&copy; All Rights Reserved,<span id="span"></span></div>
    </div>
    <script src="./js/intro.js">
       
    </script>
</body>
</html>