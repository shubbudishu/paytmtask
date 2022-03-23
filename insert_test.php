<link rel="stylesheet" href="css/main.css">
<?php
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
            $Insert = "INSERT INTO new_users(name, gender, state, city, address, pincode, paytm, email, qualification, dob, pan, aadhar ,pan_upload, aadhar_upload, self_declaration, shop_photos, bc_radio)
             values('$name', '$gender', '$state', '$city', '$address', '$pincode', '$paytm', '$email','$qualification' , '$dob', '$pan', '$aadhar','$pan_upload', '$aadhar_upload', '$self_declaration', '$shop_photos', '$bc_radio')";
			$run = mysqli_query($conn, $Insert);
            $last_id = mysqli_insert_id($conn); /* this query helps to get the id  of last inserted record */
			if($run){
				move_uploaded_file($file_tmp1, $location.$pan_upload);
				move_uploaded_file($file_tmp2, $location.$aadhar_upload);
				move_uploaded_file($file_tmp3, $location.$self_declaration);
				move_uploaded_file($file_tmp4, $location.$shop_photos);
				//echo "data successfully inserted"."<br/>";

                /* Here i get the recent data from database and send the page to the edit page with 'id' */
                
                $sql = "SELECT * FROM new_users where id= '$last_id' ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <?php
                    include('meta.php');
                    include('header.php');
                 ?>
                
                 
                  
                <?php
                if($bc_radio == 'bc_agent'){ ?>

                <div class="editandpaybutton">
                    <div class='pm_btn'>
                        <a href='edit.php?id=<?php echo $row['id']; ?>' class='pay_btn' >Edit Details</a>
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
                            <a href='edit.php?id=<?php echo $row['id']; ?>' class='pay_btn'>Edit Details</a>
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
				echo "data not insertd";
			}
            
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        header("Location: index.php");
        
    }
}
else {
    echo "Submit button is not set";
}
?>

