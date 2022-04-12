
        <?php
        $localhost = "localhost"; #localhost
        $dbusername = "root"; #username of phpmyadmin
        $dbpassword = "";  #password of phpmyadmin
        $dbname = "tds v1.0.1";  #database name

        #connection string
        $conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

        if (isset($_POST["submit"])) {
            #retrieve file title
            $title = $_POST["resourcename_name"];

            #file name with a random number so that similar dont get replaced
            $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

            #temporary file name to store file
            $tname = $_FILES["file"]["tmp_name"];

            #upload directory path
            $uploads_dir = './../../../../../../file';
            #TO move the uploaded file to specific location

            $imageFileType = strtolower(pathinfo($tname, PATHINFO_EXTENSION));

            move_uploaded_file($tname, $uploads_dir . '/' . $pname);

            #sql query to insert into database
            $sql = "INSERT into resource(title,file_name) VALUES('$title','$pname')";
            // || $imageFileType != "txt" || $imageFileType != "docx" || $imageFileType != "XLSX"

            
            if ($_FILES["file"]["size"] >= 5120) {
                if ($imageFileType == "md") {
                    if (mysqli_query($conn, $sql)) {
                        echo true;
                    } else {
                        echo "Error";
                    }
                }else{
                    echo "file type must be pdf, txt, docx or xlsx";
                }
            } else {
                echo "file size must be less than 5mb";
            }
        }


        ?>