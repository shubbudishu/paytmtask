<?php include('meta.php'); ?>
  <body>
    <?php include('header.php'); ?>
    <div class="form">
      <div class="text-area">
        <div class="my-container">
          <h1>Fill up this Form to Become a <span>Paytm Service Agent</span></h1>
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
          <form target="_self" action="insert_test.php" method="post" enctype="multipart/form-data">
            <div class="content">
              <input placeholder="Name*" class="name-field" name="name" />
              <div class="input-space"></div>
              
              <h5>Gender</h5>
              
              <div class="container">
                <div class="gender-center">
                  <input type="radio" id="male" name="gender" value="male">
                  <label for="male">Male</label>
                </div>
                
                <div class="gender-center">
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female">Female</label>
                </div>
                
                <div class="gender-center">
                  <input type="radio" id="others" name="gender" value="others">
                  <label for="others">Others</label>
                </div>
              </div>
                
            </div>
              <div class="input-space"></div>

              <div class="select">
                <select name="state" id="stateField">
                  <option value="">Select State*</option>
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
              <input placeholder="City*" name="city" id="cityField" />
              <div ></div>
              <input placeholder="Address*" name="address" id="addressField" />
              <div ></div>
              <input
                placeholder="Pincode*"
                name="pincode"
                maxlength="6"
              />
              <div ></div>
              <input
                type="text"
                placeholder="Paytm Number*"
                name="paytm"
                maxlength="10"
                
              />
              <div>
                
              </div>
              <input
                type="email"
                placeholder="Email ID*"
                name="email"
                />
              <div></div>
              <div class="clear"></div>
              <div class="select">
                <select name="qualification">
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
              <input  class="date_of_birth"  type="date" name="dob">
              
              <div></div>
              <input type="text" placeholder="PAN No.*" 
                maxlength="10"
                name="pan"
                
               >
              
              <div>
                
              </div>
              <input
                type="text"
                placeholder="Aadhar No.*"
               
                name="aadhar"
                maxlength="12"
                
              />
              <div>
                
              </div>
              <div class="display-inline">
                <label for="file-type-label" class="file-text">Upload:</label>
                 <div class="file-type">
                      <input type="file" value="pan_upload" name="pan_upload" class="file-input1" >
                      <input type="file" name="aadhar_upload" value="aadhar_upload" class="file-input2" >  
                </div>  
                <div class="file-type">
                      <input type="file" name="self_declaration" class="file-input3" >
                      <input type="file" name="shop_photos" class="file-input4" >  
                </div>
              </div>
              
              <div class="container">
                  <div class="bc-center">
                    <input class="radio-second" type="radio" id="bc_agent" name="bc_radio" value="bc_agent">
                    <label for="agent">BC Agent</label>
                  </div>
                  
                  <div class="bc-center">
                    <input  class="radio-second" type="radio" id="bc_distributer" name="bc_radio" value="bc_dist">
                    <label for="distributer">BC Distributer</label>
                  </div>
                  <input type="hidden" name="id" value="' . $id . '" />
              </div>
              
              <div class="text-right">
                <span class="reset-btn" onclick="resetAll()">Reset</span>
                <button id="myBtn2" type="submit" name="submit" class="btn">
                  Submit &nbsp;&nbsp; <i class="fa fa-chevron-right"></i>
                </button>
              </div>
              <div id="signup" class="hidden"></div>
            </div>
          </form>
        </div>
      </div>
     
    </div>

  <div id="myModal" class="modal">

  <!-- Modal content -->
      

  <!-- Pay Rupees button start -->

      <div class="modal-content">
        <span class="close">&times;</span>
        
        <div id="input-feedback">
            <div class="close" onclick="resetAll()">
              
            </div>
            <img src="" alt="" />
            <h3>Thank you</h3>
            <p>
              <strong>Form Submitted</strong>. We will contact you as soon as we
              review your details.
            </p>
            <div class="popop-logo">
              <img src="images/logo.jpeg" width="100px" height="100px" alt="" />
            </div>
            <span onclick="resetAll()" class="icn"
              >Submit Another Response</span
            >
          </div>
        </div>

      </div>

  <!-- Pay Rupees button end -->

    <style>
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
          background-color: #fff;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
          border-radius:25px;
          text-align:center;
        }

        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        .icn{
            padding: 15px 20px;
            background-color: #fff;
            border-radius: 50px;
            border: 1px solid #1E2E66;
            color: #1E2E66;
            font-weight: bold;
            cursor: pointer;
          }
          @media (max-width:350px) {
          .icn{
            padding: 8px 10px;
           
            }
    </style>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

        function resetAll(){
        location.reload();
        }
    </script>    
    <script src="script.js"></script>
  </body>
</html>
