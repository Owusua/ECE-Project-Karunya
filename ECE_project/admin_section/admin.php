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
                                <span><i class="caret"></i></span>
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
                                <li><a href="admin_register.php"><i class="fa fa-angle-double-right"></i>Create User</a></li>
                                <li><a href="manage_user.php"><i class="fa fa-angle-double-right"></i> Manage User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-folder"></i> <span>Password Reset</span> <small class="badge pull-right bg-green">new</small>
                            </a>
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
                        Dashboard
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                             <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="contact.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-edit fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div>New Books Uploaded!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                          <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <div>About ECE</div>
                                    </div>
                                </div>
                            </div>
                            <a href="about.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-md-7 connectedSortable">
                            <!-- quick email widget -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-envelope"></i>
                                    <h3 class="box-title">Quick Email</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer clearfix">
                                    <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-md-5 connectedSortable">

                            <!-- Calendar -->
                                    <div class="box box-solid bg-green-gradient">
<div class="box-header ui-sortable-handle" style="cursor: move;">
<i class="fa fa-calendar"></i>
<h3 class="box-title">Calendar</h3>
<div class="pull-right box-tools">
<div class="btn-group">
<button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bars"></i>
</button>
<ul class="dropdown-menu pull-right" role="menu">
<li>
<a href="#">View calendar</a>
</li>
</ul>
</div>
<button class="btn btn-success btn-sm" data-widget="collapse">
<i class="fa fa-minus"></i>
</button>
<button class="btn btn-success btn-sm" data-widget="remove">
<i class="fa fa-times"></i>
</button>
</div>
</div>
<div class="box-body no-padding">
<div id="calendar" style="width: 100%">
<div class="datepicker datepicker-inline">
<div class="datepicker-days" style="display: block;">
<table class="table table-condensed">
<thead>
<tr>
<th class="prev" style="visibility: visible;"><<</th>
<th class="datepicker-switch" colspan="5">September 2014</th>
<th class="next" style="visibility: visible;">>></th>
</tr>
<tr>
<th class="dow">Su</th>
<th class="dow">Mo</th>
<th class="dow">Tu</th>
<th class="dow">We</th>
<th class="dow">Th</th>
<th class="dow">Fr</th>
<th class="dow">Sa</th>
</tr>
</thead>
<tbody>
<tr>
<td class="old day">31</td>
<td class="day">1</td>
<td class="day">2</td>
<td class="day">3</td>
<td class="day">4</td>
<td class="day">5</td>
<td class="day">6</td>
</tr>
<tr>
<td class="day">7</td>
<td class="day">8</td>
<td class="day">9</td>
<td class="day">10</td>
<td class="day">11</td>
<td class="day">12</td>
<td class="day">13</td>
</tr>
<tr>
<td class="day">14</td>
<td class="day">15</td>
<td class="day">16</td>
<td class="day">17</td>
<td class="day">18</td>
<td class="day">19</td>
<td class="day">20</td>
</tr>
<tr>
<td class="day">21</td>
<td class="day">22</td>
<td class="day">23</td>
<td class="day">24</td>
<td class="day">25</td>
<td class="day">26</td>
<td class="day">27</td>
</tr>
<tr>
<td class="day">28</td>
<td class="day">29</td>
<td class="day">30</td>
<td class="new day">1</td>
<td class="new day">2</td>
<td class="new day">3</td>
<td class="new day">4</td>
</tr>
<tr>
<td class="new day">5</td>
<td class="new day">6</td>
<td class="new day">7</td>
<td class="new day">8</td>
<td class="new day">9</td>
<td class="new day">10</td>
<td class="new day">11</td>
</tr>
</tbody>
<tfoot>
<tr>
<th class="today" colspan="7" style="display: none;">Today</th>
</tr>
<tr>
<th class="clear" colspan="7" style="display: none;">Clear</th>
</tr>
</tfoot>
</table>
</div>
<div class="datepicker-months" style="display: none;">
<table class="table table-condensed">
<thead>
<tr>
<th class="prev" style="visibility: visible;">«</th>
<th class="datepicker-switch" colspan="5">2014</th>
<th class="next" style="visibility: visible;">»</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="month">Jan</span>
<span class="month">Feb</span>
<span class="month">Mar</span>
<span class="month">Apr</span>
<span class="month">May</span>
<span class="month">Jun</span>
<span class="month">Jul</span>
<span class="month">Aug</span>
<span class="month">Sep</span>
<span class="month">Oct</span>
<span class="month">Nov</span>
<span class="month">Dec</span>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th class="today" colspan="7" style="display: none;">Today</th>
</tr>
<tr>
<th class="clear" colspan="7" style="display: none;">Clear</th>
</tr>
</tfoot>
</table>
</div>
<div class="datepicker-years" style="display: none;">
<table class="table table-condensed">
<thead>
<tr>
<th class="prev" style="visibility: visible;">«</th>
<th class="datepicker-switch" colspan="5">2010-2019</th>
<th class="next" style="visibility: visible;">»</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="year old">2009</span>
<span class="year">2010</span>
<span class="year">2011</span>
<span class="year">2012</span>
<span class="year">2013</span>
<span class="year">2014</span>
<span class="year">2015</span>
<span class="year">2016</span>
<span class="year">2017</span>
<span class="year">2018</span>
<span class="year">2019</span>
<span class="year new">2020</span>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th class="today" colspan="7" style="display: none;">Today</th>
</tr>
<tr>
<th class="clear" colspan="7" style="display: none;">Clear</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
                                </div><!-- /.box-body -->
                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
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



    </body>

</html>
 <?php
           include 'admin_footer.php';
     ?>