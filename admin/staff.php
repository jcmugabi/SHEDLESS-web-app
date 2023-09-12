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
</head>
<body>
    <div id="add">
        <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' >
            <h3>ADD STAFF MEMBER</h3>
            <div id="rightform">
            <label for="fname">FIRST NAME</label><br>
            <input id="fname" type="text" name="firstname" required pattern="[A-Za-z]+" title="Please enter a valid first name (letters only)"><br>
            <label for="lname">LAST NAME</label><br>
            <input id="lname" type="text" name="lastname" required pattern="[A-Za-z]+" title="Please enter a valid last name (letters only)"><br>
            <label for="addr">ADDRESS</label><br>
            <input id="addr" type="text" name="addr" required pattern="[A-Za-z]+" title="Please enter a valid ADDRESS(letters only)"><br>
            <label for="contact">CONTACT</label><br>
            <input id="contact" type="text" name="contact" required pattern="^07\d{8}$" title="Format 07**** (10 numbers only)"><br>
            <label for="email">EMAIL</label><br>
            <input id="email" type="email" name="email" required><br>
            <label><input id="male" type="radio" value="MALE" name="gender" required>MALE</label>
            <label><input id="female" type="radio" value="FEMALE" name="gender" required>FEMALE</label><br>
            <select name="region" required>
                <option selected disabled hidden>Deploy a region for staff</option>
                <option value="RUBAGA">RUBAGA</option>
                <option value="CENTRAL">CENTRAL</option>
                <option value="KAWEMPE">KAWEMPE</option>
                <option value="NAKAWA">NAKAWA</option>
                <option value="MAKINDYE">MAKINDYE</option>
            </select><br>
            <label for="dob">Date of Birth : <label>
            <input id="dob" type="date" name="dob" max="2005-01-01" required><br><br>
            <input type="submit" value="ADD STAFF" name="submit">
            
            </div>
            <div id="leftform">
              <img src="add.png"/>  
            </div>
        </form>
    </div>
</body>
</html>
