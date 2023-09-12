<!-- <?php
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css" type="text/css">
</head>
<body>
    <div id="topbar" class="active">
        <div id="menu">
            <img id="menubar" src="bars-solid.svg">
            <form id="search" method="post"  action="nav.php?page=searchStaff.php">
                <select name="select">
                   <option selected hidden>Search By:</option>
                    <option value="staffId">STAFF ID</option>
                    <option value="firstname">FIRST NAME</option>
                    <option value="lastname">LAST NAME</option>
                    <option value="addr">ADDRESS</option>
                    <option value="phoneno">CONTACT</option>
                    <option value="email">EMAIL</option>
                    <option value="gender">GENDER</option>
                    <option value="region">REGION</option>
                </select>
                <input type="search" name="find" placeholder="search staff">
                <button type="submit" name="search"><img src="search.png"></button>
            </form>
        </div>
        <table>
            <tr><td id="image"><img id="profile" src="3.jpeg"></td><td><?php
                    echo $_SESSION['lastname'];
                    ?></td></tr>
        </table>
    </div>
    <div id="leftbar" class="inactive">
        <div id="xmark"><img src="bolt-solid.png"><img src="xmark-solid.svg"><h3>Admin</h3></div>
        <ul>
        <a href="nav.php?page=staff.php"><li><img src="add.png">ADD STAFF</li></a>
        <a href="nav.php?page=update_staff.php"><li><img src="update.png">UPDATE STAFF</li></a>
        <a href="nav.php?page=delete_staff.php"><li><img src="delete.png">DELETE STAFF</li></a>
        <a href="nav.php?page=view.php"><li><img src="view.png">VIEW STAFF</li></a>
        <a href="nav.php?page=graph.php"><li><img src="analysis.png">ANALYSIS</li></a>
        <!-- <a href="nav.php?page=staff.php"><li><img src="view.png">VIEW SCHEDULES</li></a> -->
        <a href="logout.php"><li><img src="logout.png">LOGOUT</li></a>
        </ul>
    </div>
    <div id="rightbar" class="active">
        <?php
        if(isset($_GET['page'])){
            $page=$_GET['page'];
            include($page);
        }else{
            include("staff.php"); 
        }
        ?>
    </div>
    <script src="admin.js"></script>
</body>
</html>
<?php
    //  if(isset($_SESSION['message'])){
    //     $message=$_SESSION['message'];
    //     unset($_SESSION['message']);
    //     echo "<script>alert('$message')</script>";
    //  }
    // ?>