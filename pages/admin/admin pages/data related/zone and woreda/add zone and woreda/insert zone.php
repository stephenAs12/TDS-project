<?php 
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $zoneName       = ($_POST['zone_name_name']) ? $_POST['zone_name_name'] : '';
    
    $sql = "INSERT INTO zone(zone_name) VALUES('$zoneName')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
