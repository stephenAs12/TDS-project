<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_role']) && isset($_SESSION['user_first_login']) && $_SESSION['user_first_login'] == "1" &&  $_SESSION['user_role'] == 'Woreda TDS expert') {
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
        <title>Add Transfer Request</title>
        <meta name="description" content="TDS | Admin Panel">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="./apple-icon.png">
        <link rel="shortcut icon" href="./favicon.ico">


        <link rel="stylesheet" href="../../../../../../../vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../../../../vendors/font-awesome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css"> -->
        <link rel="stylesheet" href="../../../../../../../vendors/flag-icon-css/css/flag-icon.min.css">
        <!-- <link rel="stylesheet" href="../../vendors/selectFX/css/cs-skin-elastic.css"> -->
        <link rel="stylesheet" href="../../../../../../../vendors/chosen/chosen.min.css">

        <link rel="stylesheet" href="../../../../../../../assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>




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
                    <a class="navbar-brand hidden" href="../../../../admin index.php"><img class="amhara-logo" width="30" height="30" src="../../../../../../../images/amhara.png" alt="Amhara Education Bureau"></a>

                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../../../woreda TDS expert index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                        </li>
                        <h3 class="menu-title">Account Related</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User Management</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-plus-square"></i><a href="../../../account related/user management/create user account/create account.php">Create User Account</a></li>
                                <li><i class="fa fa-eye"></i><a href="../../../account related/user management/view users/view_user.php">View Users</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>My Account</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-eye" style="color: white;"></i><a href="../../../account related/my account/view my account/view my account.php">View
                                        my account</a></li>
                                <li><i class="fa fa-pencil-square-o"></i><a href="../../../account related/my account/update my account/update my account.php">Update my
                                        account</a></li>
                            </ul>
                        </li>

                        <h3 class="menu-title">Data Related</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker" style="color: white;"></i><span style="color: white;">Teachers</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-plus-square" style="color: white;"></i><a href="../../teachers/add teachers/add teachers.php"><span style="color: white;">Add</span></a></li>
                                <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../update teachers/update teachers.php">Update</a></li>
                                <li><i class="menu-icon fa fa-eye"></i><a href="../view teachers/view teachers.php">View teachers</a></li>
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
                                <img class="user-avatar rounded-circle" src="../../../../../../../images/admin image/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">


                                <a class="nav-link" href="../../../account related/my account/view my account/view my account.php"><i class="fa fa-user"></i>
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
                                Hello Estifanos,

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

            <span id="error_message" class="text-danger"></span>
            <span id="success_message" class="text-success"></span>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Admin's Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../../../../admin index.php">Dashboard</a></li>
                                <li class="active">Add Transfer</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">


                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Add Transfer</div>
                                <div class="card-body card-block">
                                    <form action="" method="get">
                                        <div class="form-group col-md-8">
                                            <label for="known_id_id" class="form-label">Teacher ID
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="known_id" id="known_id_id" value="<?php if (isset($_GET['known_id'])) {
                                                                                                                echo $_GET['known_id'];
                                                                                                            } ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">

                                            <div class="input-group">

                                                <button type="submit" class="btn btn-success" style="margin-top: 32px;border-radius:5px">Search</button><br>
                                            </div>
                                        </div>



                                    </form>

                                    <div id="teacher_form_id" class="">

                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "tds v1.0.1");

                                        if (isset($_GET['known_id'])) {
                                            $known_id = $_GET['known_id'];

                                            $query = "SELECT * FROM teachers WHERE knownid='$known_id' ";
                                            $query_run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    if ($row['woreda'] == $_SESSION['user_woreda']) {

                                                        $_SESSION['teacher_id'] = $row['knownid'];
                                                        $_SESSION['teacher_school'] = $row['school'];

                                        ?>
                                                        <div class="form-group col-md-4">
                                                            <label for="first_name_id" class="form-label">First Name
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="first_name_name" id="first_name_id" value="<?= $row['fname']; ?>" placeholder="First Name" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="middle_name_id" class="form-label">Middle Name
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="middle_name_name" id="middle_name_id" value="<?= $row['mname']; ?>" placeholder="Middle Name" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="last_name_id" class="form-label">Last Name
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="last_name_name" id="last_name_id" value="<?= $row['lname']; ?>" placeholder="Last Name" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="sex_radio_id" class="form-label">Gender
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="sex_radio_name" id="sex_radio_id" value="<?= $row['sex']; ?>" placeholder="Gender" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="disable_radio_id" class="form-label">Disable
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="disable_radio_name" id="disable_radio_id" value="<?= $row['disability']; ?>" placeholder="Disable" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="married_radio_id" class="form-label">Married
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="married_radio_name" id="married_radio_id" value="<?= $row['marital_status']; ?>" placeholder="Married" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="nominee_radio_id" class="form-label">Nominee
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="nominee_radio_name" id="nominee_radio_id" value="<?= $row['nominee']; ?>" placeholder="Nominee" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="education_level_id" class="form-label">Education Level
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" value="<?= $row['education_level']; ?>" placeholder="Education Level" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $school_name = $row['school'];
                                                        $get_school = mysqli_query($con, "SELECT * FROM school WHERE school_id =$school_name");
                                                        ?>

                                                        <div class="form-group col-md-8">
                                                            <label for="school_id" class="form-label">School Name
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <?php
                                                                while ($school_row = mysqli_fetch_array($get_school)) {
                                                                    $final_school_name = $school_row['school_name'];
                                                                    echo "<input type='text' value='$final_school_name' placeholder='Your School' class='form-control' readonly>";
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="major_id" class="form-label">Major
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="major_name" id="major_id" value="<?= $row['major']; ?>" placeholder="Department(Major)" class="form-control" readonly>
                                                            </div>
                                                        </div>



                                                        <div class="form-group col-md-3">
                                                            <label for="employment_period_id" class="form-label">Employment Period
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="text" name="employment_period_name" id="employment_period_id" value="<?= $row['employment_period']; ?>" placeholder="Date" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="service_id" class="form-label">Service
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="number" name="service_name" id="service_id" value="<?= $row['service']; ?>" placeholder="Service" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="other_id" class="form-label">Other Service
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                </div>
                                                                <input type="number" name="other_name" id="other_id" value="<?= $row['other_service']; ?>" placeholder="Other Service" class="form-control" readonly>
                                                            </div>
                                                        </div>


                                                        <div>
                                                            <form action="" method="post">
                                                                <div class="form-group col-md-12">
                                                                    <div class="input-group" style="margin-top: 10px;">
                                                                        <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                        </div>
                                                                        <select name="transfer_type_name" id="transfer_type_id" class='form-control' required>
                                                                            <option value="" selected disabled hidden>Please Select Transfer Level</option>
                                                                            <option value="Region To Region">Region To Region</option>
                                                                            <option value="Zone To Zone">Zone To Zone</option>
                                                                            <option value="Woreda To Woreda">Woreda To Woreda</option>
                                                                            <option value="School To School">School To School</option>
                                                                            <option value="Gudignt To Gudignt">Gudignt To Gudignt</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <form id="r2r_form_id">

                                                                <div class="col-sm-12" id="region_label_id" style="border: 1px solid black;">
                                                                    <div class="alert  alert-success alert-dismissible fade show text-center" role="alert">
                                                                        Apply for Region to Region Transfer


                                                                        <div id="region_id">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="r2r_region1_id" id="" class="form-label">
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                    </div>
                                                                                    <select name="r2r_region1_name" id="r2r_region1_id" class='form-control' required>
                                                                                        <option value="" selected disabled hidden>Region 1</option>
                                                                                        <option value="Addis Ababa (city)">Addis Ababa (city)</option>
                                                                                        <option value="Afar Region">Afar Region</option>
                                                                                        <option value="	Benishangul-Gumuz Region"> Benishangul-Gumuz Region</option>
                                                                                        <option value="Dire Dawa (city)">Dire Dawa (city)</option>
                                                                                        <option value="	Gambela Region">Gambela Region</option>
                                                                                        <option value="Harari Region">Harari Region</option>
                                                                                        <option value="Oromia Region">Oromia Region</option>
                                                                                        <option value="Sidama Region">Sidama Region</option>
                                                                                        <option value="Somali Region">Somali Region</option>
                                                                                        <option value="South West Ethiopia Peoples Region">South West Ethiopia Peoples' Region</option>
                                                                                        <option value="Southern Nations, Nationalities, and Peoples Region">Southern Nations, Nationalities, and Peoples' Region</option>
                                                                                        <option value="Tigray Region">Tigray Region</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="r2r_region2_id" id="" class="form-label">
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                    </div>
                                                                                    <select name="r2r_region2_name" id="r2r_region2_id" class='form-control'>
                                                                                        <option value="" selected disabled hidden>Region 2</option>
                                                                                        <option value="Addis Ababa (city)">Addis Ababa (city)</option>
                                                                                        <option value="Afar Region">Afar Region</option>
                                                                                        <option value="	Benishangul-Gumuz Region">Benishangul-Gumuz Region</option>
                                                                                        <option value="Dire Dawa (city)">Dire Dawa (city)</option>
                                                                                        <option value="	Gambela Region">Gambela Region</option>
                                                                                        <option value="Harari Region">Harari Region</option>
                                                                                        <option value="Oromia Region">Oromia Region</option>
                                                                                        <option value="Sidama Region">Sidama Region</option>
                                                                                        <option value="Somali Region">Somali Region</option>
                                                                                        <option value="South West Ethiopia Peoples Region">South West Ethiopia Peoples' Region</option>
                                                                                        <option value="Southern Nations, Nationalities, and Peoples Region">Southern Nations, Nationalities, and Peoples' Region</option>
                                                                                        <option value="Tigray Region">Tigray Region</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-actions form-group" style="text-align: center;">
                                                                                <button type="reset" class="btn btn-danger btn-sm" style="border-radius:5px;">Clear</button>
                                                                                <button type="submit" id="teacher_submit_id" name="submit" class="btn btn-success btn-sm" style="border-radius:5px;">Submit</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <form id="z2z_form_id">
                                                                <div class="col-sm-12" id="zone_label_id" style="border: 1px solid black;">
                                                                    <div class="alert  alert-success alert-dismissible fade show text-center" role="alert">
                                                                        Apply for Zone to Zone Transfer


                                                                        <div id="zone_id">
                                                                            <!-- <div> -->

                                                                                <div class="form-group col-md-12">
                                                                                    <div class="form-group col-md-12">
                                                                                        <label for="z2z_zone1_id" id="" class="form-label">
                                                                                        </label>
                                                                                        <div class="input-group">
                                                                                            <?php
                                                                                            include 'support/get zone.php';
                                                                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                                                                            echo "<select name='z2z_zone1_name' id='z2z_zone1_id' class='form-control' required>";
                                                                                            echo "<option value='' selected hidden>Zone 1 *</option>";
                                                                                            while ($zone_row = mysqli_fetch_array($zone_resualt)) {
                                                                                                echo "<option value='$zone_row[zone_id]'>$zone_row[zone_name]</option>";
                                                                                            }
                                                                                            echo "</select>";
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-5">
                                                                                        <!-- <label for="z2z_woreda1_id" id="" class="form-label">
                                                                                        </label> -->
                                                                                        <div class="input-group">
                                                                                            <?php
                                                                                            // include 'add user/get address.php';
                                                                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                                                                            echo "<select name='z2z_woreda11_name' id='z2z_woreda11_id' class='form-control' required>";
                                                                                            echo "<option value='' selected hidden>Woreda 1 *</option>";
                                                                                            // while ($address_row = mysqli_fetch_array($address_resualt)) {
                                                                                            //     echo "<option value='$address_row[zone_id]'>$address_row[zone_name]</option>";
                                                                                            // }
                                                                                            echo "</select>";
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-5">
                                                                                        <!-- <label for="z2z_woreda2_id" id="" class="form-label">
                                                                                        </label> -->
                                                                                        <div class="input-group">
                                                                                            <?php
                                                                                            // include 'add user/get address.php';
                                                                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                                                                            echo "<select name='z2z_woreda12_name' id='z2z_woreda12_id' class='form-control' required>";
                                                                                            echo "<option value='' selected hidden>Woreda 2*</option>";
                                                                                            // while ($address_row = mysqli_fetch_array($address_resualt)) {
                                                                                            //     echo "<option value='$address_row[zone_id]'>$address_row[zone_name]</option>";
                                                                                            // }
                                                                                            echo "</select>";
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-2">
                                                                                        <!-- <label for="z2z_woreda2_id" id="" class="form-label">
                                                                                        </label> -->
                                                                                        <div class="input-group">
                                                                                            <input class="form-check-input" type="checkbox" value="173" name="z2z_zone1_173_name" id="z2z_zone1_173_id">
                                                                                            <label class="form-check-label" for="z2z_zone1_173_id">
                                                                                                173
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-3">

                                                                                        <div class="input-group">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group col-md-12">
                                                                                    <div class="form-group col-md-12">
                                                                                        <!-- <label for="z2z_zone2_id" id="" class="form-label">
                                                                                        </label> -->
                                                                                        <div class="input-group">
                                                                                            <?php
                                                                                            include 'support/get zone.php';
                                                                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                                                                            echo "<select name='z2z_zone2_name' id='z2z_zone2_id' class='form-control' required>";
                                                                                            echo "<option value='' selected hidden>Zone 2 *</option>";
                                                                                            while ($zone_row = mysqli_fetch_array($zone_resualt)) {
                                                                                                echo "<option value='$zone_row[zone_id]'>$zone_row[zone_name]</option>";
                                                                                            }
                                                                                            echo "</select>";
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-5">
                                                                                        <!-- <label for="z2z_woreda11_id" id="" class="form-label">
                                                                                        </label> -->
                                                                                        <div class="input-group">
                                                                                            <?php
                                                                                            // include 'add user/get address.php';
                                                                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                                                                            echo "<select name='z2z_woreda21_name' id='z2z_woreda21_id' class='form-control' required>";
                                                                                            echo "<option value='' selected hidden>Woreda 1 *</option>";
                                                                                            // while ($address_row = mysqli_fetch_array($address_resualt)) {
                                                                                            //     echo "<option value='$address_row[zone_id]'>$address_row[zone_name]</option>";
                                                                                            // }
                                                                                            echo "</select>";
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-5">
                                                                                        <!-- <label for="z2z_woreda22_id" id="" class="form-label">
                                                                                        </label> -->
                                                                                        <div class="input-group">
                                                                                            <?php
                                                                                            // include 'add user/get address.php';
                                                                                            echo "<div class='input-group-addon'><i class='fa fa-map-marker' aria-hidden='true'></i></div>";
                                                                                            echo "<select name='z2z_woreda22_name' id='z2z_woreda22_id' class='form-control' required>";
                                                                                            echo "<option value='' selected hidden>Woreda 2*</option>";
                                                                                            // while ($address_row = mysqli_fetch_array($address_resualt)) {
                                                                                            //     echo "<option value='$address_row[zone_id]'>$address_row[zone_name]</option>";
                                                                                            // }
                                                                                            echo "</select>";
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-2">
                                                                                        <div class="form-group col-md-3">
                                                                                            <!-- <label for="z2z_woreda2_id" id="" class="form-label">
                                                                                            </label> -->
                                                                                            <div class="input-group">
                                                                                                <input class="form-check-input" type="checkbox" value="173" name="z2z_zone2_173_name" id="z2z_zone2_173_id">
                                                                                                <label class="form-check-label" for="z2z_zone2_173_id">
                                                                                                    173
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-actions form-group" style="text-align: center;">
                                                                                    <button type="reset" class="btn btn-danger btn-sm" style="border-radius:5px;">Clear</button>
                                                                                    <button type="submit" id="teacher_submit_id" name="submit" class="btn btn-success btn-sm" style="border-radius:5px;">Submit</button>

                                                                                </div>

                                                                            <!-- </div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <?php

                                                            if ($conn === false) {
                                                                die("ERROR: Could not connect. "
                                                                    . mysqli_connect_error());
                                                            }
                                                            $userZone =  $_SESSION['user_address'];
                                                            $woredaResualt1 = mysqli_query($conn, "SELECT * FROM woreda WHERE zoneid =$userZone");
                                                            $woredaResualt2 = mysqli_query($conn, "SELECT * FROM woreda WHERE zoneid =$userZone");
                                                            $woredaResualt3 = mysqli_query($conn, "SELECT * FROM woreda WHERE zoneid =$userZone");

                                                            ?>

                                                            <form id="w2w_form_id">

                                                                <div class="col-sm-12" id="woreda_label_id" style="border: 1px solid black;">
                                                                    <div class="alert  alert-success alert-dismissible fade show text-center" role="alert">
                                                                        Apply for Woreda to Woreda Transfer


                                                                        <div id="woreda_id">

                                                                            <div class="form-group col-md-12">
                                                                                <div class="form-group col-md-4">

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                        </div>

                                                                                        <?php

                                                                                        echo "<select name='w2w_woreda1_name' id='w2w_woreda1_id' class='form-control' required>";
                                                                                        echo "<option value='' selected hidden>Woreda 1 *</option>";
                                                                                        while ($woredaRow1 = mysqli_fetch_array($woredaResualt1)) {
                                                                                            echo "<option value='$woredaRow1[woreda_id]'>$woredaRow1[woreda_name]</option>";
                                                                                        }
                                                                                        echo "</select>";

                                                                                        ?>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-md-4">

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                        </div>

                                                                                        <?php

                                                                                        echo "<select name='w2w_woreda2_name' id='w2w_woreda2_id' class='form-control'>";
                                                                                        echo "<option value='' selected hidden> Woreda 2 *</option>";
                                                                                        while ($woredaRow2 = mysqli_fetch_array($woredaResualt2)) {
                                                                                            echo "<option value='$woredaRow2[woreda_id]'>$woredaRow2[woreda_name]</option>";
                                                                                        }
                                                                                        echo "</select>";

                                                                                        ?>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-md-4">

                                                                                    <div class="input-group">
                                                                                        <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                        </div>

                                                                                        <?php

                                                                                        echo "<select name='w2w_woreda3_name' id='w2w_woreda3_id' class='form-control'>";
                                                                                        echo "<option value='' selected hidden> Woreda 3 *</option>";
                                                                                        while ($woredaRow3 = mysqli_fetch_array($woredaResualt3)) {
                                                                                            echo "<option value='$woredaRow3[woreda_id]'>$woredaRow3[woreda_name]</option>";
                                                                                        }
                                                                                        echo "</select>";

                                                                                        ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-actions form-group" style="text-align: center;">
                                                                                <button type="reset" class="btn btn-danger btn-sm" style="border-radius:5px;">Clear</button>
                                                                                <button type="submit" id="teacher_submit_id" name="submit" class="btn btn-success btn-sm" style="border-radius:5px;">Submit</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>



                                                            <?php

                                                            if ($conn === false) {
                                                                die("ERROR: Could not connect. "
                                                                    . mysqli_connect_error());
                                                            }
                                                            $userWoreda =  $_SESSION['user_woreda'];
                                                            $schoolResualt1 = mysqli_query($conn, "SELECT * FROM school WHERE woreda_id =$userWoreda");
                                                            $schoolResualt2 = mysqli_query($conn, "SELECT * FROM school WHERE woreda_id =$userWoreda");
                                                            $schoolResualt3 = mysqli_query($conn, "SELECT * FROM school WHERE woreda_id =$userWoreda");

                                                            ?>

                                                            <form id="s2s_form_id">
                                                                <div class="col-sm-12" id="school_label_id" style="border: 1px solid black;">
                                                                    <div class="alert  alert-success alert-dismissible fade show text-center" role="alert">
                                                                        Apply for School to School Transfer


                                                                        <div id="school_id">
                                                                            <div class="form-group col-md-4">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                    </div>

                                                                                    <?php

                                                                                    echo "<select name='s2s_school1_name' id='s2s_school1_id' class='form-control' required>";
                                                                                    echo "<option value='' selected hidden>School1 *</option>";
                                                                                    while ($schoolRow1 = mysqli_fetch_array($schoolResualt1)) {
                                                                                        echo "<option value='$schoolRow1[school_id]'>$schoolRow1[school_name]</option>";
                                                                                    }
                                                                                    echo "</select>";

                                                                                    ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                    </div>

                                                                                    <?php

                                                                                    echo "<select name='s2s_school2_name' id='s2s_school2_id' class='form-control' required>";
                                                                                    echo "<option value='' selected hidden>School2 *</option>";
                                                                                    while ($schoolRow2 = mysqli_fetch_array($schoolResualt2)) {
                                                                                        echo "<option value='$schoolRow2[school_id]'>$schoolRow2[school_name]</option>";
                                                                                    }
                                                                                    echo "</select>";

                                                                                    ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i>
                                                                                    </div>

                                                                                    <?php

                                                                                    echo "<select name='s2s_school3_name' id='s2s_school3_id' class='form-control' required>";
                                                                                    echo "<option value='' selected hidden> School3 *</option>";
                                                                                    while ($schoolRow3 = mysqli_fetch_array($schoolResualt3)) {
                                                                                        echo "<option value='$schoolRow3[school_id]'>$schoolRow3[school_name]</option>";
                                                                                    }
                                                                                    echo "</select>";

                                                                                    ?>

                                                                                </div>
                                                                            </div>

                                                                            <div class="form-actions form-group">
                                                                                <button type="reset" class="btn btn-danger btn-sm" style="border-radius:5px;">Clear</button>
                                                                                <button type="submit" id="teacher_submit_id" name="submit" class="btn btn-success btn-sm" style="border-radius:5px;">Submit</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>


                                    </div>

                    <?php
                                                    } else {
                                                        echo "No Record Found";
                                                    }
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }
                                        }

                    ?>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (isset($_GET['known_id'])) {
                            $known_id = $_GET['known_id'];

                            $query = "SELECT * FROM teachers WHERE knownid='$known_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                                    if ($row['woreda'] == $_SESSION['user_woreda']) {
                        ?>
                        <?php
                                    }
                                }
                            }
                        }

                        ?>
                    </div>
                </div>


                <!-- woreda insertion -->
            </div>
        </div><!-- .animated -->
        </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->

        <script src="../../../../../../../vendors/jquery/dist/jquery-3.4.1.js"></script>
        <script src="../../../../../../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../../../../../../vendors/jquery/dist/jquery.validate.js"></script>
        <script src="../../../../../../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../../../../../../assets/js/main.js"></script>
        <script src="../../../../../../../vendors/chosen/chosen.jquery.min.js"></script>
        <script src="../../../../../../../vendors/sweetalert/sweetalert2@11.js"></script>
        <script src="r2r.js"></script>
        <script src="z2z.js"></script>
        <script src="w2w.js"></script>
        <script src="s2s.js"></script>


        <script>
            jQuery(document).ready(function() {
                jQuery("#teacher_id_id").change(function() {
                    var teacherData = jQuery(this).val();
                    // if (jobValue == "Region TDS expert") {
                    //     jQuery("#address_name_id").removeAttr("required");
                    // }

                    jQuery.ajax({
                        url: "find_teacher.php",
                        method: "POST",
                        data: {
                            teacher_data: teacherData
                        },
                        success: function(data) {
                            jQuery("#nominee_radio_id").html(data);
                        }
                    });

                });
            });
        </script>

        <script>
            jQuery(document).ready(function() {

                jQuery("#region_id").hide();
                jQuery("#region_label_id").hide();
                jQuery("#zone_id").hide();
                jQuery("#zone_label_id").hide();
                jQuery("#woreda_id").hide();
                jQuery("#woreda_label_id").hide();
                jQuery("#school_id").hide();
                jQuery("#school_label_id").hide();

                jQuery("#transfer_type_id").change(function() {
                    var transferType = jQuery(this).val();

                    if (transferType == "Region To Region") {
                        jQuery("#region_id").show();
                        jQuery("#region_label_id").show();

                        jQuery("#zone_id").hide();
                        jQuery("#zone_label_id").hide();
                        jQuery("#woreda_id").hide();
                        jQuery("#woreda_label_id").hide();
                        jQuery("#school_id").hide();
                        jQuery("#school_label_id").hide();
                    }
                    if (transferType == "Zone To Zone") {
                        jQuery("#zone_label_id").show();
                        jQuery("#zone_id").show();

                        jQuery("#region_id").hide();
                        jQuery("#region_label_id").hide();
                        jQuery("#woreda_id").hide();
                        jQuery("#woreda_label_id").hide();
                        jQuery("#school_id").hide();
                        jQuery("#school_label_id").hide();
                    }
                    if (transferType == "Woreda To Woreda") {
                        jQuery("#woreda_label_id").show();
                        jQuery("#woreda_id").show();

                        jQuery("#region_id").hide();
                        jQuery("#region_label_id").hide();
                        jQuery("#zone_id").hide();
                        jQuery("#zone_label_id").hide();
                        jQuery("#school_id").hide();
                        jQuery("#school_label_id").hide();
                    }
                    if (transferType == "School To School") {
                        jQuery("#school_label_id").show();
                        jQuery("#school_id").show();
                        jQuery("#region_id").hide();
                        jQuery("#region_label_id").hide();
                        jQuery("#zone_id").hide();
                        jQuery("#zone_label_id").hide();
                        jQuery("#woreda_id").hide();
                        jQuery("#woreda_label_id").hide();
                    }
                });
            });
        </script>

        <script>
            jQuery(document).ready(function() {
                jQuery("#z2z_zone1_id").change(function() {
                    var zoneValue = jQuery(this).val();
                    // if (jobValue == "Region TDS expert") {
                    //     jQuery("#address_name_id").removeAttr("required");
                    // }
                    jQuery.ajax({
                        url: "support/get woreda.php",
                        method: "POST",
                        data: {
                            zone_val: zoneValue
                        },
                        success: function(data) {
                            jQuery("#z2z_woreda11_id").html(data);
                            jQuery("#z2z_woreda12_id").html(data);
                        }
                    });

                });
                jQuery("#z2z_zone2_id").change(function() {
                    var zoneValue = jQuery(this).val();
                    // if (jobValue == "Region TDS expert") {
                    //     jQuery("#address_name_id").removeAttr("required");
                    // }
                    jQuery.ajax({
                        url: "support/get woreda.php",
                        method: "POST",
                        data: {
                            zone_val: zoneValue
                        },
                        success: function(data) {
                            jQuery("#z2z_woreda21_id").html(data);
                            jQuery("#z2z_woreda22_id").html(data);
                        }
                    });

                });
            });
        </script>

    </body>

    </html>
<?php

} else {
    header("location: ../../../authentication/login.php");
}

?>