<?php
$id=$_GET['id'];

$conn=mysqli_connect("localhost","root","","shedless");
if($conn){
   $sql="DELETE from staff WHERE meterno='$id'";
   if(mysqli_query($conn,$sql)){
    echo "DELETION COMPLETE";
   };
   mysqli_close($conn);
  header("Location:nav.php");
}else{
    die("Not Connected".mysqli_connect_error());
}
?>