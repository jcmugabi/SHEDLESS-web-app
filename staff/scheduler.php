<?php
// Check if the user is logged in, otherwise redirect to the login page.
session_start();
if(!isset($_SESSION['lastname'])){
    header('location:staff.php');
}
// include('location.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="scheduler.css" />
  <title>SCHEDULE</title>
  <style>
    .form-wrapper{
     margin-left:30%;
     height:100%;
     width:50%;
     margin-top:6%;
    }
    #staff{
      position:relative;
      width:100%;
      border:1px solid black;
      height:15%;
      margin-bottom:10px;
    }
    p{
      background-color:#c1f0e3;
      border-radius:10px;
      font-size:27px;
      position: absolute;
      float:right;
      right:3%;
      top:2%;
      color:#04302a;
    }

    h3{
      font-family: 'Courier New', Courier, monospace;
      text-decoration:underline;
    }
    .alert-danger,.alert-success{
  position: relative;
  right: 50%;
  float: right;

}
  </style>
</head>

<body>
  <?php
      include('location.php');
  ?>
  <div class="container">
    <div class="sidebar">
      <div id='staff'>
        <h3>STAFF Dashboard</h3>
      </div>
      <a class="button-link" href="schedule_man.php">Schedule Management</a>
      <!-- <a class="button-link" href="../view/table.html">Schedule</a> -->
      <!-- <a class="button-link" href="../view_parish/parishes.php">Parishes</a> -->
      <a class="button-link" href="logout.php">Logout</a>
    </div>
   

    <p><?php echo $_SESSION['firstname']; echo ' '.$_SESSION['lastname']; ?></p>
    <div class="form-wrapper">
      <h1 class="company-name">SHEDLESS LOCATIONS</h1>
      <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>

        <div class="form-group">
          <!-- <select id="division" name="division" onchange="updateParishes()">
            <option value="">Select Division</option>
            <option value="nakawa">Nakawa</option>
            <option value="kawempe">Kawempe</option>
            <option value="central">Central</option>
            <option value="rubaga">Rubaga</option>
            <option value="makindye">Makindye</option>
          </select> -->
          <input type="text" style="width:96%" id="division" value="<?php echo $_SESSION['region']; ?>" name="division" readonly>
        </div>
        <div class="form-group">
          <select id="parish" name="parish">
            <option selected hidden disabled>Select Village</option>
          </select>
        </div>

        <script>
          // JavaScript function to update the Parish dropdown based on the selected division
         
            var divisionSelect = document.getElementById("division");
            var parishSelect = document.getElementById("parish");
            

            // Define the parishes corresponding to each division in PHP-like associative array
            var parishes = {
              "NAKAWA": ["Banda", "Bugoloobi", "Bukoto I", "Bukoto II", "Butabika", "I.T.E.K.", "Kiswá", "Kiwatule", "Kyambogo", "Kyanja", "Luzira", "Luzira Prisons", "Mbuya I", "Mbuya II", "Mutungo", "Nabisunsa", "Naguru I", "Naguru II", "Nakawa", "Nakawa Institutions", "Ntinda", "U.P.K. Upper Estate"],

              "KAWEMPE": ["Bwaise I", "Kanyanya", "Kazo Ward", "Kyebando", "Makerere III", "Mulago I", "Bwaise II", "Kawempe I", "Kikaya", "Makerere I", "Mpererwe", "Mulago III", "Bwaise III", "Kawempe II", "Komambogo", "Makerere II", "Mulago II", "Makerere University"],

              "CENTRAL": ["Bukasa", "Civic Centre", "Industrial Area", "Kagugube", "Kamwokya I", "Kamwokya II", "Kisenyi I", "Kisenyi II", "Kisenyi III", "Kololo", "Mengo", "Nakasero", "Nakivubo", "Old Kampala", "Rugandabara", "Ssese"],

              "RUBAGA": ["Busega", "Kabowa", "Kasubi", "Lubia", "Lungujja", "Mutundwe", "Najjanankumbi I", "Najjanankumbi II", "Namirembe", "Ndeeba", "Nateete"],

              "MAKINDYE": parishes = ["Buwaise", "Bukasa", "Chengere", "Ggaba", "Kabalagala", "Kakoo", "Kansanga-Muyenga", "Kibuye", "Kibuli", "Lubiri", "Makindye", "Muyenga", "Nsambya", "Ntinda", "Salaama", "Wabigalo"]

            };

            var selectedDivision = divisionSelect.value;

            // Clear the current options in the Parish dropdown
            // parishSelect.innerHTML = "";

            // Populate the Parish dropdown with options based on the selected division
            if (selectedDivision !== "") {
              for (var i = 0; i < parishes[selectedDivision].length; i++) {
                var option = document.createElement("option");
                option.value = parishes[selectedDivision][i];
                option.text = parishes[selectedDivision][i];
                parishSelect.appendChild(option);
              }
            } else {
              var defaultOption = document.createElement("option");
              defaultOption.value = "";
              defaultOption.text = "Select Parish";
              parishSelect.appendChild(defaultOption);
          }
       
        </script>
        <!-- <div class="form-group">
          <label for="village">Village:</label>
          <input type="text" id="village" name="village" required />
        </div> -->
        <div class="form-group">
          <select id="priority" name="priority">
            <option value="">Select Level of Priority</option>
            <option value="level1">Level 1</option>
            <option value="level2">Level 2</option>
            <option value="level3">Level 3</option>
          </select>
        </div>

        <button type="submit" name="location">SUBMIT</button>
        <?php
  ?>
      </form>
    </div>
  </div>
</body>

</html>