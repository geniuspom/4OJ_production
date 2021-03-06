<?php
  use App\Http\Controllers\GetUser as GetUser;
  use App\Http\Controllers\LoginController as LoginController;
  use App\Http\Controllers\MainControllers\Check_user_permission as Check_user_permission;
?>
<?php
$root_url = dirname($_SERVER['PHP_SELF']);
$user_allow = ["1","2","4"];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4oj</title>

    <!-- Print CSS-->
    <link href="{{$root_url}}/public/css/print.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{{$root_url}}/public/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{$root_url}}/public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{$root_url}}/public/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{$root_url}}/public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{$root_url}}/public/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{$root_url}}/public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- datepicker CSS -->
    <link href="{{$root_url}}/public/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- datetimepicker CSS -->
    <link href="{{$root_url}}/public/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- jQuery UI -->
    <link href="{{$root_url}}/public/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">

    <!-- Tooltips -->
    <link href="{{$root_url}}/public/poshytip/tip-darkgray/tip-darkgray.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="{{$root_url}}/public/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Moment -->
    <script src="{{$root_url}}/public/js/Moment.js"></script>

    <!-- datepicker JavaScript -->
    <script src="{{$root_url}}/public/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{{$root_url}}/public/bootstrap-datepicker/locales/bootstrap-datepicker.th.min.js"></script>

    <!-- datetimepicker JavaScript -->
    <script src="{{$root_url}}/public/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script src="{{$root_url}}/public/poshytip/jquery.poshytip.js"></script>

    <script src="{{$root_url}}/public/js/jquery.confirm.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="no_print navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{$root_url}}">4oj</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right text-right">
                <li class="dropdown">
                    <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>-->
                    <!-- /.dropdown-messages -->
                <!--</li>-->
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>-->
                    <!-- /.dropdown-tasks -->
                <!--</li>-->
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>-->
                    <!-- /.dropdown-alerts -->
                <!--</li>-->
                <!-- /.dropdown -->
                <span style="color:#777777;padding:15px;">{{ GetUser::getuser(Auth::user()->id) }}</span>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{$root_url}}/user_profile"><i class="fa fa-user fa-fw"></i> ข้อมูลส่วนตัว</a>
                        </li>
                        @if (LoginController::checkpermission(3))
                        <li><a href="{{$root_url}}/admin"><i class="fa fa-gear fa-fw"></i> ผู้ดูแลระบบ</a>
                        </li>
                        @endif
                        <li class="divider"></li>
                        <li><a href="{{$root_url}}/logout"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                          </div>
                        </li>-->
                        <li>
                            <a href="{{$root_url}}"><i class="fa fa-dashboard fa-fw"></i> หน้าหลัก</a>
                        </li>
                        <li>
                            <a href="{{$root_url}}/event"><i class="fa fa-calendar fa-fw"></i> งานที่กำลังเปิดรับ</a>
                        </li>
                        @if (LoginController::checkpermission(2))
                        <li>
                            <a href="{{$root_url}}/reportrequestjob/null"><i class="fa fa-list-alt fa-fw"></i> รายงานคำร้องขอทำงาน</a>
                        </li>
                        <li>
                            <a href="{{$root_url}}/customer"><i class="fa fa-suitcase fa-fw"></i> รายชื่อลูกค้า</a>
                        </li>
                        <li>
                            <a href="{{$root_url}}/venue"><i class="fa fa-building fa-fw"></i> สถานที่จัดงาน</a>
                        </li>
                        <li>
                            <a href="{{$root_url}}/call_report"><i class="fa fa-phone fa-fw"></i> Call Report</a>
                        </li>
                        @endif
                        @if (Check_user_permission::check_user($user_allow))
                        <li>
                            <a href="{{$root_url}}/officepayment_report/null"><i class="fa fa-money fa-fw"></i> บันทึกค่าจ้างในออฟฟิศ</a>
                        </li>
                        <li>
                            <a href="{{$root_url}}/payment_report/null"><i class="fa fa-money fa-fw"></i> การจ่ายเงิน</a>
                        </li>
                        @endif
                        @if (LoginController::checkpermission(3))
                        <li>
                            <a href="{{$root_url}}/admin"><i class="fa fa-user fa-fw"></i> รายชื่อผู้สมัคร</a>
                        </li>
                        <li>
                            <a href="{{$root_url}}/sendemail"><i class="fa fa-envelope-o fa-fw"></i> ส่งอีเมล</a>
                        </li>
                        @endif
                        <!--<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                        </li>
                      -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        @yield('content')


        </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{$root_url}}/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{$root_url}}/public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--<script src="../4oj/public/bower_components/raphael/raphael-min.js"></script>
    <script src="../4oj/public/bower_components/morrisjs/morris.min.js"></script>
    <script src="../4oj/public/js/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="{{$root_url}}/public/dist/js/sb-admin-2.js"></script>

</body>

</html>
