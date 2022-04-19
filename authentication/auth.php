<?php 
session_start();
include 'db_conn.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	}
	else if (empty($password)){
		header("Location: login.php?error=Password is required&email=$email");
	}
	else {
		$stmt = $conn->prepare("SELECT * FROM users WHERE uemail=?");
		$stmt->execute([$email]);
		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();
			$user_id = $user['user_id'];
			$user_email = $user['uemail'];
			$user_password = $user['password'];
			$user_fname = $user['fname'];
			$user_mname = $user['mname'];
			$user_role = $user['urole'];
			$user_status = $user['status'];
			$user_address = $user['aname'];
			$user_full_name = $user['fname'].' '.$user['mname'].' '.$user['lname'];
			$user_phone = $user['uphone'];
			if ($email === $user_email) {
				if (password_verify($password, $user_password)) {
					if($user_status == "1"){
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_fname'] = $user_fname;
					$_SESSION['user_mname'] = $user_mname;
					$_SESSION['user_email'] = $user_email;
					$_SESSION['user_full_name'] = $user_full_name;
					$_SESSION['user_role'] = $user_role;
					$_SESSION['user_status'] = $user_status;
					$_SESSION['user_address'] = $user_address;
					$_SESSION['user_phone'] = $user_phone;
					
					if($user_role == "Regional Admin")
					{
						header("Location: ./../pages/admin/admin index.php");
					}
					elseif($user_role == "zone Director"){
						header("Location: ./../pages/ZoneTds/Dashboard.php");
					}
					elseif($user_role == "zone Admin"){
						header("Location: ./../pages/zone_admin/zonehome.php");
					} else{
						// header("Location: ./../pages/zone_admin/zonehome.php");
					}
					}else{
						header("Location: login.php?error=Your account has been temporarily deactivated. Please contact your administrator.&email=$email");
					}

				}else {
					header("Location: login.php?error=Incorect User name or password&email=$email");
				}
			}else {
				header("Location: login.php?error=Incorect User name or password&email=$email");
			}
		}else {
			header("Location: login.php?error=Incorect User name or password&email=$email");
		}
	}
}
?>
