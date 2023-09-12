<?php
 $con=mysqli_connect("localhost","root","","shedless");
 if($con){
    $sql="select region,COUNT(region) as Dist from staff group by region";
    $result=mysqli_query($con,$sql);
    $values=[];
    while($row=mysqli_fetch_assoc($result)){
        // echo $row['addr']."..........".$row['Dist'];
        // echo "<br>";

    $values[$row['region']]=$row['Dist'];

    }
    
   $encodedData=json_encode($values);

   header('Content-Type: application/json');
   echo $encodedData;
   
 }else{
    echo "Dint connect";
 }
?>