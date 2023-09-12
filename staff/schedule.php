
<?php

$conn=mysqli_connect("localhost","root","","schedule");
if(isset($_POST['schedule'])){
    $week=$_POST['week'];
    $village=$_POST['village'];
    $date=$_POST['date'];
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];
    $reason=$_POST['reason'];

    if($village===""||$village==="Select a village"){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong>Missing a avillage
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      return false;
    }
    if($reason===""||$reason==="Choose a reason"){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Wrong or missing reason
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      return false;
    }
    if($week===""||$week==="Choose a week"){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Wrong or missing week
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      return false;
    }

    $sql="INSERT INTO schedule(`scheduleId`,`week`,`village`,`date`,`starttime`,`endtime`,`reason`)
    values(NULL,'$week','$village','$date','$starttime','$endtime','$reason')";

    if(mysqli_query($conn,$sql)){
      //  echo "<script>alert('SUCCESSFULLY SUBMITTED');</script>";
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Schedule Uploaded Successfully!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
       }
       else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Wrong data
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        return false;
       
    }
}

?>
