<!DOCTYPE html>
<html>
<head>
  <title>Schedule Management</title>
  <!-- <link rel="stylesheet" href="scheduler.css" /> -->
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    /* Styles for the sidebar */

.sidebar {
    height: 100vh;
    /* Set the height of the sidebar to full viewport height */
    width: 200px;
    /* Set the width of the sidebar */
    background-color: #b3be35;
    /* Sidebar background color */
    padding: 20px;
    /* Add some padding inside the sidebar */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: fixed;
    /* Set the sidebar as fixed */
    top: 0;
    /* Align the sidebar to the top of the viewport */
    left: 0;
    /* Align the sidebar to the left of the viewport */
}
 

/* Styling for the button-like links */

.button-link {
    display: block;
    width: 150px;
    margin-bottom: 10px;
    padding: 10px 20px;
    text-align: center;
    color: #fff;
    background-color: grey;
    /* Button background color (blue) */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}


    .container {
      max-width: 600px;
      margin-left:32%;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .schedule-form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }

    .schedule-form input[type="text"],.schedule-form input[type="date"],
    .schedule-form select {
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
      width: 100%;
      box-sizing: border-box;
    }
   #endtime,#startime,#date{
    width:30%;
   }
   #endtime,#startime{
    margin-left: 4%;
   }
    .schedule-form input[type="submit"] {
      background-color: #b3be35;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
    }

    .schedule-list {
      margin-bottom: 20px;
      overflow-y: scroll;
      height: 300px;
      width:100%;
    }

    .schedule-item {
      background-color: #f5f5f5;
      padding: 10px;
      border-radius: 3px;
      margin-bottom: 10px;
    }

    .schedule-item .schedule-info {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .schedule-item .schedule-info span {
      font-weight: bold;
    }

    .schedule-item .schedule-actions {
      display: flex;
      justify-content: flex-end;
    }

    .schedule-item .schedule-actions a {
      margin-left: 10px;
      color: #04392a;
      text-decoration: none;
    }

    .schedule-item .schedule-actions a:hover {
      text-decoration: underline;
    }
    table{
      position:relative;
      width:100%;
      border-collapse:collapse;
    }
    th{
      position: sticky;
      height: fit-content;
      top:0%;
      background-color:green;
      border:1px solid black;
    }
    td{
      border:1px solid black;
    }
    img{
    width: 15px;
    height:15px;
    padding-left: 3px;
}
.alert-danger,.alert-success{
  position: relative;
  right: 2px;
  float: right;

}
  </style>
</head>
<body>
<?php
include('save_location.php');
?>
<div class="container1">
<div class="sidebar">
      <a class="button-link" href="scheduler.php">Shedless Locations</a>
      <!-- <a class="button-link" href="../view/table.html">Schedule</a> -->
      <!-- <a class="button-link" href="../view_parish/parishes.php">Parishes</a> -->
      <a class="button-link" href="logout.php">Logout</a>
    </div>
<div class="container">

<h2>Schedule Management</h2>

<div class="schedule-form">
  <h3>Create New Schedule</h3>
  <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
  <select name="village">
    <!-- <input type="text" name="subcounty" placeholder="Sub-county" required> -->
    <?php
$division= $_SESSION['region'];
 if($conn){
  $sql="select village from location where division='$division'";
  $result=mysqli_query($conn,$sql);
  $rowsReturned= mysqli_num_rows($result);
  if($rowsReturned>0){
    echo "<option hidden selected disabled>Select a scheduled location</option>";
    while($row=mysqli_fetch_assoc($result)){
      echo "<option value='" . $row['village'] . "'>" . $row['village'] . "</option>";
    }
  }else{
    echo "<option disabled selected hidden>You have no registered location!</option>";
  }
 }else{
  echo "Connection failed";
 }

?>
    </select>
    <label>DATE:</label>
    <input type="date" name="date" id="date" placeholder="Date" required>
    <label>Start Time:</label>
    <input type="datetime-local" name="starttime" id="startime" placeholder="Start Time" required>
    <br>
    <label>End Time:</label>
    <input type="datetime-local" name="endtime" id="endtime" placeholder="End Time" required>
    <select name="week">
        <option hidden selected>Choose a week</option>
        <option value="week1">Week 1</option>
        <option value="week2">Week 2</option>
        <option value="week3">Week 3</option>
        <option value="week4">Week 4</option>
    </select>
    <select name="reason">
        <option hidden selected>Choose a reason</option>
        <option value="heavytraffic">Heavy traffic</option>
        <option value="maintenance">Maintenance</option>
    </select>
    <input type="submit" value="SCHEDULE" name="schedule">
  </form>
</div>

<div class="schedule-list">
  <h3>Scheduled Load Shedding in <?php echo $_SESSION['region'];?></h3>
  <table>
    <th>WEEK</th>
    <th>VILLAGE</th>
    <th>START TIME</th>
    <th>END TIME</th>
    <th>REASON</th>
    <th>ACTION</th>
    <?php
 if($conn){
  $division= $_SESSION['region'];
  $sql="select scheduleId,week,village,starttime,endtime,reason from schedule";
  $result=mysqli_query($conn,$sql);
  $rowsReturned= mysqli_num_rows($result);
  if($rowsReturned>0){
    while($row=mysqli_fetch_assoc($result)){
      echo "<tr><td>".$row['week']."</td>
      <td>".$row['village']."</td>
      <td>".$row['starttime']."</td>
      <td>".$row['endtime']."</td>
      <td>".$row['reason']."</td>
      <td><a href='delocation.php?id=".$row['scheduleId']."' 
      onclick='return confirm(\"Are you sure you want to DELETE this location".$row['scheduleId']."\")'> 
      <button>DELETE<img src=\"../admin/remove.png\"></button></a></td></tr>";
    }
  }else{
    echo "<tr><td colspan='2'>You have no scheduled locations!</td></tr>";
  }
 }else{
  echo "Connection failed";
 }

?>
  </table>
</div>

</div>

</div>
 
</body>
</html>
















  
    
  
