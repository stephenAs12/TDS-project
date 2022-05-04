<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_role']) && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == "1" && $_SESSION['user_role']=='Zone Admin') {
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Account</title>
    <meta name="description" content="TDS | Admin Panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./apple-icon.png">
    <link rel="shortcut icon" href="./favicon.ico">


    <link rel="stylesheet" href="../../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../../../vendors/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css"> -->
    <link rel="stylesheet" href="../../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="../../vendors/selectFX/css/cs-../skin-elastic.css"> -->

    <link rel="stylesheet" href="../../../../../../../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        form .error {
            color: #ff0000;
            display: block;
        }

        input.error {
            border: 1px dashed red;
            font-weight: 300;
            color: red;
        }
    </style>
       <script>
        function Enableddl(chkddl)
        {
            var ddl=document.getElementById("address_name_id");
            ddl.disabled=chkddl.checked ? false:true;
            if (!ddl.disabled) {
                ddl.focus();

                
            }

        }
    </script>
    
</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="../../../../admin index.php"><img width="45" height="45" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau">
                    <p class="org-name">ANRSE</p>
                </a>
                <a class="navbar-brand hidden" href="../../../../admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../../images/amhara.png" alt=""></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <script src=""></script>
                        <a href="../../../../zonehome.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Account Related</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users" style="color: white;"></i><span style="color: white;">User Management</span></a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-plus-square" style="color: white;"></i><a href="./create account.php"><span style="color: white;">Create User Account</span></a></li>
                            <li><i class="fa fa-eye"></i><a href="../view users/view_user.php">View Users</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>My Account</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-eye"></i><a href="../../my account/view my account/view my account.php">View
                                    my account</a></li>
                            <li><i class="fa fa-pencil-square-o"></i><a href="../../my account/update my account/update my account.php">Update my
                                    account</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Data Related</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i> Woreda</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="../../../data related/zone and woreda/add zone and woreda/add zone and woreda.php">Add</a></li>
                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../data related/zone and woreda/update zone and woreda/update zone and woreda.php">Update</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/zone and woreda/view zone/view zone.php">View zone</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../../data related/zone and woreda/view woreda/view woreda.php">View Woreda</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-exchange"></i>Transfer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-step-backward" aria-hidden="true"></i><a href="../../../data related/transfer/before computed/before_computed.php">Before Computed</a></li>
                            <li><i class="fa fa-step-forward" aria-hidden="true"></i><a href="../../../data related/transfer/after computed/after_computed.php">After Computed</a></li>
                        </ul>

                    </li>

                    <h3 class="menu-title">Resource Related</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-rebel"></i>Resource</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="../../../resource related/resources/add resources/add resources.php">Add Resource</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="../../../resource related/resources/view resources/view resources.php">View Resource</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li>
                        <a href="../../../extras/developers/developers.php"> <i class="menu-icon fa fa-file-code-o"></i>Developers </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-compress"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-4" href="../../../data related/transfer/before computed/before_computed.php">
                                    <i class="fa fa-check"></i>
                                    <p style="color: black;">Transfer data inserted</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="../../../data related/transfer/after computed/after_computed.php">
                                    <i class="fa fa-info"></i>
                                    <p style="color: black;">View transfer result</p>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../../../../../../images/admin image/adminn.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../../my account/view my account/view my account.php"><i class="fa fa-user"></i>
                                My Profile</a>

                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-et"></i>
                        </a>
                    </div>

                    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
                    <script>
                        function loadGoogleTranslate() {
                            new google.translate.TranslateElement({
                                defaultLanguage: 'en',
                                pageLanguage: 'en',
                                includedLanguages: 'en,am',
                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                autoDisplay: false,
                                multilanguage: true

                            }, 'language-select')
                        };
                    </script>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <!-- logout modal View -->


        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticModalLabel">Are you sure ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Hello,<?php echo  $_SESSION['user_fname']; ?>

                            When logging out you are redirected to a Login page ¿Are you sure…?

                            If you want to stay, click a Cancel button.

                            Thanks.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary"><a href="../../../../../../../authentication/logout.php" style="text-decoration: none; color: white;">Confirm</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- logout modal view -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Zone Admin's Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="../../../../admin index.php">Dashboard</a></li>
                            
                            <li class="active">Create User Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- form -->
        <div>
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <strong>Add User</strong>
                        <small>Use this form
                            <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                        </small>
                    </div>
                    <div class="card-body">

                        <div class="card-body card-block">
                            <form id="add_user_form" class="">

                                <div class="nameholder">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="first_name_id" name="first_name_name" placeholder="First Name *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <di class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="middle_name_id" name="middle_name_name" placeholder="Middle Name *" class="form-control" required>
                                        </di v>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="last_name_id" name="last_name_name" placeholder="Last Name *" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                               

                                <!-- <div style="margin-left:15px; margin-right: 15px;">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                                            <input class="form-control" type="file" id="user_image_id" name="user_image_name" placeholder="Upload Profile image">
                                        </div>
                                    </div>
                                </div> -->
                                <div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <?php
                                            include 'add user/get job level.php';
                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                            echo "<select name='job_level_name' id='job_level_id' class='form-control' required>";
                                            echo "<option value='' selected hidden>Please select user role *</option>";
                                            while ($job_level_row = mysqli_fetch_array($job_level_resualt)) {
                                                $wored_zone = $job_level_row['level_name'] . " " . $job_level_row['job_name'];
                                                if ($wored_zone == "Woreda Admin" || $wored_zone == "Zone TDS expert") {
                                                    # code...
                                                    echo "<option value='$job_level_row[level_name] $job_level_row[job_name]'>$job_level_row[level_name] $job_level_row[job_name]</option>";
                                                }
                                             
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="checkbox" id="chkddl" onclick="Enableddl(this)">
                                        accept the check box to enable dropdwon
                                        <!-- <select name="" id="DDL" disabled="disabled">
                                            <option value="" selected disabled>one</option>
                                            <option value="">two</option>
                                            <option value="">three</option>
                                            id="address_name_id"
                                        </select> -->


                                    </div>
                                   



                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <?php
                                            // include 'add user/get address.php';


                                            $conn = mysqli_connect("localhost", "root", "", "tds v1.0.1");

                                            if ($conn === false) {
                                                die("ERROR: Could not connect. "
                                                    . mysqli_connect_error());
                                            }
                                            $woreda_list = $_SESSION['user_address'];
                                            $address_resualt = mysqli_query($conn, "SELECT * FROM woreda WHERE zoneid = $woreda_list");

                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                            echo "<select    id='address_name_id' disabled='disabled' name='address_name_name'  class='form-control'>";
                                            echo "<option value='' selected  hidden >Please select Woreda *</option>";
                                            while ($address_row = mysqli_fetch_array($address_resualt)) {
                                                echo "<option value='$address_row[woreda_id]'>$address_row[woreda_name]</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 15px; margin-right: 15px;">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input class="form-control" type="number" id="user_phone_id" name="user_phone_name" placeholder="Phone* ex. 0912345678" minlength="10" maxlength="10" required>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                <input type="email" id="user_email_id" name="user_email_name" placeholder="Email *" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                            <input type="password" id="user_password_id" name="user_password_name" placeholder="Password *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                            <input type="password" id="user_cpassword_id" name="user_cpassword_name" placeholder="Confirm Password *" class="form-control" required>
                                        </div>
                                    </div> -->
                                </div>


                                <div class="form-actions form-group">
                                    <button type="reset" class="btn btn-danger btn-md">Clear</button>
                                    <button type="submit" class="btn btn-success btn-md">Submit</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <script src="../../../../../../../vendors/jquery/dist/jquery.min.js"></script>
            <script src="../../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../../../../../../vendors/jquery/dist/jquery.validate.js"></script>
            <script src="../../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../../../../../../../assets/js/main.js"></script>
            <script src="../../../../../../../vendors/sweetalert/sweetalert2@11.js"></script>
            <script src="./add user/insert user.js"></script>
</body>
</html>

<?php
} 

else {
    header("location: ../../../authentication/login.php");
}

?>