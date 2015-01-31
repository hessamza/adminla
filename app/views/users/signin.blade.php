<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>hessam | Login Options - Login Form 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->

{{ HTML::style('/assets/global/plugins/font-awesome/css/font-awesome.min.css' ) }}
{{ HTML::style('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css' ) }}
{{ HTML::style('/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css' ) }}
{{ HTML::style('/assets/global/plugins/uniform/css/uniform.default.css' ) }}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('/assets/admin/pages/css/login-rtl.css' ) }}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
{{ HTML::style('/assets/global/css/components-rtl.css' ) }}
{{ HTML::style('/assets/global/css/plugins-rtl.css' ) }}
{{ HTML::style('/assets/admin/layout/css/layout-rtl.css' ) }}
{{ HTML::style('/assets/admin/layout/css/themes/darkblue-rtl.css' ) }}
{{ HTML::style('/assets/admin/layout/css/custom-rtl.css' ) }}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="../../assets/admin/layout/img/logo-big.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	 {{ Form::open(array('url'=>'users/signin', 'method' => 'post','class'=>'login-form')) }}


		<h3 class="form-title">Sign In</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>

		  @if(Session::has('message'))

        <div class="alert alert-danger display-hide">
        			<button class="close" data-close="alert"></button>
        			<span>
        			{{ Session::get('message') }} </span>
        		</div>

            @endif

		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			    {{ Form::text('username', null, array('class'=>'form-control form-control-solid placeholder-no-fix','id'=>'input-username', 'placeholder'=>'Username')) }}

		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
                            {{ Form::password('password', array('class'=>'form-control form-control-solid placeholder-no-fix','id'=>'input-password','placeholder'=>'Password')) }}


		</div>
		<div class="form-actions">
		 {{ Form::submit('ورود', array('class'=>'btn btn-success uppercase'))}}

			<label class="rememberme check">
			<input type="checkbox" name="remember" value="1"/>Remember </label>
			<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
		</div>
		<div class="login-options">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="social-icon-color facebook" data-original-title="facebook" href="#"></a>
				</li>
				<li>
					<a class="social-icon-color twitter" data-original-title="Twitter" href="#"></a>
				</li>
				<li>
					<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="#"></a>
				</li>
				<li>
					<a class="social-icon-color linkedin" data-original-title="Linkedin" href="#"></a>
				</li>
			</ul>
		</div>
		<div class="create-account">
			<p>
				<a href="/users/newaccount" id="register-btn" class="uppercase">Create an account</a>
			</p>
		</div>

{{ Form::close() }}
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	  {{ Form::open(array('url'=>'users/create', 'class'=>'register-form')) }}

	<!-- END REGISTRATION FORM -->
</div>
<div class="copyright">
	 2014 © hessam. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>


{{ HTML::script('/assets/global/plugins/respond.min.js') }}
{{ HTML::script('/assets/global/plugins/excanvas.min.js') }}
<![endif]-->
{{ HTML::script('/assets/global/plugins/jquery.min.js') }}
{{ HTML::script('/assets/global/plugins/jquery-migrate.min.js') }}
{{ HTML::script('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('/assets/global/plugins/jquery.blockui.min.js') }}
{{ HTML::script('/assets/global/plugins/jquery.cokie.min.js') }}
{{ HTML::script('/assets/global/plugins/uniform/jquery.uniform.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ HTML::script('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('/assets/global/scripts/metronic.js') }}
{{ HTML::script('/assets/admin/layout/scripts/layout.js') }}
{{ HTML::script('/assets/admin/layout/scripts/demo.js') }}
{{ HTML::script('/assets/admin/pages/scripts/login.js') }}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Login.init();
	Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>