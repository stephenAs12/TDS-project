<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$connectQuery = mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $userZone = $_SESSION['user_address'];

    $selectQuery = "SELECT transfer_request.teacher_id, transfer_request.woreda_one, transfer_request.woreda_two, transfer_request.woreda_three, teachers.fname, teachers.mname, teachers.lname, teachers.mname, teachers.lname, teachers.sex, teachers.disability, teachers.marital_status, teachers.nominee, teachers.zone, teachers.woreda, teachers.school,teachers.education_level, teachers.major, teachers.employment_period, teachers.service, teachers.other_service
    FROM transfer_request
    INNER JOIN teachers ON transfer_request.teacher_id = teachers.knownid WHERE transfer_request.request_type='Woreda To Woreda' AND current_zone = $userZone";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }
}



while ($row = mysqli_fetch_array($result)) {
    $woreda_code = $row["woreda"];

    $selectMultiplication_point = "SELECT `woreda_name`, `multiplication_point` FROM `woreda` WHERE woreda_id = $woreda_code";
    $result_mp = mysqli_query($connectQuery, $selectMultiplication_point);
    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }

    $multiplication_point =null;

    while ($row_mp = mysqli_fetch_array($result_mp)) {
        // echo $row_mp["multiplication_point"] ." ".$row_mp["woreda_name"];
        $multiplication_point = $row_mp["multiplication_point"];
    }
    
    // $current_service = rand(10,100);
    $current_service = 10;

    $known_id = $row["teacher_id"];
    $full_name = $row["fname"] ." ". $row["mname"] ." ". $row["lname"];
    $sex = $row["sex"];
    $disability = $row["disability"];
    $married = $row["marital_status"];
    $nominee = $row["nominee"];
    $zone = $row["zone"];
    $woreda = $row["woreda"];
    $school = $row["school"];
    $education_level = $row["education_level"];
    $major = $row["major"];
    $service_transfer = $row["service"]+$row["other_service"]+$multiplication_point*$current_service;
    $woreda_one = $row["woreda_one"];
    $woreda_two = $row["woreda_two"];
    $woreda_three = $row["woreda_three"];
    

    // echo '
    //     <tr>
    //         <td>' ." ID (". $row["teacher_id"] . ')</td>
    //         <td>' ." Name (". $row["fname"] ." ". $row["mname"] ." ". $row["lname"]. ')</td>
    //         <td>' ." Sex (". $row["sex"] . ')</td>
    //         <td>' ." Disability (". $row["disability"] . ')</td>
    //         <td>' ." Married (". $row["marital_status"] . ')</td>
    //         <td>' ." Nominee (". $row["nominee"] . ')</td>
    //         <td>' ." Zone (". $row["zone"] . ')</td>
    //         <td>' ." Woreda (". $row["woreda"] . ')</td>
    //         <td>' ." School (". $row["school"] . ')</td>

    //         <td>' ." Education Level (". $row["education_level"] . ')</td>
    //         <td>' ." Major (". $row["major"] . ')</td>
    //         <td>' ." Service (". $row["service"] . ')</td>
    //         <td>' ." Other Service (". $row["other_service"] . ')</td>
    //         <td>' ." Current Service (". $current_service . ')</td>
    //         <td>' ." Service for Transfer (". $row["service"]+$row["other_service"]+$multiplication_point*$current_service . ')</td>

    //         <td>' . $row["woreda_one"] . '</td>
    //         <td>' . $row["woreda_two"] . '</td>
    //         <td>' . $row["woreda_three"] . '</td>
    //     </tr>
    //     ';

        $sql = "INSERT INTO teacher_transfer(known_id, full_name, sex, disability, married, nominee, zone, woreda, school, education_level, major, service_transfer, 
        woreda_one, woreda_two, woreda_three) VALUES 
        ('$known_id','$full_name','$sex','$disability','$married','$nominee','$zone','$woreda','$school','$education_level','$major','$service_transfer','$woreda_one','$woreda_two','$woreda_three')";
        if (mysqli_query($connectQuery, $sql)) {
                //   echo "<br>";
        }
        // echo "<br>";

  

 
}


?>
<script>
    history.back();
</script>