<<<<<<< HEAD


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
    <div class='settings'>
            <form action='' method=''>
                <br><br><br>
            <input type='text' name='firstName' placeholder='Change First Name' class='name'>
                <br />
                <input type='text' name='lastName' placeholder='Change Last Name' class='name'>
                <br />
                <input type='text' name='userName' placeholder='Change User Name' class='name'>
                <br />
                <input type='password' name='password' placeholder='Change password' class='name' id="pass">
                <br />
                <input type='email' name='email' placeholder='Change E-Mail' class='name'>
                <br /><br />
                <label>Change profile picture</label>
                <br />
                <input type='file' name='file' class='file'>
                <br />
                <input type='submit' name='submit' value='Submit' class='btn'>
                <br />
            </form>
        </div>
        <i class="fa fa-eye" aria-hidden="true" id="fa-eye4" onclick="show()"></i>
        
        <script src="./js/intro.js"></script>
</body>
