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
                <th>STAFFID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ADDRESS</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>REGION</th>
                <th>DATE OF BIRTH</th>
                <th>ACTION</th>
            </tr>
            <?php
             $conn=mysqli_connect("localhost","root","","shedless");
             if($conn){
                if(isset($_POST['search'])){
                    $id=$_POST['find'];
                    $select=$_POST['select'];
                    
                   $sql="SELECT *from staff where $select='$id'";
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
                    echo "<td><a href='delete.php?id=".$row['staffId']."' 
                    onclick='return confirm(\"Are you sure you want to DELETE STAFF WITH STAFF NO. SHED".$row['staffId']."\")'> 
                    <button>DELETE<img src=\"remove.png\"></button></a><a href='nav.php?page=update.php&id=".$row['staffId']."' 
                    onclick='return confirm(\"Are you sure you want to UPDATE STAFF WITH STAFF NO. SHED".$row['staffId']."\")'> 
                    <button>UPDATE<img src=\"update.png\"></button></a></td>";                    
                    echo "</tr>";
                }
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
