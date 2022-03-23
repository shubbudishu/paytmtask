<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
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
        <div class="title"><span>Users List</span></div>
        <form action="#" method="post">
        <table>
        <tbody>
              <tr>
                <th>S No.</th>
                <th>Users</th>
                <th>Payment</th>
                <th colspan='2'style='text-align:center;'>Action</th>
              </tr>
              <?php 
                $pay_sql = "SELECT * FROM payment_status";
                $pay_result = mysqli_query($con, $pay_sql);
                $pay_row = mysqli_fetch_assoc($pay_result);
                $sql = "SELECT id,name FROM new_users";
                $result = mysqli_query($con, $sql);
                $i=1;
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $pay_row['status']; ?></td>
                      <td><a href="../show.php?id=<?php echo $row['id']; ?>">View</a></td>
                      <td><a href="../delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>
                    
                  <?php } ?>

                <?php } else {
                  echo "0 results";
                }
              ?>
              </tbody>
          </table>
             
        </form>
        <div class="reminder">
          <p><a href="logout.php" class="btn">Log out</a></p>
        </div>
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
<style>
html{
    overflow: scroll;
  }
  
 table {
    width: 100%;
    display:block;
}

tbody {
    height: 500px;
    display: inline-block;
    width: 100%;
    overflow: auto;
}
</style>