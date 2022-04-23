<?php 
  session_start();

  if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']) && !isset($_SESSION['user_role'])) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Secure Login System PHP</title>
	<link rel="stylesheet" href="./../vendors/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	  <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
	  	<form class="p-5 rounded shadow" 
	  	      action="auth.php"
	  	      method="post" 
	  	      style="width: 30rem">
	  		<h1 class="text-center pb-5 display-4">LOGIN</h1>
	  		<?php if (isset($_GET['error'])) { ?>
	  		<div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error'])?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label for="exampleInputEmail1" 
		           class="form-label">Email address
		    </label>
		    <input type="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" 
		           class="form-control" 
		           id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" 
		           class="form-label">Password
		    </label>
		    <input type="password" 
		           class="form-control" 
		           name="password" 
		           id="exampleInputPassword1">
		  </div>
		  <button type="submit" 
		          class="btn btn-primary">LOGIN
		  </button>
		</form>
	  </div>
</body>
</html>

<?php 
}else {

	if($user_role == "Regional Admin"){
		header("Location: ../pages/Region/Regional admin/admin index.php");
	}
	elseif($user_role == "zone Director"){
		header("Location: ../pages/Zone/ZoneTds/Dashboard.php");
	} elseif($user_role == "Zone Admin"){
		header("Location: ../pages/Zone/zone_admin/zonehome.php");
	}elseif($user_role == "Woreda Admin"){
		header("Location: ../pages/Woreda/Woreda Admin/woreda admin index.php");
	}else{
		header("Location: index.php");
	}

//    header("Location: index.php");
}
 ?>
