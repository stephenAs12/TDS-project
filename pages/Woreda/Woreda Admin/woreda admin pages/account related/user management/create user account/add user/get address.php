
		<?php


$conn = mysqli_connect("localhost", "root", "", "tds v1.0.1");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$address_resualt = mysqli_query($conn, "SELECT * FROM zone");



?>
