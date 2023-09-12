<?php
$login=0;
$invalid=0;
include 'connect.php';
if(isset($_POST["register"])){
      $lastname = $_POST["lastname"];
      $staffId = $_POST["staffId"];

      $sql = "Select * from `staff` where lastname ='$lastname' and staffId='$staffId'";

      $result=mysqli_query($con,$sql);
      if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $ss="";
           while($final=mysqli_fetch_assoc($result)){
                $ss=$final;
                
                $region=$ss['region'];
           $firstname=$ss['firstname'];
           
            // echo "Login successfull";
            $login=1;
            session_start();
            $_SESSION['firstname']=$firstname;
            $_SESSION['lastname']=$lastname;
            $_SESSION['region']=$region;
            if($final['lastname']==='FRANCIS'&&$final['staffId']==='35'){
        header('location:../admin/nav.php');
            }
            else{
                header('location:scheduler.php');
            }
            
        }
    }
    else{
        // echo "Invalid data";
        $invalid=1;
    }}
        
            }
      
           
      
  
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <style>
        /* *{
    margin: 0;
    padding: 0;
    font-family: 'poppins', sans-serif;
} */
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background-color: bisque;

    background: url('background.jpg')no-repeat;
    background-position: center;
    background-size: cover;
}

   .form-box{
    padding: 20px;
    position: relative;
    width: 400px;
    height:450px;
    background: grey;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 30px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items:center;
    align-self: center;  

}
 h2{
    font-size: 2.5em;
    color: #fff;
    text-align: center;
}
.input{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.input label{
    position: absolute;
     top: 50%;
     left: 5px;
     transform: translateY(-50%);
     color: #fff;
     font-size: 1em;
     pointer-events:none;
     transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
    top: -5px;
}
.input input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding: 0 35px 0 5px;
    color: #fff;
}
.input img{
    position: absolute;
    right:8px;
    color:#fff;
    font-size:1.2em;
    top: 20px;
}  
.forgot{
    margin: -15px 0 15px;
    font-size: 1em;
    color:#fff;
    display: flex;
    justify-content: center; 
}
.forgot label input{
    margin-right: 3px;
}
.forgot label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hoover{
    text-decoration: underline;

}
.sub{
    width:100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font: size 0.9em;
    color: #fff;
    text-align:center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: green;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}

p{
    text-align: center;
    font-size: 1.1em;
}
        </style>

</head>

<body>
<?php
       if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have successfully logged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>';
    //   header('location:dashboard.php');
       }
    ?>
    <?php
       if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Invalid credentials.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
       }
    ?>
    <script type="text/javascript">
       
    </script>
    <section>
        
        <div class="form-box">
            
            <form action="" method="post">
            <h2>Shed<span class="chess">less</span></h2>
                <div class="input">
                <img src="./images/mail.svg" width="20cm" height="20cm">
                <input  type="text" name="lastname" required>
                 <label>Username</label>
            </div>
            <div class="input">
                <img src="./images/lock.svg" width="20cm" height="20cm">
                <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
                <input type="password" name="staffId" required>
                <!-- <input type="checkbox" onclick="ShowPD();">Show Password -->
                 <label>Password</label>
            </div>
        
            <div class="forgot">
                <label>
                    <a href="#" > Forgot Password ?</a>
                </label>
            </div>
            <!-- <button>Log in</button> -->
            <input type="submit" name="register" value="Login" class="sub">
            <div class="registration">
                <p>
                <p>Don't have an account? <a href="signup.php">Contact Admin</a></p>
                <p>Not a staff member? <a href="../client/login.php">Login</a></p>

            </div>
        </form>

        </div>
    </section>
</body>
</html>
