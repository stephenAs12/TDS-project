
		<?php


        $conn = mysqli_connect("localhost", "root", "", "tds v1.0.1");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $address_resualt = mysqli_query($conn, "SELECT * FROM zone WHERE zone_name IS NOT NULL");

        echo "<select name='address_name_name' id='address_name_id' class='form-control' required>";
        echo "<option value='' selected hidden>Please select Zone *</option>";
        while ($address_row = mysqli_fetch_array($address_resualt)) {
            if ($_POST['job_val']=="Zone Admin") {
                echo "<option value='$address_row[zone_id]'>$address_row[zone_name]</option>";
            }
        }
        echo "</select>";

        ?>
