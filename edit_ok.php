<link rel="stylesheet" href="css/main.css">
<?php
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['gender']) &&
        isset($_POST['state']) && isset($_POST['city']) &&
        isset($_POST['address']) && isset($_POST['pincode']) &&
        isset($_POST['paytm']) && isset($_POST['email']) &&
        isset($_POST['qualification']) && isset($_POST['dob']) &&
        isset($_POST['pan']) && isset($_POST['aadhar']) && isset($_POST['bc_radio'])) 
        {

            
        
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $paytm = $_POST['paytm'];
        $email = $_POST['email'];
        $qualification = $_POST['qualification'];
        $dob = $_POST['dob'];
        $pan = $_POST['pan'];
        $aadhar = $_POST['aadhar'];
        
        $bc_radio = $_POST['bc_radio'];
        

        

        $host = "sql210.ezyro.com";
        $dbUsername = "ezyro_31232015";
        $dbPassword = "Kam@123lesh";
        $dbName = "ezyro_31232015_db_test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

		$location="uploads/";
		$pan_upload=$_FILES['pan_upload']['name'];
		$file_tmp1=$_FILES['pan_upload']['tmp_name'];
		$aadhar_upload=$_FILES['aadhar_upload']['name'];
		$file_tmp2=$_FILES['aadhar_upload']['tmp_name'];
		$self_declaration=$_FILES['self_declaration']['name'];
		$file_tmp3=$_FILES['self_declaration']['tmp_name'];
		$shop_photos=$_FILES['shop_photos']['name'];
		$file_tmp4=$_FILES['shop_photos']['tmp_name'];
		

       
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Update = "UPDATE new_users SET name='$name', gender='$gender' , state='$state', city='$city', 
            address='$address', pincode='$pincode', paytm='$paytm', email='$email', qualification='$qualification',
             dob='$dob', pan='$pan', aadhar='$aadhar' ,pan_upload='$pan_upload', aadhar_upload='$aadhar_upload',
             self_declaration='$self_declaration', shop_photos='$shop_photos', bc_radio='$bc_radio' where id='$id' ";
            
			$run = mysqli_query($conn, $Update);
            
			if($run){
				move_uploaded_file($file_tmp1, $location.$pan_upload);
				move_uploaded_file($file_tmp2, $location.$aadhar_upload);
				move_uploaded_file($file_tmp3, $location.$self_declaration);
				move_uploaded_file($file_tmp4, $location.$shop_photos);
				
                include('meta.php');
                include('header.php');
                     
                    if($bc_radio == 'bc_agent'){ ?>

                    <div class="editandpaybutton">
                        <div class='pm_btn'>
                            <a href='https://www.payumoney.com/paybypayumoney/#/C0B22D8F7D48BD40677810098140A683' class='pay_btn' >Pay Rs.1</a>
                        </div>
                        
                        <div class="my-container">
                            <div >
                                <img class="agent-image" style="display:block;" src="images/agent.svg" alt="main image of agent" />
                            </div>
                        </div>
                    </div>       
                    
                <?php }

                    else { ?>

                        <div class="editandpaybutton">
                            <div class='pm_btn'>
                                <a href='https://www.payumoney.com/paybypayumoney/#/FB5CFB6B505377F4E4CA603CDADFB836' class='pay_btn' >Pay Rs. 2</a>
                            </div>
                        
                        <div class="my-container">
                            <div >
                                <img class="agent-image" style="display:block;" src="images/agent.svg" alt="main image of agent" />
                            </div>
                        </div>
                    </div> 
                    <?php }  
                
			}
            else{
				echo "data not updated";
			}
            
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        //header("Location: index.php");
        
    }
}
else {
    echo "Submit button is not set";
}
?>