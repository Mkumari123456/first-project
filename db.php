

<?php
$servername = "localhost";
$ussrname = "root";
$pass = "";
$dbname = "project";


$conn = new mysqli($servername,$ussrname,$pass,$dbname);

if($conn ->connect_error){
    die("error" . $conn->connect_error);
}

?>



