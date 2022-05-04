<?php

session_start();

    $connect =  mysqli_connect('localhost', 'root', '', 'tds v1.0.1');
    $email=$_SESSION['user_email'];
    $newPass= $_POST['password'];
    $cpassword=$_POST['cpassword'];
    $newPassword=password_hash($newPass, PASSWORD_DEFAULT);
	
			if ($newPass&&$cpassword) {
				if ($newPass==$cpassword) {
                    $query="UPDATE users SET password='$newPassword', first_login='1' WHERE uemail='$email'";
                    // echo $email;
                
                    if(mysqli_query($connect, $query)){
                        header('location: change password.php?success=success');
                    }
					
					
				}
                else
                {
                    header('location: change password.php? success=password is not the same');
                   
                }
				
			}

 
    // header('location:view_user.php');
    
?>