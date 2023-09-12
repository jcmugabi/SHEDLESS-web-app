<?php
$conn=mysqli_connect("localhost","root","","schedule");

if(isset($_POST['location'])){
    $division=$_POST['division'];
    $village=$_POST['parish'];
    $priority=$_POST['priority'];

    if($village===""||$village==="Select Village"){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Wrong or missing Village.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
       
        return false;
      }
      if($priority===""||$priority==="Select level of priority."){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Wrong or missing Priority.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        return false;
      }
   
    $sql="INSERT INTO location(`locationId`,`division`,`village`,`priority`)
    values(NULL,'$division','$village','$priority')";

    if(mysqli_query($conn,$sql)){
        header('location:scheduler.php');
    }

}
?>