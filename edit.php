<?php include('meta.php') ?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
$id=$_GET['id'];

        $host = "sql210.ezyro.com";
        $dbUsername = "ezyro_31232015";
        $dbPassword = "Kam@123lesh";
        $dbName = "ezyro_31232015_db_test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {

            $sql = "SELECT * FROM new_users where id= '$id'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            ?>
<header>
      <nav>
        <div class="navbar">
          <i class='bx bx-menu'></i>
          <div class="logo"><a href="#"><img src="images/main__logo.svg" alt=""></a></div>
          <div class="nav-links">
            <div class="sidebar-logo">
              <span class="logo-name"><img src="images/main__logo.svg" alt=""></span>
              <i class='bx bx-x' ></i>
            </div>
            <ul class="links">
              <li><a href="login2/index.php">Login</a></li>
              <li><a href="#">Opportunity</a></li>
              <li><a href="#">Product</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Testimonials</a></li>
            </ul>
          </div>
          <button name="submit" type="submit" class="btn">
            Update &nbsp;&nbsp; <i class="fa fa-chevron-right"></i>
          </button>
        </div>
      </nav>
    </header>
    <div class="form">
      <div class="text-area">
        <div class="my-container">
          <h1>Update<span>Details</span></h1>
          <div >
            <img
            class="agent-image"
              src="images/agent.svg"
              alt="main image of agent"
            />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="form-test">
          <form target="_blank" action="edit_ok.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
            <div class="content">
              <input placeholder="Name*" class="name-field" name="name" value="<?php echo $row['name']; ?>" />
              <div class="input-space"></div>
              
              <h5>Gender</h5>
              
              <div class="container">
                <div class="gender-center">
                  <input type="radio" id="male" name="gender" value="<?php echo $row['gender']; ?>">
                  <label for="male">Male</label>
                </div>
                
                <div class="gender-center">
                  <input type="radio" id="female" name="gender" value="<?php echo $row['gender']; ?>">
                  <label for="female">Female</label>
                </div>
                
                <div class="gender-center">
                  <input type="radio" id="others" name="gender" value="<?php echo $row['gender']; ?>">
                  <label for="others">Others</label>
                </div>
              </div>
                
            </div>
              <div class="input-space"></div>

              <div class="select">
                <select name="state" id="stateField">
                  <option value="<?php echo $row['state']; ?>">Select State*</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Delhi NCR">Delhi NCR</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                </select>
              </div>
              <div ></div>
              <input placeholder="City*" name="city" id="cityField" value="<?php echo $row['city']; ?>" />
              <div ></div>
              <input placeholder="Address*" name="address" id="addressField" value="<?php echo $row['address']; ?>" />
              <div ></div>
              <input
                placeholder="Pincode*"
                name="pincode"
                maxlength="6"
                value="<?php echo $row['pincode']; ?>"
              />
              <div ></div>
              <input
                type="text"
                placeholder="Paytm Number*"
                name="paytm"
                maxlength="10"
                value="<?php echo $row['paytm']; ?>"
                
              />
              <div>
                
              </div>
              <input type="email" placeholder="Email ID*" name="email" value="<?php echo $row['email']; ?>" />
              <div></div>
              <div class="clear"></div>
              <div class="select">
                <select name="qualification" value="<?php echo $row['qualification']; ?>">
                  <option value="">Educational Qualification*</option>
                  <option value="10th Board">10th Board</option>
                  <option value="12th Board">12th Board</option>
                  <option value="Degree">Degree</option>
                  <option value="Diploma">Diploma</option>
                </select>
              </div>
              <div >
                
              </div>
              <div class="clear"></div>
              
              <label for="dateofbirth">Date Of Birth</label>
              <input  class="date_of_birth"  type="date" name="dob" value="<?php echo $row['dob']; ?>">
              
              <div></div>
              <input type="text" placeholder="PAN No.*" 
                maxlength="10" name="pan" value="<?php echo $row['pan']; ?>" >
              
              <div></div>
              <input type="text" placeholder="Aadhar No.*" name="aadhar" maxlength="12" 
              value="<?php echo $row['aadhar']; ?>"/>
              <div>
                
              </div>
              <div class="display-inline">
                <label for="file-type-label" class="file-text">Upload:</label>
                 <div class="file-type">
                      <input type="file" value="<?php echo $row['pan_upload']; ?>" name="pan_upload" class="file-input1" >
                      <input type="file" name="aadhar_upload" value="<?php echo $row['aadhar_upload']; ?>" class="file-input2" >  
                </div>  
                <div class="file-type">
                      <input type="file" name="self_declaration" class="file-input3" value="<?php echo $row['self_declaration']; ?>" >
                      <input type="file" name="shop_photos" class="file-input4" value="<?php echo $row['shop_photos']; ?>" >  
                </div>
              </div>
              
              <div class="container">
                  <div class="bc-center">
                    <input class="radio-second" type="radio" id="bc_agent" name="bc_radio" value="<?php echo $row['bc_radio']; ?>">
                    <label for="agent">BC Agent</label>
                  </div>
                  
                  <div class="bc-center">
                    <input  class="radio-second" type="radio" id="bc_distributer" name="bc_radio" value="<?php echo $row['bc_radio']; ?>">
                    <label for="distributer">BC Distributer</label>
                  </div>
                  <input type="hidden" name="id" value="' . $id . '" />
              </div>
              
              <div class="text-right">
                <span class="reset-btn" onclick="resetAll()">Reset</span>
                <button id="myBtn2" type="submit" name="submit" class="btn">
                  Update &nbsp;&nbsp; <i class="fa fa-chevron-right"></i>
                </button>
              </div>
              <div id="signup" class="hidden"></div>
            </div>
          </form>
        </div>
      </div>
     
    </div>
            
			
            <?php
            $conn->close();
        }




?>