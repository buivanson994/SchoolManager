<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Quản lý sinh viên</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/MyStyle.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet"/>
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">Sơn <span class="lite">Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                        <span class="username">Chào bạn phan văn hoàn</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i>Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon_mail_alt"></i>Hộp thư đến</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="icon_key_alt"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="index.html"><i class="icon_house_alt"></i>
                        <div>Trang chủ</div>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Sinh viên</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li class="item-menu"><a href="SinhVien.php">
                                <div class="menuleft">Quản lý</div>
                            </a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_desktop"></i>
                        <span>Khoa</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li class="item-menu" id="ThemKhoa">
                            <div class="menuleft">Thêm khoa</div>
                        </li>
                        <li class="item-menu" id="">
                            <div class="menuleft">Quản lý</div>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_documents_alt"></i>
                        <span>Lớp</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li class="item-menu" id="ThemLop">
                            <div class="menuleft">Thêm lớp</div>
                        </li>
                        <li class="item-menu" id="QuanLyLop">
                            <div class="menuleft">Quản lý</div>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_calendar"></i>
                        <span>Môn học</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li class="item-menu" id="ThemMonHoc">
                            <div class="menuleft">Thêm môn học</div>
                        </li>
                        <li class="item-menu" id="QuanLyMonHoc">
                            <div class="menuleft">Quản lý</div>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_pencil-edit"></i>
                        <span>Thông báo</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li class="item-menu" id="ThemThongBao">
                            <div class="menuleft">Thêm thông báo</div>
                        </li>
                        <li class="item-menu" id="QuanLyThongBao">
                            <div class="menuleft">Quản lý</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- side menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row noidung">
                <div class="col-md-12">
                    <div id="Content">
                        <?php
                        ob_start();
                        require "lib/dbcon.php";
                        require "lib/quantri.php";
                        ?>
                        <link href="css/MyStyle.css" rel="stylesheet">
                        <div class="row">
                            <h2>Quản lý sinh viên</h2>
                        </div>
                        <div class="row">
                            <table class="table table-striped table-bordered table-hover " style="text-align: center;">
                                <tr>
                                    <td>id</td>
                                    <td>Họ tên</td>
                                    <td>Năm sinh</td>
                                    <td>Giới tính</td>
                                    <td>Quên quán</td>
                                    <td>Lớp</td>

                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#addStudent" id="btnAdd">
                                            Thêm
                                        </button>
                                    </td>
                                </tr>
                                <?php
                                $result = ListSinhVien();
                                if ($result->num_rows > 0) :
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) :?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= $row['date_bith'] ?></td>
                                            <td><?= $row['sex'] ?></td>
                                            <td><?= $row['home_town'] ?></td>
                                            <td><?= $row['TenLop'] ?></td>
                                            <td>
                                                <button class="btn btn-primary btnedit" button="Sua">Sửa</button>

                                                <button id="btnThemSinhVien" class="btn btn-primary btnedit"
                                                        button="Xoa">Xóa
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </section>
    <div class="modal fade" id="addStudent" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form id="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">id</label>
                            <input type="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">id</label>
                            <input type="id" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">id</label>
                            <input type="id" class="form-control" id="">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" id="save">Save</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<
<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js"></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/MyJquery.js"></script>
<script src="js/jquery.validate.min.js"></script>
</body>
</html>


