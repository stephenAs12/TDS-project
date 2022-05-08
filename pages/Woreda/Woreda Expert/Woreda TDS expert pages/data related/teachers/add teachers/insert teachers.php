<?php 

session_start();
    
    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    $knownID       = ($_POST['teacher_id_name']) ? $_POST['teacher_id_name'] : '';
    $firstName       = ($_POST['first_name_name']) ? $_POST['first_name_name'] : '';
    $middleName       = ($_POST['middle_name_name']) ? $_POST['middle_name_name'] : '';
    $lastName       = ($_POST['last_name_name']) ? $_POST['last_name_name'] : '';
    $Sex       = ($_POST['sex_radio']) ? $_POST['sex_radio'] : '';
    $Disability       = ($_POST['disable_radio']) ? $_POST['disable_radio'] : '';
    $martialStatus       = ($_POST['married_radio']) ? $_POST['married_radio'] : '';

    if (isset($_POST['nominee_radio'])) {
        $Nominee       = ($_POST['nominee_radio']) ? $_POST['nominee_radio'] : '';
    }else{
        $Nominee       = 'No';
    }
    
    
    $Zone       = $_SESSION['user_address'];
    $Woreda       = $_SESSION['user_woreda'];
    $School       = ($_POST['school_name']) ? $_POST['school_name'] : '';
    $educationLevel       = ($_POST['education_level_name']) ? $_POST['education_level_name'] : '';
    $Major       = ($_POST['major_name']) ? $_POST['major_name'] : '';
    $employmentPeriod       = ($_POST['employment_period_name']) ? $_POST['employment_period_name'] : '';
    $Service       = ($_POST['service_name']) ? $_POST['service_name'] : '';
    $otherService       = ($_POST['other_name']) ? $_POST['other_name'] : '';
    
    $sql = "INSERT INTO teachers(knownid,fname,mname,lname,sex,disability,marital_status,nominee,zone,woreda,school,education_level,major,employment_period,service,other_service) VALUES ('$knownID','$firstName','$middleName','$lastName','$Sex','$Disability','$martialStatus','$Nominee','$Zone','$Woreda','$School','$educationLevel','$Major','$employmentPeriod','$Service','$otherService')";

    if(mysqli_query($connect, $sql)) {
        echo true;
    } else {
         echo mysqli_error($connect);
    }
