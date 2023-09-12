<?php
$con = mysqli_connect("localhost","root","","shedless");

if(!$con){
    die("Connection failed ".mysqli_connect_error());
}
?>