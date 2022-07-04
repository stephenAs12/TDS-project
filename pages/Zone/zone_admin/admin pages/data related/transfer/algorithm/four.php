<?php
include "try three.php";
compare();
$connectQuery = mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
 else {
    $selectQuery = "SELECT * FROM teacher_transfer";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
    } 
    else {
        $msg = "No Record found";
    }
}


$known_id = null;
$full_name = null;
$sex = null;
$education_level = null;
$major = null;
$service_transfer = null;
$disability = null;
$married = null;
$nominee = null;
$woreda_one = null;
$rank = null;
$remark = null;
while ($row = mysqli_fetch_array($result)) {
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
        exit();
    } else {
        $known_id = $row["known_id"];
        $full_name = $row["full_name"];
        $sex = $row["sex"];
        $education_level = $row["education_level"];
        $major = $row["major"];
        $service_transfer = $row["service_transfer"];
        $disability = $row["disability"];
        $married = $row["married"];
        $nominee = $row["nominee"];
        $woreda_one = $row["woreda_one"];
        $rank = $row['rank'];
        $remark = $row['remark'];



        $selectService = "SELECT * FROM teacher_transfer WHERE education_level='$education_level' AND major='$major' AND service_transfer='$service_transfer' AND woreda_one='$woreda_one' AND rank='$rank' AND remark='service'";
        $resultService = mysqli_query($connectQuery, $selectService);

        while ($rowService = mysqli_fetch_array($resultService)) {

            if (mysqli_num_rows($resultService) > 1) {
                if ($rowService["remark"] == "service") {
                    if ($rowService["nominee"] == "Yes") {
                        $teacID = $rowService["known_id"];
                        $teacService = $rowService["service_transfer"];
                        // echo "<br>";
                        // echo "nominee";
                        // echo "<br>";
                        // echo '<td>' . " known_id (" . $rowService["known_id"] . ')</td>';
                        // echo '<td>' . " nominee (" . $rowService["nominee"] . ')</td>';
                        // echo "<br>";
                        mysqli_query($connectQuery, "UPDATE teacher_transfer SET service_transfer='$teacService'+1, remark='nominee' WHERE known_id='$teacID'");
                    }
                } else {
                    echo "else";
                }
            } else {
                $msg = "No Record found";
            }
        }
        compare();
        $selectMarried = "SELECT * FROM teacher_transfer WHERE education_level='$education_level' AND major='$major' AND service_transfer='$service_transfer' AND woreda_one='$woreda_one' AND rank='$rank' AND remark='nominee'";
        $resultMarried = mysqli_query($connectQuery, $selectMarried);

        while ($rowMarried = mysqli_fetch_array($resultMarried)) {

            if (mysqli_num_rows($resultMarried) > 1) {



                if ($rowMarried["remark"] == "nominee") {
                    if ($rowMarried["married"] == "Yes") {
                        $teacID = $rowMarried["known_id"];
                        $teacService = $rowMarried["service_transfer"];
                        // echo "<br>";
                        // echo "married";
                        // echo "<br>";
                        // echo '<td>' . " known_id (" . $rowMarried["known_id"] . ')</td>';
                        // echo '<td>' . " nominee (" . $rowMarried["nominee"] . ')</td>';
                        // echo "<br>";
                        mysqli_query($connectQuery, "UPDATE teacher_transfer SET service_transfer='$teacService'+1, remark='married' WHERE known_id='$teacID'");
                    }
                } else {
                    echo "else";
                }
            } else {
                $msg = "No Record found";
            }
        }

        compare();




        $selectDisability = "SELECT * FROM teacher_transfer WHERE education_level='$education_level' AND major='$major' AND service_transfer='$service_transfer' AND woreda_one='$woreda_one' AND rank='$rank' AND remark='married'";
        $resultDisability = mysqli_query($connectQuery, $selectDisability);

        while ($rowDisability = mysqli_fetch_array($resultDisability)) {

            if (mysqli_num_rows($resultDisability) > 1) {



                if ($rowDisability["remark"] == "married") {


                    if ($rowDisability["disability"] == "Yes") {
                        $teacID = $rowDisability["known_id"];
                        $teacService = $rowDisability["service_transfer"];
                        // echo "<br>";
                        // echo "Disability";
                        // echo "<br>";
                        // echo '<td>' . " known_id (" . $rowDisability["known_id"] . ')</td>';
                        // echo '<td>' . " disability (" . $rowDisability["disability"] . ')</td>';
                        // echo "<br>";
                        mysqli_query($connectQuery, "UPDATE teacher_transfer SET service_transfer='$teacService'+1, remark='disability' WHERE known_id='$teacID'");
                    }
                } else {
                    echo "else";
                }
            } else {
                $msg = "No Record found";
            }
        }
        compare();
        $selectSex = "SELECT * FROM teacher_transfer WHERE education_level='$education_level' AND major='$major' AND service_transfer='$service_transfer' AND woreda_one='$woreda_one' AND rank='$rank' AND remark='disability'";
        $resultSex = mysqli_query($connectQuery, $selectSex);

        while ($rowSex = mysqli_fetch_array($resultSex)) {

            if (mysqli_num_rows($resultSex) > 1) {



                if ($rowSex["remark"] == "disability") {


                    if ($rowSex["sex"] == "Female") {
                        $teacID = $rowSex["known_id"];
                        $teacService = $rowSex["service_transfer"];
                        // echo "<br>";
                        // echo "Sex";
                        // echo "<br>";
                        // echo '<td>' . " known_id (" . $rowSex["known_id"] . ')</td>';
                        // echo '<td>' . " Sex (" . $rowSex["sex"] . ')</td>';
                        // echo "<br>";
                        mysqli_query($connectQuery, "UPDATE teacher_transfer SET service_transfer='$teacService'+1, remark='sex' WHERE known_id='$teacID'");
                    }
                } else {
                    echo "else";
                }
            } else {
                $msg = "No Record found";
            }
        }
        compare();
        $selectRandom = "SELECT * FROM teacher_transfer WHERE education_level='$education_level' AND major='$major' AND service_transfer='$service_transfer' AND woreda_one='$woreda_one' AND rank='$rank' AND remark='sex'";
        $resultRandom = mysqli_query($connectQuery, $selectRandom);
        $forRandom = [];

        while ($rowRandom = mysqli_fetch_array($resultRandom)) {



            if (mysqli_num_rows($resultRandom) > 1) {



                if ($rowRandom["remark"] == "sex") {
                    if (!in_array($rowRandom["known_id"], $forRandom)) {
                        $forRandom[] = $rowRandom["known_id"];
                    }
                } else {
                    echo "else";
                }
            } else {
                $msg = "No Record found";
            }
        }
    }
}
$numbers = range(1, sizeof(array_unique($forRandom)));
shuffle($numbers);


for($i = 0; $i < sizeof(array_unique($forRandom)); $i++) {
    if (sizeof(array_unique($forRandom)) > 1) {
        $singleTeacher = $forRandom[$i];
        $randomRank = $numbers[$i];
        mysqli_query($connectQuery, "UPDATE teacher_transfer SET rank=$randomRank, remark='random' WHERE known_id='$singleTeacher'");
    }
}

