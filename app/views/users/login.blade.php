<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Yamna LOGIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    {{ HTML::style('/assets/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('/assets/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('/assets/css/style.css') }}
    {{ HTML::style('/assets/css/style_responsive.css') }}
    {{ HTML::style('/assets/css/style_default.css') }}
    {{ HTML::style('/assets/uniform/css/uniform.default.css') }}

</head>


<body>
<!-- BEGIN LOGO -->
<div id="logo" class="center">
    <img src="assets/img/logo.png" alt="logo" class="center" />
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="index.html">
        <p class="center">Enter your username and password.</p>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span><input id="input-username" type="text" placeholder="Username" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span><input id="input-password" type="password" placeholder="Password" />
                </div>
                <div class="block-hint pull-right">
                    <a href="javascript:;" class="" id="forget-password">Forgot Password?</a>
                </div>
                <div class="clearfix space5"></div>
            </div>
        </div>
        <input type="submit" id="login-btn" class="btn btn-block btn-inverse" value="Login" />
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
        <p class="center">Enter your e-mail address below to reset your password.</p>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="Email" />
                </div>
            </div>
            <div class="space10"></div>
        </div>
        <input type="button" id="forget-btn" class="btn btn-block btn-inverse" value="Submit" />
    </form>
    <!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div id="login-copyright">
    2012 &copy; Conquer. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS -->
{{ HTML::script('/assets/js/jquery-1.8.2.min.js') }}
{{ HTML::script('/assets/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('/assets/js/jquery.blockui.js') }}
{{ HTML::script('/assets/js/app.js') }}
<script>
    jQuery(document).ready(function() {
        App.initLogin();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>










