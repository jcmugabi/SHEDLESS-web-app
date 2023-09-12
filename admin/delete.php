<?php
$id=$_GET['id'];

$conn=mysqli_connect("localhost","root","","shedless");
if($conn){
   $sql="DELETE from staff WHERE staffId='$id'";
   if(mysqli_query($conn,$sql)){
// echo "deleted";
    mysqli_close($conn);
    header("Location:nav.php?page=delete_staff.php");
   };
   
}else{
    die("Not Connected".mysqli_connect_error());
}
?>