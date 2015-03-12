<html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
	<link rel="stylesheet" href="https://cydia.saurik.com/cytyle/style-544525394dbceaf72540236a6b5edce899482bda.css">	
	<script type="text/javascript" src="https://cydia.saurik.com/cytyle/style-5f60a497be66e3165611f3130a326a1bf73d5781.js"></script>
</head>

	<script type="text/javascript">
		window.addEventListener("load", function () {
			function sendData() {
				var XHR = new XMLHttpRequest();
				var FD  = new FormData(form);
				XHR.addEventListener("load", function(event) {
				if(event.target.responseText == "success"){
					document.getElementById("div").innerHTML = "<panel><fieldset><div><p>&#10003; You have successfully authorized. You can download the package now.</p></div></fieldset></panel>";
				}
				else if(event.target.responseText == "nope"){
					document.getElementById("div").innerHTML = "<panel><fieldset><div><p>&#10006; Wrong username and/or password. Please try again later.</p></div></fieldset></panel>";
				}
				});
				XHR.addEventListener("error", function(event) {
				alert("error, oops");
				});
				XHR.open("POST", "auth.php");
				XHR.send(FD);
			}
			var form = document.getElementById("form");
			form.addEventListener("submit", function (event) {
				event.preventDefault();
				sendData();
			});
		});
	</script>

	<style>
		input[type="submit"] {
			background:none;
		}
		.cytyle-flat input[type="submit"] {
			padding-right:170px;
		}
		.cytyle-faux input[type="submit"] {
			padding-right:140px;
		}
		.cytyle-flat input[type="submit"] {
			color:#007aff;
		}
		input[type="text"], input[type="password"] {
			width:110px;
		}
		panel > p {
			font-size:14px;
			margin:9px 15px 9px 15px;
		}
		.cytyle-flat panel > p {
			color:#6d6d72;
		}
		.cytyle-faux panel > p{
			text-align:center;
			color:#4d4d70;
		}
		iframe {
			margin:0;
		}
		.cytyle-flat fieldset.half, .cytyle-flat fieldset.half {
			margin-bottom:-10px;
		}
		.cytyle-flat fieldset.auth {
			margin-top:-10px;
		}
		#div {
			margin-bottom:-7px;
		}
	</style>

<body class="pinstripe">

	<div id="div"> <!-- div that js modifies -->
	<form id="form">

		<panel>
			<label>Password Protected Package</label>
			<fieldset class="half"><a><div><div><label><input type="text" name="username" placeholder="Username"/></label></div></div></a></fieldset>
			<fieldset class="more"><a><div><div><label><input type="password" name="password" id="password" placeholder="Password"/></label></div></div></a></fieldset>
			<fieldset class="auth"><a href target="_self"><div><div><label><input type="submit" name="submit" role="button" value="Authenticate" /></label></div></div></a></fieldset>
			<p>If you don't have access, but you do want to help with testing this package, please email me at email@example.com.</p>
		</panel>

	</form>
	</div>

</body>

<?php //iframe
if(isset($_GET['iframe'])){
	echo('<iframe frameborder="0" width="100%" height="auto" target="_top" src="'.$_GET['iframe'].'"></iframe>');
}
?>
</html>
