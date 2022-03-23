<link rel="stylesheet" href="css/main.css">
<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['gender']) &&
        isset($_POST['state']) && isset($_POST['city']) &&
        isset($_POST['address']) && isset($_POST['pincode']) &&
        isset($_POST['paytm']) && isset($_POST['email']) &&
        isset($_POST['qualification']) && isset($_POST['dob']) &&
        isset($_POST['pan']) && isset($_POST['aadhar']) && 
        isset($_POST['pan_upload']) && isset($_POST['aadhar_upload']) &&
        isset($_POST['self_declaration']) && isset($_POST['shop_photos']) &&
        isset($_POST['bc_radio'])) {

            
        
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
        $pan_upload = $_POST['pan_upload'];
        $aadhar_upload = $_POST['aadhar_upload'];
        $self_declaration = $_POST['self_declaration'];
        $shop_photos = $_POST['shop_photos'];
        $bc_radio = $_POST['bc_radio'];
        

        

        $host = "sql210.ezyro.com";
        $dbUsername = "ezyro_31232015";
        $dbPassword = "Kam@123lesh";
        $dbName = "ezyro_31232015_db_test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

       
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO new_users(name, gender, state, city, address, pincode, paytm, email, qualification, dob, pan, aadhar ,pan_upload, aadhar_upload, self_declaration, shop_photos, bc_radio)
             values('$name', '$gender', '$state', '$city', '$address', '$pincode', '$paytm', '$email','$qualification' , '$dob', '$pan', '$aadhar','$pan_upload', '$aadhar_upload', '$self_declaration', '$shop_photos', '$bc_radio')";
			$run = mysqli_query($conn, $Insert);
			if($run){
				echo "data successfully inserted"."<br/>";
                if($bc_radio == 'bc_agent' ){
                    echo "<div class='pm_btn'><a href='https://www.payumoney.com/paybypayumoney/#/C0B22D8F7D48BD40677810098140A683' class='pay_btn' >Pay Rs.1</a> </div>";
                }
                else{
                    echo "<div class='pm_btn'><a href='https://www.payumoney.com/paybypayumoney/#/FB5CFB6B505377F4E4CA603CDADFB836' class='pay_btn' >Pay Rs. 2</a> </div>";
                }
                
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

<style>
.pay_btn{
    padding: 15px 20px;
    background-color: #66D6FF;
    border-radius: 50px;
    border: none;
    color: #fff;
    text-decoration:none;
    font-weight: bold;
    cursor: pointer;
    
}
.pm_btn{
    margin:20px auto;
    display:flex;
    justify-content:center;
    align-items:center;
    
}
</style>
