<?php
session_start();

$connectQuery = mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $userZone = $_SESSION['user_address'];

    $selectQuery = "SELECT * FROM `required` WHERE zone = $userZone";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }
}

$totalNumber = null;



while ($row = mysqli_fetch_array($result)) {
    // echo '
    //     <tr>
    //         <td>' ." Zone (". $row["zone"] . ')</td>
    //         <td>' ." Woreda (". $row["woreda"] . ')</td>
    //         <td>' ." School (". $row["school"] . ')</td>
    //         <td>' ." Education Level (". $row["education_level"] . ')</td>
    //         <td>' ." Major (". $row["major"] . ')</td>
    //         <td>' ." Number (". $row["number"] . ')</td>
    //     </tr>
    //     ';
    //     echo "<br>";



    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
        exit();
    } else {
        $zone = $row["zone"];
        $woreda = $row["woreda"];
        $school = $row["school"];
        $education_level = $row["education_level"];
        $major = $row["major"];
        $number = $row["number"];

        // echo " zone >> ".$zone;
        // echo " woreda >> ".$woreda;
        // echo " school >> ".$school;
        // echo " education_level >> ".$education_level;
        // echo " major >> ".$major;
        // echo " number >> ".$number;

        // echo "<br> ";
        // echo "==================================================================== ";
        // echo "<br> ";


        // $selectSame = "SELECT * FROM `required` WHERE zone = $zone";
        $resultSame = mysqli_query($connectQuery, "SELECT * FROM required WHERE woreda='$woreda' AND education_level='$education_level' AND major='$major'");
        if (mysqli_num_rows($resultSame) > 0) {
        } else {
            $msg = "No Record found";
        }
    }

    while ($rowSame = mysqli_fetch_array($resultSame)) {
        echo " zone (" . $rowSame["zone"] . ")";
        echo " woreda (" . $rowSame["woreda"] . ")";
        echo " school (" . $rowSame["school"] . ")";
        echo " education_level (" . $rowSame["education_level"] . ")";
        echo " major (" . $rowSame["major"] . ")";
        echo " number (" . $rowSame["number"] . ")";
        echo "<br>";
        echo "======================================================================";
        echo "<br>";

        $newZone = $rowSame["zone"];
        $newWoreda = $rowSame["woreda"];
        $newSchool = $rowSame["school"];
        $newEducation_level = $rowSame["education_level"];
        $newMajor = $rowSame["major"];
        $newNumber = $rowSame["number"];

        $totalNumber += $newNumber;

        if ($newWoreda == $woreda && $newEducation_level == $education_level && $newMajor == $major) {
            
            $sql = "INSERT INTO required_woreda(handler, zone, woreda, education_level, major, number) VALUES 
        ('$newWoreda$newEducation_level$newMajor','$newZone','$newWoreda', '$newEducation_level','$newMajor','$newNumber')";
            if (mysqli_query($connectQuery, $sql)) {
                
                echo "ok";
            }else{
                mysqli_query($connectQuery, "UPDATE required_woreda SET number='$totalNumber' WHERE handler='$newWoreda$newEducation_level$newMajor'");
               
            }
        } else {
        }

        echo "<br>";
    }
    $totalNumber = null;
}
