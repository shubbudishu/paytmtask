<?php
include("login2/session.php");
include("login2/dbcon.php");

$id=$_GET['id'];

$sql = "DELETE FROM new_users where id= '$id'";
$result = mysqli_query($con, $sql);
if($result){

    ?>
    <script>
        history.back();
    </script>

<?php    
}
else{
    echo "No record deleted";
}


?>