<?php

require_once 'config.php';

$err = '';

if ($_POST) {
if (@$_POST['p4ss'] == $admin_pass) {

	@session_start();

	$_SESSION['admlogin'] = md5($admin_pass);

	
	// header('Location: index.php');
	echo '<script type="text/javascript">window.location.replace("index.php");</script>';


}else{

	$err = '<span style="color: #e50914; font-size:10px;">Password error.</span>';

	echo '<script>alert("Password error, try again");</script>';

}

}




?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Hello <?php echo $admin_user; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/icon/ico.ico"> 

<style type="text/css">
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
}
html{box-sizing:border-box;font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent;}
*,::after,::before{box-sizing:inherit;}
body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;}
button,input{-ms-touch-action:manipulation;touch-action:manipulation;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;}
button::-moz-focus-inner{padding:0;border-style:none;}
.p-t-13{padding-top:13px;}
.p-t-62{padding-top:62px;}
.p-b-9{padding-bottom:9px;}
.p-b-33{padding-bottom:33px;}
.p-b-53{padding-bottom:53px;}
.p-l-110{padding-left:110px;}
.p-r-110{padding-right:110px;}
.m-t-17{margin-top:17px;}
.flex-w{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;-ms-flex-wrap:wrap;-o-flex-wrap:wrap;flex-wrap:wrap;}
.flex-sb{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;justify-content:space-between;}
*{margin:0px;padding:0px;box-sizing:border-box;}
body,html{height:100%;font-family:Poppins-Regular, sans-serif;}
input{outline:none;border:none;}
input:focus{border-color:transparent!important;}
input:focus::-webkit-input-placeholder{color:transparent;}
input:focus:-moz-placeholder{color:transparent;}
input:focus::-moz-placeholder{color:transparent;}
input:focus:-ms-input-placeholder{color:transparent;}
input::-webkit-input-placeholder{color:#555555;}
input:-moz-placeholder{color:#555555;}
input::-moz-placeholder{color:#555555;}
input:-ms-input-placeholder{color:#555555;}
button{outline:none!important;border:none;background:transparent;}
button:hover{cursor:pointer;}
.txt1{font-family:Montserrat-SemiBold;font-size:16px;color:#555555;line-height:1.5;}
.limiter{width:100%;margin:0 auto;}
.container-login100{width:100%;min-height:100vh;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;padding:15px;background-position:center;background-size:cover;background-repeat:no-repeat;}
.wrap-login100{width:680px;background:#fff;border-radius:10px;position:relative;}
.login100-form{width:100%;}
.login100-form-title{width:100%;display:block;font-family:Montserrat-Medium;font-size:39px;color:#555555;line-height:1.2;text-align:center;}
.wrap-input100{width:100%;position:relative;background-color:#f7f7f7;border:1px solid #e6e6e6;border-radius:10px;}
.input100{font-family:Poppins-Regular;color:#333333;line-height:1.2;font-size:18px;display:block;width:100%;background:transparent;height:60px;padding:0 20px;}
.focus-input100{position:absolute;display:block;width:calc(100% + 2px);height:calc(100% + 2px);top:-1px;left:-1px;pointer-events:none;border:1px solid #fc00ff;border-radius:10px;visibility:hidden;opacity:0;-webkit-transition:all 0.4s;-o-transition:all 0.4s;-moz-transition:all 0.4s;transition:all 0.4s;-webkit-transform:scaleX(1.1) scaleY(1.3);-moz-transform:scaleX(1.1) scaleY(1.3);-ms-transform:scaleX(1.1) scaleY(1.3);-o-transform:scaleX(1.1) scaleY(1.3);transform:scaleX(1.1) scaleY(1.3);}
.input100:focus + .focus-input100{visibility:visible;opacity:1;-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}
.container-login100-form-btn{width:100%;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;}
.login100-form-btn{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;justify-content:center;align-items:center;padding:0 20px;width:100%;height:60px;background-color:#e50914;border-radius:10px;font-family:Poppins-Medium;font-size:16px;color:#fff;line-height:1.2;-webkit-transition:all 0.4s;-o-transition:all 0.4s;-moz-transition:all 0.4s;transition:all 0.4s;position:relative;z-index:1;}
.login100-form-btn::before{content:"";display:block;position:absolute;z-index:-1;width:100%;height:100%;border-radius:10px;top:0;left:0;background:#a64bf4;background:-webkit-linear-gradient(45deg, #00dbde, #fc00ff);background:-o-linear-gradient(45deg, #00dbde, #fc00ff);background:-moz-linear-gradient(45deg, #00dbde, #fc00ff);background:linear-gradient(45deg, #00dbde, #fc00ff);opacity:0;-webkit-transition:all 0.4s;-o-transition:all 0.4s;-moz-transition:all 0.4s;transition:all 0.4s;}
.login100-form-btn:hover:before{opacity:1;}
.validate-input{position:relative;}
@media (max-width: 768px){
.wrap-login100{padding-left:60px;padding-right:60px;}
@media (max-width: 576px){
.wrap-login100{padding-left:15px;padding-right:15px;}
}
}

</style>
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../img/bg.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="post">
					

					<span class="login100-form-title p-b-53" style="padding-bottom: 10%;">
						Hello <span style="color: #e50914" ><?php echo $admin_user; ?></span>.
					</span>
					

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password :
						</span>

						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" name="p4ss" type="password">
						<span class="focus-input100"></span>
					</div>
					<?php echo $err; ?>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							LOGIN
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>






</body></html>