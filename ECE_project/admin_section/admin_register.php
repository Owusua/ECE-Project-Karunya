<?php
session_start();
if(!isset($_SESSION['new_username'])){
  header("Location:admin_login.php");
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin_ECE Library</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
         <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin ECE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                                <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                </li>
                                </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="admin_logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="admin.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i> <span>Staff</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="update_staff.php"><i class="fa fa-angle-double-right"></i>Update Staff</a></li>
                                <li><a href="add_staff.php"><i class="fa fa-angle-double-right"></i> Add Staff</a></li>
                                <li><a href="delete_staff.php"><i class="fa fa-angle-double-right"></i>Delete Staff</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Book</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="update_book.php"><i class="fa fa-angle-double-right"></i>Update Books</a></li>
                                <li><a href="add_book.php"><i class="fa fa-angle-double-right"></i> Add Book</a></li>
                                <li><a href="delete_book.php"><i class="fa fa-angle-double-right"></i>Delete Book</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>User</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i>Create User</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Manage User</a></li>
                            </ul>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        ECE Library
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-th"></i> Dashboard</a></li>
                        <li class="active">User</li>
                    </ol>
                </section>


                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <h2 class="page-header">Create User</h2>
                    <div class="row">
                       <div class="col-md-3">
                       </div>
                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-body">
                                    <!-- form start -->
                                <form method="post" action="admin_entry.php" role="form">
                                    <input type="hidden" name="submitted" value="true" />
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="new_admin_name">Name</label></label>
                                            <input type="text" class="form-control" id="new_admin_name" name="new_admin_name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="user_contact">Contact</label>
                                            <input type="text" class="form-control" id="user_contact" name="user_contact" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="user_email">Email</label>
                                            <input type="text" class="form-control" id="user_email" name="user_email" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="date_registered">Date Registered</label>
                                            <input type="date" class="form-control" id="date_registered" name="date_registered" required="required" />
                                        </div>
                                        <div class="form-group">
                                             <label for="user_role">Role</label>
                                                <select class="form-control" name="user_role">
                                                  <option>Select role...</option>
                                                   <option>Admin</option>
                                                   <option>Member</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_address">Address</label>
                                            <input type="text" class="form-control" rows="2" id="user_address" name="user_address" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="new_username">Username</label>
                                            <input type="text" class="form-control" id="new_username" name="new_username" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">Password</label>
                                            <input type="password" class="form-control" id="new_password" name="new_password" required="required" />
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">

                                        <button type="submit" class="btn btn-primary" id="save" name="save">Create User</button></button>
                                        <button type="reset" class="btn btn-primary">Clear</button></button>
                                    </div>
                                </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                        <div class="col-md-3">
                        </div>
                    </div> <!-- /.row -->
                    <!-- END ALERTS AND CALLOUTS -->
                </section>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.js" type="text/javascript"></script>
         <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {

                $('#date_registered').datepicker({
                    format: "dd/mm/yyyy"
                });



            });
        </script>


    </body>
</html>