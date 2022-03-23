<?php
include("login2/session.php");
include("login2/dbcon.php");

$id=$_GET['id'];

$sql = "SELECT id,name, gender, state, city, address, pincode, paytm, email, qualification, dob, pan, aadhar ,pan_upload, aadhar_upload, self_declaration, shop_photos, bc_radio FROM new_users where id= '$id'";
$result = mysqli_query($con, $sql);



?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Form | For Admin </title>
    <link rel="stylesheet" href="login2/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body >
    
        
      <div class="container">
        <header>
          <nav>
            <div class="navbar">
              <div class="logo"><a href="http://paytmtask.ezyro.com/"><img src="images/main__logo.svg" alt=""></a></div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
        <div class="title"><span>Users Data</span></div>
        <form action="#" method="post">
        <table style="Overflow-y:auto">
        <tbody>
              <tr>
                <th>Info</th>
                <th>Values</th>
              </tr>
              <?php 
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {?>
                  <tr>
                    <td>Name</td>
                    <td><?php echo $row['name']; ?></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td><?php echo $row['gender']; ?></td>
                  </tr>
                  <tr>
                    <td>State</td>
                    <td><?php echo $row['state']; ?></td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td><?php echo $row['city']; ?></td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td><?php echo $row['address']; ?></td>
                  </tr>
                  <tr>
                    <td>Pincode</td>
                    <td><?php echo $row['pincode']; ?></td>
                  </tr>
                  <tr>
                    <td>Paytm</td>
                    <td><?php echo $row['paytm']; ?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?php echo $row['email']; ?></td>
                  </tr>
                  <tr>
                    <td>Qualification</td>
                    <td><?php echo $row['qualification']; ?></td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td><?php echo $row['dob']; ?></td>
                  </tr>
                  <tr>
                    <td>PAN</td>
                    <td><?php echo $row['pan']; ?></td>
                  </tr>
                  <tr>
                    <td>Aadhar</td>
                    <td><?php echo $row['aadhar']; ?></td>
                  </tr>
                  <tr>
                    <td>PAN Upload</td>
                    <td>
                      <img src="<?php echo "uploads/".$row['pan_upload']; ?>" width="100px" alt="pan card">
                    </td>
                  </tr>
                  <tr>
                    <td>AAdhar Front</td>
                    <td>
                      <img src="<?php echo "uploads/".$row['aadhar_upload']; ?>" width="100px" alt="pan card">  
                    </td>
                  </tr>
                  <tr>
                    <td>Aadhar Back</td>
                    <td>
                      <img src="<?php echo "uploads/".$row['self_declaration']; ?>" width="100px" alt="pan card">  
                    </td>
                  </tr>
                  <tr>
                    <td>Self Photos</td>
                    <td>
                      <img src="<?php echo "uploads/".$row['shop_photos']; ?>" width="100px" alt="pan card">    
                    </td>
                  </tr>
                  <tr>
                    <td>BC Person</td>
                    <td><?php echo $row['bc_radio']; ?></td>
                  </tr>
                  <?php  
                }
              } 
            else {
              echo "0 results";
            }
          ?>
        </tbody>
        </table>
              
          <div class="row back_div" style="margin-top:20px;">
            <button type="button" onclick="history.back()" class="back_button" name="back_button">Back</button>
          </div>
        </form>
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
<?php mysqli_close($con); ?>