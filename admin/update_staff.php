<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="u_staff.css">
</head>
<body>
    <div id="update">
        <table>
            <tr>
                <th>STAFFID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ADDRESS</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>REGION</th>
                <th>DATE OF BIRTH</th>
                <th>UPDATE STAFF</th>
            </tr>
            <?php
             $conn=mysqli_connect("localhost","root","","shedless");
             if($conn){
                $sql="SELECT *FROM staff";
                $result= mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>SHED".$row['staffId']."</td>";
                    echo "<td>".$row['firstname']."</td>";
                    echo "<td>".$row['lastname']."</td>";
                    echo "<td>".$row['addr']."</td>";
                    echo "<td>".$row['phoneno']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['region']."</td>";
                    echo "<td>".$row['dob']."</td>";
                    echo "<td><a href='nav.php?page=update.php&id=".$row['staffId']."' 
                    onclick='return confirm(\"Are you sure you want to UPDATE STAFF WITH STAFF NO. SHED".$row['staffId']."\")'> 
                    <button>UPDATE<img src=\"update.png\"></button></a></td>";                    
                    echo "</tr>";
                }
             }else{
               $err=die("Not Connected".mysqli_connect_error());
             }
   mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>