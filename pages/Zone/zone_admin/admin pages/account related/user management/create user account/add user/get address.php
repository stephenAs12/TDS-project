<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tds v1.0.1");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$zone = $_SESSION['user_address'];
$address_resualt = mysqli_query($conn, "SELECT * FROM woreda WHERE zoneid=$zone AND woreda_name IS NOT NULL");
echo "<select name='address_name_name' id='address_name_id' class='form-control' required>";
echo "<option value='' selected hidden>ወረዳ ምረጥ *</option>";
while ($address_row = mysqli_fetch_array($address_resualt)) {
    if ($_POST['job_val']=="Woreda Admin") {
        echo "<option value='$address_row[woreda_id]'>$address_row[woreda_name]</option>";
    }
}
echo "</select>";
