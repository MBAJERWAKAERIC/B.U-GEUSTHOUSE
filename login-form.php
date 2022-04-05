<?php
include('login-script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="text/css">
  .registration-form{
     background: #f7f7f7;
     padding: 20px;
     border: 1px solid orange;
     margin: 50px 0px;
   }
   .err-msg{
     color:red;
   }
   .registration-form form{
     border: 1px solid #e8e8e8;
     padding: 10px;
     background: #f3f3f3;
   }
</style>
</head>
<body>
<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">PHP Login Form</h4>
      <p class="text-success text-center"><xmp>&lt;?php <xmp>echo $login;
?>
</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        
        <!--// Email//-->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            <p class="err-msg">
                
<?php if($emailErr!=1){ echo $emailErr; } ?>
            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
            <p class="err-msg">
                
<?php if($passErr!=1){ echo $passErr; } ?>
            </p>
        </div>
        
        <button type="submit" class="btn btn-danger" value="login" name="register">Login</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>