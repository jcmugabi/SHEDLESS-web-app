<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="destaff.css" type="text/css">
</head>
<body>
    <div id="delete">
        <table>
            <tr>
                <th>METERNO</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ADDRESS</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
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
                    echo "</tr>";
                }
             mysqli_close($conn);
             }else{
               $err=die("Not Connected".mysqli_connect_error());
             }
            ?>
        </table>
            </div>
</body>
</html>
