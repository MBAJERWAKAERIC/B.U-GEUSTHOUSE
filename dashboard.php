<?php

session_start();
$email_address= $_SESSION['email'];
if(empty($email_address))
{
  header("location:login-form.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="header">
<h1>Welcome to Dashboard  <a href="logout.php">Logout</a></h1>
</div>
<div class="user-box">
    <div class="user-detail">
      <p>Your Email Address</p>
      <h3>
      
<?php

        echo $email_address;
      
?>

    </h3>
    </div>
  </div>

</body>
</html>