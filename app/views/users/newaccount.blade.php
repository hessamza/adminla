





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




		 @if($errors->has())

        <div class="alert alert-danger">

        			<span>
        			  <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>


        			 </span>
        		</div>

            @endif


	  {{ Form::open(array('url'=>'users/create', 'class'=>'register-form')) }}


		<h3>Sign Up</h3>
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Full Name</label>
			{{ Form::text('firstname', null, array('class'=>'form-control placeholder-no-fix','id'=>'input-username', 'placeholder'=>'firstname')) }}

		</div>

			<div class="form-group">
        			<label class="control-label visible-ie8 visible-ie9">Full Name</label>
        			{{ Form::text('lastname', null, array('class'=>'form-control placeholder-no-fix','id'=>'input-username', 'placeholder'=>'lastname')) }}

        		</div>

		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
		          {{ Form::text('email', null, array('class'=>'form-control placeholder-no-fix','id'=>'input-username', 'placeholder'=>'email')) }}


		</div>


		<p class="hint">
			 Enter your account details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username</label>
		       {{ Form::text('Username', null, array('class'=>'form-control placeholder-no-fix','id'=>'input-username', 'placeholder'=>'Username')) }}
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			{{ Form::text('password', null, array('class'=>'form-control placeholder-no-fix','id'=>'input-username', 'placeholder'=>'password')) }}
        </div>

	<div class="form-group">
    			<label class="control-label visible-ie8 visible-ie9">Country</label>

                			{{ Form::select('locID', array('1' => 'superUser', '2' => 'general') , 'default', array('class' => 'form-control')) }}


    		</div>
		<div class="form-actions">
			<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
			 {{ Form::submit('ثبت نام', array('class'=>'btn btn-success uppercase pull-right'))}}

		</div>
		{{Form::close()}}

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












