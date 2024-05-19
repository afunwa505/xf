<<<<<<< HEAD
<?php
include "connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<main>
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
   
    
    <?php  if (isset($_SESSION['username'])) : ?>
           <p style="color: white; margin:15% 0 0 50px"><?php echo $_SESSION['username']; ?> </p>
            <?php endif ?>
      
    <section class="container2">
        <ul>
            <li><a href="images.php">Images</a></li>
            <li><a href="audios.php">Audios</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="documents.php">Documents</a></li>
        </ul>
    </section>
</main>

</body>
