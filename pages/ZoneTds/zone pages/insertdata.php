<?php
$servername='localhost';
$username='root';
$password='';
$db='tds';
$conn=mysqli_connect($servername,$username,$password,$db);
$fname=($_POST['firstname']);
$mname=($_POST['middlename']);
$lname=($_POST['lastname']);
$sex=($_POST['sex']);
$edul=($_POST['educationlevel']);
$major=($_POST['major']);
$minor=($_POST['minor']);
$tlevel=($_POST['teacherlevel']);
$date=($_POST['date']);
$salary=($_POST['salary']);
$service=($_POST['service']);
$multi=($_POST['multiplayer']);
$other=($_POST['otherservice']);
$sql="INSERT INTO tdszone(`id`, `firstname`, `middlename`, `lastname`, `sex`, `educationlevel`, `major`, `minor`, `teacherlevel`, `empperiod`, `salary`, `service`, `multiplayer`, `otherservice`) VALUES ('null','$fname','$mname','$lname','$sex','$edul','$major','$minor','$tlevel','$date','$salary','$service','$multi','$other')";
if(mysqli_query($conn,$sql)) {
    echo true;
    
}
else{
    echo mysqli_error($conn);
}
?>