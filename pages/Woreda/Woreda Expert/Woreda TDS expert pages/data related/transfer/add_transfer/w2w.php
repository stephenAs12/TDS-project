<?php 

session_start();
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $knownID       = $_SESSION['teacher_id'];
    $transferType       = 'Woreda To Woreda';
    $zone = $_SESSION['user_address'];
    $woreda = $_SESSION['user_woreda'];

    $woredaOne       = ($_POST['w2w_woreda1_name']) ? $_POST['w2w_woreda1_name'] : '';
    $woredaTwo       = ($_POST['w2w_woreda2_name']) ? $_POST['w2w_woreda2_name'] : '';
    $woredaThree       = ($_POST['w2w_woreda3_name']) ? $_POST['w2w_woreda3_name'] : '';
    

    // if (isset($_POST['r2r_region2_name'])) {
    //     $regionTwo       = ($_POST['r2r_region2_name']) ? $_POST['r2r_region2_name'] : '';
    // }else{
    //     $regionTwo = null;
    // }
 
    
    $sql = "INSERT INTO transfer_request(current_zone, current_woreda, choice_key, teacher_id,request_type,woreda_one,woreda_two, woreda_three) VALUES ('$zone', '$woreda', '$knownID $transferType', '$knownID','$transferType','$woredaOne','$woredaTwo', '$woredaThree')";

    if ($woredaOne != $woredaTwo) {
        if(mysqli_query($connect, $sql)) {
            echo true;
        } else {
             echo $knownID.' '.mysqli_error($connect);
        }
    }else{
        echo "You're attempting to input the same value twice.";
    }
