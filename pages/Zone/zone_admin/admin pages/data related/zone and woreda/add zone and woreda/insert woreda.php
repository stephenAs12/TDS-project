<?php 
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $zoneName       = ($_POST['zoneNAME_id']) ? $_POST['zoneNAME_id'] : '';
    $woredaName       = ($_POST['woreda_name_name']) ? $_POST['woreda_name_name'] : '';
    $woredaCode       = ($_POST['woreda_code_code']) ? $_POST['woreda_code_code'] : '';
    $woredaMul       = ($_POST['woreda_mul_mul']) ? $_POST['woreda_mul_mul'] : '';
    
    $sql = "INSERT INTO woreda(zoneid, woreda_name, woreda_code, multiplication_point) VALUES('$zoneName', '$woredaName', '$woredaCode', '$woredaMul')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
