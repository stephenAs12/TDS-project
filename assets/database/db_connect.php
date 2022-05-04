<?php

    $con = mysqli_connect("localhost", "root", "", "tds v1.0.1");
    if (mysqli_connect_errno()) {
        echo "failed to connect: ".mysqli_connect_errno();
    }

?>