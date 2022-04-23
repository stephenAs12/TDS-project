
		<?php
        $conn = mysqli_connect("localhost", "root", "", "tds v1.0.1");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $job_level_resualt = mysqli_query($conn, "SELECT job_level.level_id, job_level.level_name, job.job_name FROM job_level INNER JOIN job ON job_level.jobid=job.job_id");

        ?>
