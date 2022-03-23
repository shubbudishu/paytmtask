<?php include('meta.php');
$id=$_GET['id'];
echo $id;
        $host = "sql210.ezyro.com";
        $dbUsername = "ezyro_31232015";
        $dbPassword = "Kam@123lesh";
        $dbName = "ezyro_31232015_db_test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        $sql = "SELECT * FROM new_users";
        $run = mysqli_query($conn, $sql);
            $last_id = mysqli_thread_id($conn); 

        echo $last_id;

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            //$Insert = "UPDATE new_users SET payment_status = '' where id ";
			$run = mysqli_query($conn, $Insert);
            $last_id = mysqli_insert_id($conn); 
        }
            
 ?>
<body>
<div class="form">
    <div class="success-text-area">
    
    </div>
    <div class="container">
        
        <div class="form-test">
            <div id="input-feedback">
                <form method="POST" action="index.php">
                    <img src="" alt="" />
                    <h3 class="text_color" >Thank you</h3>
                    <p class="text_color">
                    <strong>Payment Success !</strong>. We will contact you as soon as we
                    review your details.
                    </p>
                    <div class="logo"><a href="#"><img src="images/main__logo.svg" alt=""></a></div>
                    <div class='pm_btn'>
                        <input type="submit" name="submit" class='pay_btn' value="Submit Another Response">
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>
</body>
</html>