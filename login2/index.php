<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | For Admin </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <div class="navbar">
            <div class="logo"><a href="http://paytmtask.ezyro.com/"><img src="img/main__logo.svg" alt=""></a></div>
          </div>
        </nav>
      </header>
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="#" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="user" placeholder="Email or Username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" placeholder="Password" required>
          </div>
          
          <div class="row button">
            <input type="submit" value="Login" name="login">
          </div>
          <div class="logo" style="text-align: center;" ><a href="#" ><img src="img/main__logo.svg" alt=""></a></div>
        </form>
        <?php
	  if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
      </div>
    </div>
  </body>
</html>
