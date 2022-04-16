<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ANRSE</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="./apple-icon.png">
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/table/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/table/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="../../../assets/table/css/fixedHeader.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../../../assets/table/css/main-style.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img width="45" height="45" src="../../../images/amhara.png" alt="">
                    <p class="org-name">ANRSE</p>
                </a>
                <a class="navbar-brand hidden" href="./"><img class="amhara-logo" width="30" height="30" src="../../images/amhara.png" alt=""></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>My Account</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-eye"></i><a href="../../my account/view my account/view.html">View my
                                    account</a></li>
                            <li><i class="fa fa-plus-circle"></i><a href="../create acc/insert.php">Update
                                    my account</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>TDS</a>
                        <ul class="sub-menu children dropdown-menu">
<!-- 
                            <li><i class="fa fa-eye"></i><a href="../view user/view_user.php">Check
                                    Data
                                </a></li> -->
                            <li><i class="fa fa-plus-circle"></i><a href="insert.php">Update Data</li>
                            <li><i class="fa fa-eye"></i><a href="../../my account/update my account/update.html">
                                    View Result</a></li>
                            <li><i class="fa fa-eye"></i><a href="../../my account/update my account/update.html">
                                    Print Result</a></li>
                        </ul>
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

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../../my account/view my account/view.html"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="./Dashboard.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">Hello guis how are
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <?php

        $connectQuery = mysqli_connect('localhost', 'root', '', 'tds');

        if (mysqli_connect_errno()) {
            echo mysqli_connect_error();
            exit();
        } else {
            $selectQuery = "SELECT tdszone.firstname, tdszone.middlename, tdszone.lastname, tdszone.sex, tdszone.educationlevel, tdszone.major, tdszone.minor, tdszone.teacherlevel,tdszone.empperiod,tdszone.salary,tdszone.service,tdszone.multiplayer,tdszone.otherservice FROM tdszone";


            $result = mysqli_query($connectQuery, $selectQuery);
            if (mysqli_num_rows($result) > 0) {
            } else {
                $msg = "No Record found";
            }
        }

        ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="Dashboard.php">Dashboard</a></li>
                            <li><a href="#">User Managment</a></li>
                            <li class="active">Create User Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-12">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Teachers Directors and Supervisors List</strong>
                        </div>
                        <div class="card-body">

                            <div>
                                <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>FatherName</th>
                                            <th>G.FatherName</th>
                                            <th>Sex</th>
                                            <th>EducationLevel</th>
                                            <th>MajorCourse</th>
                                            <th>teacherlevel</th>
                                            <th>empperiod</th>
                                            <th>Service</th>
                                            <th>Multiplayer</th>
                                            <th>OtherService</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '
                                        <tr>
                                        <td>' . $row["firstname"] . '</td>
                                        <td>' . $row["middlename"] . '</td>
                                        <td>' . $row["lastname"] . '</td>
                                        <td>' . $row["sex"] . '</td>
                                        <td>' . $row["educationlevel"] . '</td>
                                        <td>' . $row["major"] . '</td>
                                        <td>' . $row["teacherlevel"] . '</td>
                                        <td>' . $row["empperiod"] . '</td>
                                        <td>' . $row["service"] . '</td>
                                        <td>' . $row["multiplayer"] . '</td>
                                        <td>' . $row["otherservice"] . '</td>
                                    </tr>
                                                ';
                                    }
                                    ?>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
            <script src="../../../vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../../../assets/js/main.js"></script>
            <script src="../../../assets/table/js/jquery-3.5.1.js"></script>
            <script src="../../../assets/table/js/jquery.dataTables.min.js"></script>
            <script src="../../../assets/table/js/dataTables.bootstrap4.min.js"></script>
            <script src="../../../assets/table/js/dataTables.fixedHeader.min.js"></script>
            <script src="../../../assets/table/js/dataTables.buttons.min.js"></script>
            <script src="../../../assets/table/js/jszip.min.js"></script>
            <script src="../../../assets/table/js/pdfmake.min.js"></script>
            <script src="../../../assets/table/js/vfs_fonts.js"></script>
            <script src="../../../assets/table/js/buttons.html5.min.js"></script>
            <script src="../../../assets/table/js/buttons.print.min.js"></script>
            <script src="../../../assets/table/js/main.js"></script>
</body>

</html>