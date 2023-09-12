<?php
$firstname=$lastname=$addr=$contact=$email=$gender=$region=$dob="";
$conn=mysqli_connect("localhost","root","","shedless");
if($conn){
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $addr=$_POST['addr'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $region=$_POST['region'];
    $dob=$_POST['dob'];
    

    if ($region === "" || $region === "Deploy a region for staff") {
        return false;
    }

    $sql="INSERT INTO staff(`staffId`,`firstname`,`lastname`,`addr`,`phoneno`,`email`,`gender`,`region`,`dob`) 
    VALUES(NULL,'$firstname','$lastname','$addr','$contact','$email','$gender','$region','$dob')";
    if(mysqli_query($conn,$sql)){
      header("Location:nav.php?page=delete_staff.php");
    }else{
    echo mysqli_error($conn);
   }
}
if(isset($_POST['update'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $addr=$_POST['addr'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $region=$_POST['region'];
    $dob=$_POST['dob'];
    $id=$_POST['id'];

        $sql="UPDATE staff SET firstname='$firstname',
        lastname='$lastname', addr='$addr', phoneno='$contact', email='$email', gender='$gender', region='$region',dob='$dob' WHERE staffId='$id'";
         if(mysqli_query($conn,$sql)){
            header("Location:nav.php?page=update_staff.php");
           }else{
            echo mysqli_error($conn);
           }
}
mysqli_close($conn);
}else{
    die("Not Connected".mysqli_connect_error());
}?>