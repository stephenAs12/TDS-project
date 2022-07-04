<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function compare()
{

    $connectQuery = mysqli_connect('localhost', 'root', '', 'tds v1.0.1');

    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
        exit();
    } else {
        $userZone = $_SESSION['user_address'];

        $selectQuery = "SELECT known_id, full_name, sex, education_level, major, service_transfer, disability, married, nominee, woreda_one, remark, rank() 
    OVER ( partition by education_level, major, woreda_one order by service_transfer desc ) AS ranked
    FROM teacher_transfer WHERE zone = $userZone AND woreda_one > 0";
        $result = mysqli_query($connectQuery, $selectQuery);
        if (mysqli_num_rows($result) > 0) {
        } else {
            $msg = "No Record found";
        }
    }



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
            $rank = $row['ranked'];
            $remark = $row['remark'];




            mysqli_query($connectQuery, "UPDATE teacher_transfer SET rank='$rank' WHERE known_id='$known_id'");




        //     echo '
        // <tr>
        //     <td>' . " known_id (" . $known_id . ')</td>
        //     <td>' . " full_name (" . $full_name . ')</td>
          
        //     <td>' . "  education_level (" . $education_level . ')</td>
        //     <td>' . " major (" . $major . ')</td>
        //     <td>' . " service_transfer (" . $service_transfer . ')</td>

        //     <td>' . " woreda_one (" . $woreda_one . ')</td>

        //     <td>' . " Rank >>>>>>>>(" . $rank . ')</td>
           
        // </tr>
        // ';
        //     echo "<br>";
        //     echo "<br>";
        }
    }
}

// compare();
