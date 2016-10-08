<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/app.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>CSE</title>

    <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css"/>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

    <script src="assets/js/modernizr.min.js"></script>
    <script src="http://data.egreen.io/chanaka/xdomain.min.js" slave="http://localhost:8080/web/index.jsp"></script>

</head>
<body class="fixed-left">

<div id="wrapper">

<!--     Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="#/" class="logo"><i class="md md-equalizer"></i> <span>CSE Alumni</span> </a>
            </div>
        </div>

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li >
                        <a class="waves-effect waves-primary"><i
                                class="md md-poll"></i><span> Alumni </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="app/directory.php">Directory</a></li>
                            <li><a href="app/addMember.php">Add member</a></li>

                        </ul>
                    </li>

                </ul>

                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->

</div>


<div class="index_content" ></div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/angular/angular.min.js"></script>
<script src="assets/js/angular/angular-route.min.js"></script>

<script src="app/main.js"></script>
<script src="app/urls.js"></script>

<script src="app/controller/home_controller.js"></script>

<script src="app/controller/order_controller.js"></script>
<script src="app/service/order_service.js"></script>
<script src="app/service/orderDetail_service.js"></script>

<script src="app/controller/customer_controller.js"></script>
<script src="app/service/customer_service.js"></script>

<script src="app/controller/product_controller.js"></script>
<script src="app/service/product_service.js"></script>

<script src="app/controller/region_controller.js"></script>
<script src="app/service/region_service.js"></script>

<script src="app/controller/user_controller.js"></script>
<script src="app/service/user_service.js"></script>



<!-- Plugins  -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/js/toastr.min.js"></script>

<!-- Moment  -->
<script src="assets/plugins/moment/moment.js"></script>

<!-- Counter Up  -->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- Sweet Alert  -->
<script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

<!-- flot Chart -->
<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

<!-- circliful Chart -->
<script src="assets/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- skycons -->
<script src="assets/plugins/skyicons/skycons.min.js" type="text/javascript"></script>

<!-- Todos app  -->
<script src="assets/pages/jquery.todo.js"></script>

<!-- Chat App  -->
<script src="assets/pages/jquery.chat.js"></script>

<!-- Page js  -->
<script src="assets/pages/jquery.dashboard.js"></script>

<!-- Custom main Js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>


</body>
</html>
