<?php
include("admin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="staffss.css" type="text/css">
    <style>
       span{
        font-size:80px;
        border-radius:50%;
        color:white;
        background-color:#04392a;
        border: 1px solid black;
        position: absolute;
        height: 120px;
        width: 150px; 
        display:flex;
        justify-content:center;
        align-items:center;
        }
       </style> 
</head>
<body>
    <div id="add">
        <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' >
        <?php
      $id=$_GET['id'];

      $conn=mysqli_connect("localhost","root","","shedless");
      if($conn){
          $sql="SELECT *from staff where staffId='$id'";
          $result=mysqli_query($conn,$sql);
          if($result){
              while($row=mysqli_fetch_assoc($result)){
               $ro=$row;
              } 
              
            echo "<h3>UPDATE STAFF </h3>";
            echo  '<div id="rightform">';
            echo "<label for='fname'>FIRST NAME</label><br>";
            echo "<input id='fname' type='text' name='firstname' required pattern='[A-Za-z]+' title='Please enter a valid first name (letters only)' value='".$ro["firstname"]."'><br>";
            echo "<label for='lname'>LAST NAME</label><br>";
            echo "<input id='lname' type='text' name='lastname' required pattern='[A-Za-z]+' title='Please enter a valid last name (letters only)' value='".$ro["lastname"]."'><br>";
            echo "<label for='addr'>ADDRESS</label><br>";
            echo "<input id='addr' type='text' name='addr' required pattern='[A-Za-z]+' title='Please enter a valid ADDRESS(letters only)' value='".$ro["addr"]."'><br>";
            echo "<label for='contact'>CONTACT</label><br>";
            echo "<input id='contact' type='text' name='contact' required pattern='^07\d{8}$' title='Format 07**** (10 numbers only)' value='".$ro["phoneno"]."'><br>";
            echo "<label for='email'>EMAIL</label><br>";
            echo "<input id='email' type='email' name='email' value='".$ro["email"]."' required><br>";
            echo "<input type='hidden' name='id' value='".$ro["staffId"]."'>";
            echo '<label><input id="male" type="radio" value="MALE" required name="gender" ' . ($ro['gender'] === 'MALE' ? 'checked="checked"' : '') . '>MALE</label>';
            echo '<label><input id="female" type="radio" value="FEMALE" required name="gender" ' . ($ro['gender']==='FEMALE' ? 'checked="checked"' :'') . '>FEMALE</label><br>';
            echo '<select name="region" required>
                <option selected hidden>'.$ro["region"].'</option>
                <option value="RUBAGA">RUBAGA</option>
                <option value="CENTRAL">CENTRAL</option>
                <option value="KAWEMPE">KAWEMPE</option>
                <option value="NAKAWA">NAKAWA</option>
                <option value="MAKINDYE">MAKINDYE</option>
            </select><br>';
            echo '<label for="dob">Date of Birth : <label>';
            echo '<input id="dob" type="date" name="dob" required max="2005-01-01"  value="'.$ro["dob"].'"><br><br>';
            echo "<input type='submit' value='UPDATE STAFF' name='update'>";
            
            echo '</div>
            <div id="leftform">';
            echo '<span>'.$ro['staffId'].'</span>'; 
            echo '</div>'; 
          }
      }else{
          die("Not Connected".mysqli_connect_error());
      }      
            ?>
        </form>
    </div>
</body>
</html>


