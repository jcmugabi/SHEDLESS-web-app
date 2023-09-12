
<?php
$id=$_GET['id'];
 
$conn=mysqli_connect("localhost","root","","schedule");
if($conn){
   $sql="DELETE from schedule WHERE scheduleId='$id'";
   if(mysqli_query($conn,$sql)){
// echo "deleted";
    mysqli_close($conn);
    header("Location:schedule_man.php");
   };
   
}else{
    die("Not Connected".mysqli_connect_error());
}
?>
