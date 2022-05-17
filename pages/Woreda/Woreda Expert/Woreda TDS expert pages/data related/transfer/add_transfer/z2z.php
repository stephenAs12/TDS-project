<?php 

session_start();
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $knownID       = $_SESSION['teacher_id'];
    $transferType       = 'Zone To Zone';
    $zone = $_SESSION['user_address'];
    $woreda = $_SESSION['user_woreda'];

    $zoneOne       = ($_POST['z2z_zone1_name']) ? $_POST['z2z_zone1_name'] : '';
    $zoneOneWoredaOne       = ($_POST['z2z_woreda11_name']) ? $_POST['z2z_woreda11_name'] : '';
    $zoneOneWoredaTwo       = ($_POST['z2z_woreda12_name']) ? $_POST['z2z_woreda12_name'] : '';
    $zoneOneWoreda173       = ($_POST['z2z_zone1_173_name']) ? $_POST['z2z_zone1_173_name'] : '';

    $zoneTwo       = ($_POST['z2z_zone2_name']) ? $_POST['z2z_zone2_name'] : '';
    $zoneTwoWoredaOne       = ($_POST['z2z_woreda21_name']) ? $_POST['z2z_woreda21_name'] : '';
    $zoneTwoWoredaTwo       = ($_POST['z2z_woreda22_name']) ? $_POST['z2z_woreda22_name'] : '';
    $zoneTwoWoreda173       = ($_POST['z2z_zone2_173_name']) ? $_POST['z2z_zone2_173_name'] : '';

    // if (isset($_POST['r2r_region2_name'])) {
    //     $regionTwo       = ($_POST['r2r_region2_name']) ? $_POST['r2r_region2_name'] : '';
    // }else{
    //     $regionTwo = null;
    // }
 
    
    $sql = "INSERT INTO transfer_request(current_zone, current_woreda, choice_key, teacher_id,request_type,zone_one,z1_woreda_one, z1_woreda_two, z1_woreda_any, zone_two, z2_woreda_one, z2_woreda_two, z2_woreda_any) VALUES ('$zone', '$woreda', '$knownID $transferType', '$knownID','$transferType','$zoneOne','$zoneOneWoredaOne', '$zoneOneWoredaTwo', '$zoneOneWoreda173', '$zoneTwo', '$zoneTwoWoredaOne', '$zoneTwoWoredaTwo', '$zoneTwoWoreda173')";

    if ($zoneOne != $zoneTwo) {
        if ($zoneOneWoredaOne!=$zoneOneWoredaTwo && $zoneTwoWoredaOne!=$zoneTwoWoredaTwo) {
            if(mysqli_query($connect, $sql)) {
                echo true;
            } else {
                 echo $knownID.' '.mysqli_error($connect);
            }
        } else {
            echo "You're attempting to input the same value twice.";
        }
        
    }else{
        echo "You're attempting to input the same value twice.";
    }
