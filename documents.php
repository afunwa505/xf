<<<<<<< HEAD
session_start();
if(isset($_POST['submit'])){
    $id = "";
    $text = $_POST['test'];
    $user_id = "";
  if (isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
    $sql = "INSERT INTO image VALUES('$id','$text','$user_id')";
    if(mysqli_query($conn,$sql)){
        header('location:login.php');
    }else{
        echo "ERROR: something went wrong!!!"
            .mysqli_error($conn);
    }
}
mysqli_close($conn);
  }

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/style.css">
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
   
    <script src="./js/intro.js"></script>
</body>
