<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 10]> <html lang="en" class="ie10"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <!--add responsive layout support-->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--include favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/fav.ico">
    <!--fonts include-->


























    {{ HTML::style('/assets/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('/assets/bootstrap/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('/assets/bootstrap/css/bootstrap-fileupload.css') }}
    {{ HTML::style('/assets/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('/assets/css/style.css') }}
    {{ HTML::style('/assets/css/style_responsive.css') }}
    {{ HTML::style('/assets/css/style_default.css') }}
    {{ HTML::style('/assets/fancybox/source/jquery.fancybox.css') }}
    {{ HTML::style('/assets/gritter/css/jquery.gritter.css') }}
    {{ HTML::style('/assets/uniform/css/uniform.default.css') }}
    {{ HTML::style('/assets/chosen-bootstrap/chosen/chosen.css') }}
    {{ HTML::style('/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}
    {{ HTML::style('/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css') }}
    {{ HTML::style('/assets/data-tables/DT_bootstrap.css') }}
    {{ HTML::style('/assets/bootstrap-colorpicker/css/colorpicker.css') }}
    {{ HTML::style('/assets/bootstrap-timepicker/compiled/timepicker.css') }}
    {{ HTML::style('/assets/bootstrap-datepicker/css/datepicker.css') }}
    {{ HTML::style('/assets/bootstrap-daterangepicker/daterangepicker.css') }}
    {{ HTML::style('/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}
    {{ HTML::style('/assets/jqvmap/jqvmap/jqvmap.css') }}


    @yield('head')
</head>

<body class="fixed-top">
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner">
<div class="container-fluid">
<!-- BEGIN LOGO -->
<a class="brand" href="index.html">
    <img src="/assets/img/logo.png" alt="yes" />
</a>

    <a class="brand" href="index.html" style="float: right;margin-right: 100px;">
        <img src="/assets/img/salva-logo-for-yes-sys.png" alt="" />
    </a>


<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="arrow"></span>
</a>
<!-- END RESPONSIVE MENU TOGGLER -->
<div class="top-nav">
<!-- BEGIN QUICK SEARCH FORM -->
<!-- END QUICK SEARCH FORM -->
<!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="nav pull-right" id="top_menu">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- END NOTIFICATION DROPDOWN -->
        <!-- BEGIN INBOX DROPDOWN -->
        <!-- END INBOX DROPDOWN -->

        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- END USER LOGIN DROPDOWN -->
   <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="dropdown">




              <!--  <a class="" href="index.html">
                    <img src="/assets/img/salva-logo-for-yes-sys.png" alt="Conquer" />
                </a>-->
            </a>

        </li>
        <!-- END USER LOGIN DROPDOWN -->
    </ul>



    <!-- END TOP NAVIGATION MENU -->
</div>
</div>
</div>
<!-- END TOP NAVIGATION BAR -->
</div>


<div id="container" class="row-fluid">
<!-- BEGIN SIDEBAR -->
<div id="sidebar" class="nav-collapse collapse">








    <!-- END INBOX DROPDOWN -->

    <!-- END USER LOGIN DROPDOWN -->

    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown" style="float: left;list-style-type: none">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/assets/img/web-user-icons.png" />

            <b class="caret"></b>
        </a>

        @if(Auth::check())


        <ul class="dropdown-menu" >

            <li><a href="#"><i class="icon-user"></i>{{Auth::user()->lastname}}</a></li>

            @if(Auth::user()->admin == 1)
            <li>{{ HTML::link('admin/categories', 'تعریف خدمات') }}</li>
            <li>{{ HTML::link('admin/products', 'تعریف محصولات') }}</li>


            @endif

            <li><a href="users/signout"><i class="icon-key"></i> خروج</a></li>

        </ul>

        @else
        <ul class="dropdown-menu">
            <li><a href="users/signin"><i class="icon-key"></i> ورود</a></li>
            </ul>

        @endif




    </li>
    <!-- END USER LOGIN DROPDOWN -->
















<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
        <form class="navbar-search visible-phone">
            <input type="text" class="search-query" placeholder="Search" />
        </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->



    <ul>
        <li class="active">
            <a href="/">
                <i class="icon-home"></i> {{trans('greeting.Dashboard')}}
            </a>
        </li>
        @if(Auth::check())
        @if(Auth::user()->admin == 1)
        <li><a class="" href="/customer"><i class="icon-table"></i> {{trans('greeting.customers')}}</a></li>
        @endif
        @endif
        <li><a class="" href="/fund"><i class="icon-table"></i> {{trans('greeting.fund')}}</a></li>
     <!--   <li><a class="" href="grids.html"><i class="icon-th"></i> Grids & Portlets</a></li>
        <li><a class="" href="charts.html"><i class="icon-bar-chart"></i> Visual Charts</a></li>-->
<!--        <li class="has-sub">
            <a href="javascript:;" class="">
                <i class="icon-map-marker"></i> Maps
                <span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a class="" href="maps_google.html"> Google Maps</a></li>
                <li><a class="" href="maps_vector.html"> Vector Maps</a></li>
            </ul>
        </li>
-->    <!--    <li><a class="" href="calendar.html"><i class="icon-ok"></i> Calendar</a></li>
        <li><a class="" href="gallery.html"><i class="icon-camera"></i> Gallery</a></li>-->



                <li><a class="users/signin" href="login.html"><i class="icon-user"></i>  {{trans('greeting.LoginPage')}}</a></li>



    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<div id="body">
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div id="widget-config" class="modal hide">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>Widget Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here will be a configuration form</p>
    </div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN STYLE CUSTOMIZER-->
        <div id="styler" class="hidden-phone">
            <i class="icon-cog"></i>
							<span class="settings">
							<span class="text">Style:</span>
							<span class="colors">
							<span class="color-default" data-style="default">
							</span>
							<span class="color-grey" data-style="grey">
							</span>
							<span class="color-navygrey" data-style="navygrey">
							</span>
							<span class="color-red" data-style="red">
							</span>
							</span>
							<span class="layout">
							<label class="hidden-phone">
                                <input type="checkbox" class="header" checked value="" />Sticky Header
                            </label><br />
							<label><input type="checkbox" class="metro" value="" />Metro Style</label>
							<span class="space5"></span>
							<a class="btn fancybox-button" data-rel="fancybox-button" title="Conquer Large Desktop Preview" href="assets/img/demo/desktop.png"><i class="icon-eye-open"></i> Screenshots</a>
							<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Notebook Preview" href="assets/img/demo/notebook.png"></a>
							<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Tablet Preview" href="assets/img/demo/tablet.png"></a>
							<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Phone Preview" href="assets/img/demo/phone.png"></a>
							</span>
							</span>
        </div>
        <!-- END STYLE CUSTOMIZER-->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            @yield('title')
            <small><!--statistics and more--></small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/">{{trans('greeting.Dashboard')}}</a> <span class="divider">/</span>
            </li>
            <li><a href="#">

                    @yield('test')

                </a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->

    @yield('main-area')

<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>


<!-- BEGIN FOOTER -->
<div id="footer">
    2014 &copy; Yamna. Admin Dashboard Template.
    <div class="span pull-right">
        <span class="go-top"><i class="icon-arrow-up"></i></span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->






{{ HTML::script('/assets/js/jquery-1.8.2.min.js') }}
{{ HTML::script('/assets/jQuery-slimScroll/jquery-ui-1.9.2.custom.min.js') }}
{{ HTML::script('/assets/bootstrap/js/bootstrap-fileupload.js') }}
{{ HTML::script('/assets/jQuery-slimScroll/slimScroll.min.js') }}
{{ HTML::script('/assets/fullcalendar/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('/assets/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('/assets/js/jquery.blockui.js') }}
{{ HTML::script('/assets/js/jquery.cookie.js') }}
<!-- ie8 fixes -->
<!--[if lt IE 9]>
{{ HTML::script('/assets/js/excanvas.js') }}
{{ HTML::script('/assets/js/respond.js') }}
<![endif]-->
{{ HTML::script('/assets/chosen-bootstrap/chosen/chosen.jquery.min.js') }}
{{ HTML::script('/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}
{{ HTML::script('/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}
{{ HTML::script('/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js') }}

{{ HTML::script('/assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
{{ HTML::script('/assets/bootstrap-timepicker/js/bootstrap-timepicker.js') }}




{{ HTML::script('/assets/jqvmap/jqvmap/jquery.vmap.js' ) }}
{{ HTML::script('/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}
{{ HTML::script('/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}
{{ HTML::script('/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}
{{ HTML::script('/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}
{{ HTML::script('/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}
{{ HTML::script('/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}
{{ HTML::script('/assets/jquery-knob/js/jquery.knob.js') }}
{{ HTML::script('/assets/flot/jquery.flot.js') }}
{{ HTML::script('/assets/flot/jquery.flot.resize.js') }}
{{ HTML::script('/assets/js/jquery.peity.min.js') }}
{{ HTML::script('/assets/gritter/js/jquery.gritter.js') }}
{{ HTML::script('/assets/uniform/jquery.uniform.min.js') }}
{{ HTML::script('/assets/js/jquery.pulsate.min.js') }}
{{ HTML::script('/assets/js/jsfile.js') }}
{{ HTML::script('/assets/bootstrap-daterangepicker/date.js') }}
{{ HTML::script('/assets/bootstrap-daterangepicker/daterangepicker.js') }}
{{ HTML::script('/assets/fancybox/source/jquery.fancybox.pack.js') }}
{{ HTML::script('/assets/js/app.js') }}


{{ HTML::script('/assets/js/tableExport.js') }}

{{ HTML::script('/assets/js/jquery.base64.js') }}

{{ HTML::script('/assets/js/html2canvas.js') }}
{{ HTML::script('/assets/js/jspdf/libs/sprintf.js') }}
{{ HTML::script('/assets/js/jspdf/jspdf.js') }}
{{ HTML::script('/assets/js/jspdf/libs/base64.js') }}













<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins






        document.getElementById("coworker").style.visibility =  "hidden";

        App.init();
    });
</script>



<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>






