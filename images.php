
<?php 
// Include the database configuration file 
include 'connect.php'; 
 session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "db-img/"; 
 
if(isset($_POST["submit"])){
    $id = "";
    $user_id = "";
   
    if(!empty($_FILES["file"]["name"])){ 
        if (isset($_SESSION['id'])){
            $user_id = $_SESSION['id'];
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('JPG','jpg','PNG','JPEG','GIF','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = "INSERT INTO image VALUES ('".$id."','".$fileName."','".$user_id."')";
               
                mysqli_query($conn,$insert);
                if($insert){ 
                    $statusMsg = " ".$fileName. " has been uploaded successfully."; 
                    header("Refresh:0");
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
}

// Display status message 
echo $statusMsg; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
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

<form action="" method="post" enctype="multipart/form-data">
    <p class="image-paragraph">Select Image File to Upload:</p>
    <input type="file" name="file" class="upload-input"> <br>
    <input type="submit" name="submit" value="Upload" class="upload-btn">
</form>


<?php

// Include the database configuration file
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn,"DELETE FROM 'image' WHERE 'id'='$id'");
    header("location:images.php");
    die();
}
// Get images from the database
    if(isset($_SESSION['id'])){
        $sql = "SELECT * FROM register WHERE id='".$_SESSION['id']."'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_object($query);

        $dbid = htmlspecialchars($row->id);
        $sql = "SELECT image FROM image WHERE user_id=$dbid";
        $query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
$i = 1;
while($row = mysqli_fetch_object($query)){

  
   // $img = htmlspecialchars($row->image);
   $imageURL = htmlspecialchars($row->image);
   
    if($imageURL){
        $imageURL = 'db-img/'.$row->image;
    
        echo "<img class='uploaded-img' src='".$imageURL."'>";
       // echo "<a href='download.php?file=$imageURL'>download</a>"; 
        
        //echo "<a href='images.php?id=.$imageURL '>DELETE</a>"; 
    }
    $i++;
}
    }
 ?>

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