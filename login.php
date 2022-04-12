<!DOCTYPE html>
<?php
$servername='localhost';  
$username='root';
$password='';
$db='loginpage';
$conn=mysqli_connect($servername,$username,$password,$db);
if (isset($_POST['login'])) {
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $usertype=$_POST['usertype'];
    $query="SELECT * FROM login WHERE password='$pass' && usertype='$usertype' && username='$user'";
    $result=mysqli_query($conn,$query);
    if($result) {
          while($row=mysqli_fetch_array($result))
          {
            
            
              echo '<script type="text/javascript">alert("you are login successfully and you are logine as'.$row['usertype'].'"])</script>';
          }
      if (mysqli_num_rows($result)>0 && $row['usertype']="admin") {
        ?>
        <script type="text/javascript">
          window.location.href="pages/admin/admin index.php"</script>
          <?php
      }
      else{
        ?> 
        <script type="text/javascript">
          window.location.href="pages/ZoneTds/Dashboard.php"</script>

        <?php
      }
    }
    else{
      echo 'no result';
    }

   
  }
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TDS | Admin Panel</title>
    <meta name="description" content="TDS | Admin Panel" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="./apple-icon.png" />
    <link rel="shortcut icon" href="./favicon.ico" />
    <link
      rel="stylesheet"
      href="vendors/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="vendors/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
        <div class="login-content">
          <div class="login-logo">
            <a href="index.html">
              <img class="align-content" src="images/logo.png" alt="" />
            </a>
          </div>
          <div class="login-form">
              <table>
            <form method="POST">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="UserName" />
              </div>
              <div class="form-group">
                <input
                  type="password" name="password" class="form-control"
                  placeholder="Password"
                />
              </div>
              <table>
                  <tr>
                      <td>
                          Select user type:<select name="usertype">
                              <option value="admin">admin</option> 
                              <option value="user">user</option>
                          </select>
                      </td>
                 </tr>
                </table>
              <div class="checkbox">
                <label> <input type="checkbox" /> Remember Me </label>
                <label class="pull-right">
                  <a href="#">Forgotten Password?</a>
                </label>
              </div>
              <button
                type="submit" name="login" value="login" class="btn btn-success btn-flat m-b-30 m-t-30"
              >
                Sign in
              </button>
              <div class="social-login-content"></div>
   
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/widgets.js"></script>
  </body>
</html>
