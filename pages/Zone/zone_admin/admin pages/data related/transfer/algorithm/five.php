<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once "four.php";

$reloadKey=0;
reload:

$connectQuery = mysqli_connect('localhost', 'root', '', 'tds v1.0.1');



if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {

    $zoneAdminAddress = $_SESSION['user_address'];

    // echo " zone " . $zoneAdminAddress;

    // echo "<br>";

    $selectQuery = "SELECT * FROM `woreda` WHERE zoneid=$zoneAdminAddress";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }
}

$woreda_code = [];

while ($row = mysqli_fetch_array($result)) {
    // echo '
    //     <tr>
    //         <td>' . " woreda_name (" . $row["woreda_name"] . ')</td>
    //         <td>' . " woreda_id (" . $row["woreda_id"] . ')</td>
    //         <td>' . " woreda_code (" . $row["woreda_code"] . ')</td>
    //         <td>' . " multiplication_point	 (" . $row["multiplication_point"] . ')</td>
    //     </tr>
    //     ';

    $woreda_code[] = $row["woreda_id"];

    // echo "<br>";
}



for ($i = 0; $i < sizeof($woreda_code); $i++) {
    $findQuery = "SELECT * FROM `required` WHERE woreda=$woreda_code[$i]";
    $findResult = mysqli_query($connectQuery, $findQuery);
    if (mysqli_num_rows($findResult) > 0) {
    } else {
        echo $woreda_code[$i];
    }

    while ($findRow = mysqli_fetch_array($findResult)) {
        // echo "<br>";
        // echo '
        //     <tr>
        //         <td>' . " woreda  (" . $findRow["woreda"] . ')</td>
        //         <td>' . " school (" . $findRow["school"] . ')</td>
        //         <td>' . " education_level (" . $findRow["education_level"] . ')</td>
        //         <td>' . " major	 (" . $findRow["major"] . ')</td>
        //         <td>' . " number	 (" . $findRow["number"] . ')</td>
        //     </tr>
        //     ';

        // echo "<br>";

        $required_id = $findRow["required_id"];
        $rank = 1;
        $education_level = $findRow["education_level"];
        $major = $findRow["major"];
        $woreda_one = $findRow["woreda"];
        $number = $findRow["number"];

        $findTeacherQuery = "SELECT * FROM `teacher_transfer` WHERE education_level='$education_level' AND major='$major' AND woreda_one='$woreda_one' AND rank='$rank'";
        $findTeacherResult = mysqli_query($connectQuery, $findTeacherQuery);
        if (mysqli_num_rows($findTeacherResult) > 0) {


            while ($findTeacherRow = mysqli_fetch_array($findTeacherResult)) {

                $known_id =  $findTeacherRow["known_id"];
                $full_name =  $findTeacherRow["full_name"];
                $sex =  $findTeacherRow["sex"];
                $disability =  $findTeacherRow["disability"];
                $married =  $findTeacherRow["married"];
                $nominee =  $findTeacherRow["nominee"];
                $zone =  $findTeacherRow["zone"];
                $woreda = $findTeacherRow["woreda"];
                $school = $findTeacherRow["school"];
                $education_level = $findTeacherRow["education_level"];
                $major = $findTeacherRow["major"];
                $service = $findTeacherRow["service_transfer"];
                $new_woreda = $woreda_one;
                $rank = $findTeacherRow["rank"];
                $remark = $findTeacherRow["remark"];

                // echo " NUMBER " . $number;
                if ($number > 0) {
                    $sql = "INSERT INTO result(known_id, full_name, sex, disability, married, nominee, zone, woreda, school, education_level, major, 
                    service, new_woreda, remark) VALUES 
                    ('$known_id','$full_name','$sex','$disability','$married','$nominee','$zone','$woreda','$school','$education_level','$major','$service','$new_woreda','$remark')";
                    if (mysqli_query($connectQuery, $sql)) {

                        $reloadKey=1;

                        $deleteSql = "DELETE FROM `teacher_transfer` WHERE known_id='$known_id'";
                        if (mysqli_query($connectQuery, $deleteSql)) {
                            // echo "<br>";
                            // echo "DELETED";
                            // echo "<br>";

                            

                            $number = $number - 1;
                            // echo " NUMBER NUMBER " . $number;

                            include_once 'four.php';
                        } else {
                        }

                        $existRequiredQuery = "SELECT * FROM `required` WHERE zone='$zone' AND woreda='$woreda' AND education_level='$education_level' AND major='$major'";
                        $existRequiredResult = mysqli_query($connectQuery, $existRequiredQuery);
                        if (mysqli_num_rows($existRequiredResult) > 0) {

                            while ($existRequiredRow = mysqli_fetch_array($existRequiredResult)) {
                                $existRequired_required_id =  $existRequiredRow["required_id"];
                                $existRequired_number =  $existRequiredRow["number"];

                                $existRequiredUpdateSql = "UPDATE `required` SET `number`='$existRequired_number'+1 WHERE required_id='$existRequired_required_id'";
                                if (mysqli_query($connectQuery, $existRequiredUpdateSql)) {
                                    // echo "<br>";
                                    // echo "newRequiredUpdateSql UPDATED";
                                    // echo "<br>";
                                } else {

                                }


                            }
                        } else {

                            $newRequiredQuery = "INSERT INTO required(zone, woreda, school, education_level, major, number) VALUES ('$zone','$woreda','$school','$education_level','$major',1)";
                                    if (mysqli_query($connectQuery, $newRequiredQuery)) {
                                        
                                    }else{
                                        
                                    }

                        }
                    } else {
                    }
                }



                // echo "<br>";
                // echo '
                // <tr>
                //     <td>' . " known_id  (" . $known_id . ')</td>
                //     <td>' . " full_name  (" . $full_name . ')</td>
                //     <td>' . " sex (" . $sex . ')</td>
                //     <td>' . " disability	 (" . $disability . ')</td>
                //     <td>' . " 	married	 (" . $married . ')</td>
                //     <td>' . " 	nominee	 (" . $nominee . ')</td>
                //     <td>' . " 	zone	 (" . $zone . ')</td>
                //     <td>' . " 	woreda	 (" . $woreda . ')</td>
                //     <td>' . " 	school	 (" . $school . ')</td>
                //     <td>' . " 	education_level	 (" . $education_level . ')</td>
                //     <td>' . " 	major	 (" . $major . ')</td>
                //     <td>' . " 	service	 (" . $service . ')</td>
                //     <td>' . " 	new_woreda	 (" . $new_woreda . ')</td>
                //     <td>' . " 	rank	 (" . $rank . ')</td>
                //     <td>' . " 	remark	 (" . $remark . ')</td>
                // </tr>
                // ';

                // echo "<br>";

                $updateSql = "UPDATE `required` SET `number`='$number' WHERE required_id='$required_id'";
                if (mysqli_query($connectQuery, $updateSql)) {
                    // echo "<br>";
                    // echo "UPDATED";
                    // echo "<br>";
                } else {
                }
            }
        } else {
            // echo "empty";
        }
    }
}

// mysqli_close($connectQuery);

if ($reloadKey==1) {
    echo "<br>";
    echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
    echo "<br>";
    Header('Location: '.$_SERVER['PHP_SELF']);
}

echo "<h1>SUCCESSFUL</h1>";
