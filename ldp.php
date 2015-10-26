<html>
<header>
<meta charset="utf-8">


<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 


<link rel="stylesheet" type="text/css" href="css/features/main.css" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <style type="text/css">
	.alert-box {
		color:#555;
		border-radius:10px;
		font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
		padding:10px 36px;
		margin:10px;
	}
	.alert-box span {
		font-weight:bold;
		text-transform:uppercase;
	}
	.success {
		background:#e9ffd9 url('img/success.png') no-repeat 10px 25%;
		border:1px solid #a6ca8a;
	}
	.warning {
		background:#fff8c4 url('img/warning.png') no-repeat 10px 50%;
		border:1px solid #f2c779;
	}
	
	.error {
		background:#ffecec url('img/error.png') no-repeat 10px 50%;
		border:1px solid #f5aca6;
	}
	

    </style>


	<title>Nisum</title>
	<?php include_once "lang.es.php" ?>
	<?php include "header.php" ?>
</header>
<body>

	<div id="wrapper" style="width:100%; text-align:center">
		<img id="yourimage" src="img/h1b1.jpg"/>
	</div>
	
	<br>
	
    <div id="boton" style="width:100%; text-align:center">
  
		<p style="text-align:center"><a id="apply" style="font-family : trebuchet ms" class="btn btn-primary btn-lg " onClick="muestraFormulario()" role="button">Apply</a></p>
    
	</div>
	
	
<div id="formulario" style="width:800px; margin:0 auto;display:none">

	<h2 style="font-family : trebuchet ms;color: #2cabe1;">Contact us</h2>
	
		<div  style="font-family: corbelregular;display:none" class="alert-box success"><span>Success: </span>Thanks. We'll be in contact with you !</div>
		<div  style="font-family: corbelregular;display:none" class="alert-box warning"><span>Warning: </span>Please complete all the fields</div>
		<div  style="font-family: corbelregular;display:none" class="alert-box error"><span>Error: </span>Bad captcha, try again.</div>
	
	<form class="form-horizontal" method="POST" name="contactform" action="contact-form-handler.php"> 
		<p>

	<label class="control-label" style="font-family: corbelregular"  for='program'>Program:</label>
	<span class="form-control"  >H1B1</span>

	</p>
	<p>

	<label class="control-label" style="font-family: corbelregular"  for='name'>Your Name:</label> 
	<input class="form-control" type="text" name="name" id="name">
	</p>
	<p>
	<label class="control-label" style="font-family: corbelregular" for='email'>Email Address:</label> 
	<input class="form-control" type="text" name="email" id="email"> <br>
	</p>
	<p>
	<label class="control-label" style="font-family: corbelregular" for='message'>Comments:</label> 
	<textarea class="form-control" name="message" id="message"></textarea>
	</p>
	
<?php

require_once('captcha/recaptchalib.php');
$publickey = "6LfjZg8TAAAAAMcpZXyxcaHdD_q7YVyjPf8gMxpS";
$privatekey = "6LfjZg8TAAAAAD3UXSmdq7IXs9pbX_v65Dc_g5DX";

$resp = null;
$error = null;

echo recaptcha_get_html($publickey, $error);
?>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" style="font-family : trebuchet ms" class="btn btn-primary btn-lg" value="Send" onClick="PreProcess()">
	

	
	</form>

</div>

<script>

	function muestraFormulario(){
	
		$("#formulario").show();
		document.getElementById("apply").scrollIntoView();
	
	}

	
	 function scrollIntoView(eleID) {
	   var e = document.getElementById(eleID);
	   if (!!e && e.scrollIntoView) {
		   e.scrollIntoView();
	   }
	}
	
	
	function PreProcess() {
	

	
										$(".success").hide();
										$(".warning").hide();
										$(".error").hide();
										
										var name = $("#name").val();
										var email = $("#email").val();
										var message = $("#message").val();
										
										var recaptcha_challenge_field = $("#recaptcha_challenge_field").val();
										var recaptcha_response_field = $("#recaptcha_response_field").val();
										
										
										if (name == null || name == "") {
													
											$(".warning").show(); 
											return false;
										}
										
										if (email == null || email == "") {
											$(".warning").show();
											return false;
										}
										
										if (message == null || message == "") {
											$(".warning").show();
											return false;
										}
										
										if (recaptcha_response_field == null || recaptcha_response_field == "") {
											$(".warning").show();
											return false;
										}
	
	
						 $.ajax({
					  url: 'checkCaptcha.php',
					  type: 'post',
					  data: {'recaptcha_challenge_field': recaptcha_challenge_field, 'recaptcha_response_field': recaptcha_response_field},
					  success: function(data, status) {
	
							if (data == "OK") {
	
	
	
	

										
										
										 $.ajax({
										  url: 'sendEmailH1b.php',
										  type: 'post',
										  data: {'name': name, 'email': email, 'message': message},
										  success: function(data, status) {

												
												window.location.href = "http://www.nisumlatam.com/thankyou.php";
												
											}
										  }
										); // end ajax call
	
							} else {
							
										    $(".error").show();
											$("#recaptcha_reload").click();
											return false;
							}

						}
					  }
					); // end ajax call
	
	
	
	}
	
</script>	
<?php include "footer.php" ?>
	
	
</body>
</html>
