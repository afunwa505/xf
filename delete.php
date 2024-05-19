<?php 
// DELETE IMAGE WHEN DELETE BUTTON IS CLICKED
    include "connect.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
$query="DELETE FROM image WHERE id=$id";
mysqli_query($conn,$query);
if(!$delete){
    die("failed");
    
}

header("location:images.php");
}
    
?>