<?php 

session_start();
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $knownID       = $_SESSION['teacher_id'];
    $transferType       = 'Region To Region';
    $zone = $_SESSION['user_address'];
    $woreda = $_SESSION['user_woreda'];
    $regionOne       = ($_POST['r2r_region1_name']) ? $_POST['r2r_region1_name'] : '';
    if (isset($_POST['r2r_region2_name'])) {
        $regionTwo       = ($_POST['r2r_region2_name']) ? $_POST['r2r_region2_name'] : '';
    }else{
        $regionTwo = null;
    }
 
    
    $sql = "INSERT INTO transfer_request(current_zone, current_woreda, choice_key, teacher_id,request_type,region_one,region_two) VALUES ('$zone', '$woreda', '$knownID $transferType', '$knownID','$transferType','$regionOne','$regionTwo')";

    if ($regionOne != $regionTwo) {
        if(mysqli_query($connect, $sql)) {
            echo true;
        } else {
             echo $knownID.' '.mysqli_error($connect);
        }
    }else{
        echo "You're attempting to input the same value twice.";
    }
