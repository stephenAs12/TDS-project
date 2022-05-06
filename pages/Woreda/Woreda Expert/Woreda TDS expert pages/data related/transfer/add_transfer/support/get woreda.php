<?php


$conn = mysqli_connect("localhost", "root", "", "tds v1.0.1");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$zone =  $_POST['zone_val'];
$woreda_resualt = mysqli_query($conn, "SELECT * FROM woreda WHERE zoneid =$zone");

// echo "<select name='z2z_woreda1_name' id='z2z_woreda1_id' class='form-control' required>";
echo "<option value='' selected hidden>Please select Woreda *</option>";
while ($woreda_row = mysqli_fetch_array($woreda_resualt)) {
        echo "<option value='$woreda_row[woreda_id]'>$woreda_row[woreda_name]</option>";
}
echo "</select>";

?>