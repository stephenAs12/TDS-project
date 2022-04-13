<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ANRSE</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../../apple-icon.png">
    <link rel="shortcut icon" href="../../favicon.ico">
    <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/themify-icons.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../vendors/bootstrap/dist/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img width="45" height="45" src="../../../images/amhara.png" alt="">
                    <p class="org-name">ANRSE</p>
                </a>
                <a class="navbar-brand hidden" href="./"><img class="amhara-logo" width="30" height="30"
                        src="../../images/amhara.png" alt=""></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>My Account</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-eye"></i><a href="../../my account/view my account/view.html">View my
                                    account</a></li>
                            <li><i class="fa fa-plus-circle"></i><a
                                    href="../create acc/insert.php">Update
                                    my account</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>TDS</a>
                        <ul class="sub-menu children dropdown-menu">

                            <li><i class="fa fa-eye"></i><a href="../view user/view_user.php">Check
                                    Data
                                </a></li>
                            <li><i class="fa fa-plus-circle"></i><a
                                    href="insert.php">Update Data</li>
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
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../../my account/view my account/view.html"><i
                                    class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="./Dashboard.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">Hello guis how are
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                            aria-expanded="true">
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
        <!-- Header-->

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

                <div class="card">
                    <div class="card-header">
                        <strong>Insert TDS Data</strong>
                    </div>
                    <div class="card-body">

                        <div class="card-body card-block">
                            <form action="insertdata.php" method="POST" class="">

                                <div class="nameholder">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text"name="firstname" placeholder="First Name"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="middlename" name="middlename"
                                                placeholder="Middle Name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" id="lastname" name="lastname" placeholder="Last Name"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon" class="fa fa-level-down" aria-hidden="true"><i
                                                class="fa fa-male" aria-hidden="true"></i>
                                        </div>
                                        <select name="sex" id="selectlevel" class="form-control">
                                            <option value="Male">M</option>
                                            <option value="Female">F</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-university"
                                                aria-hidden="true"></i>
                                        </div>
                                        <select name="educationlevel" id="selectlevel" class="form-control">
                                            <option value="2nd Degree">2nd Degree</option>
                                            <option value="1st Degree">1st Degree</option>
                                            <option value="Claster">Claster</option>
                                            <option value="Linear">Linear</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-circle"
                                                aria-hidden="true"></i>
                                        </div>
                                        <input class="form-control" name="major" list="datalistOptions" id="exampleDataList"
                                            placeholder="Type to search..." />
                                        <datalist  id="datalistOptions">
                                            <option value="Amharic"></option>
                                            <option value="English"></option>
                                            <option value="Maths"></option>
                                            <option value="አማረኛ"></option>
                                            <option value="ስነ-ዜጋ"></option>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i>

                                        </div>
                                        <input class="form-control"   name="minor" list="name" id="exampleDataList"
                                            placeholder="Type to search..." />
                                        <datalist id="name">
                                            <option value="Physics"></option>
                                            <option value="sport"></option>
                                            <option value="Maths"></option>
                                            <option value="Civics"></option>
                                            <option value="Amharic"></option>
                                            <option value="Geography"></option>
                                            <option value="Maths"></option>
                                            <option value="Art"></option>
                                            <option value="Economics"></option>
                                            <option value="Business"></option>
                                            <option value="TD"></option>
                                            <option value="ICT"></option>

                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-paper-plane"
                                                aria-hidden="true"></i>
                                        </div>
                                        <select name="teacherlevel" id="selectlevel" class="form-control">
                                            <option value="Beginner Teacher">Beginner Teacher</option>
                                            <option value="Jonior Teacher">Jonior Teacher</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Senior Teacher">Senior Teacher</option>
                                            <option value="Associate Teacher">Associate Teacher</option>
                                            <option value="Leading Teacher5">Leading Teacher</option>
                                            <option value="Senior Leading Teacher">Senior Leading Teacher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <!-- <div class="md-form md-outline input-with-post-icon datepicker" id="customDays"> -->
                                        <input name="date" placeholder="Select date" type="date" id="Customization"
                                            class="form-control">
                                        <!-- <i class="fas fa-calendar input-prefix" tabindex=0></i> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="nameholder">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="firstname" name="salary" placeholder=" Salary"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="float" id="firstname" name="service" placeholder=" Service"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group col-md-4">
                                            <div class="input-group">
                                                <input type="float" id="multiplayer" name="multiplayer"
                                                    placeholder="Multiplayer" class="form-control" step="0.1" min="1"
                                                    max="1.9">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nameholder">
                                    <div class="form-group col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="float"  name="otherservice" placeholder="Other Service" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions form-group col-md-6" align="center">
                                    <button type="submit" class="btn btn-success btn-md">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-md">Clear</button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
            <script src="../../vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../../assets/js/main.js"></script>


</body>

</html>