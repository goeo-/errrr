<head>
	<link rel="stylesheet" href="https://raw.githubusercontent.com/hbang/iOS-7-CSS/master/ios7.min.css">
	<style>
		input {
			border: 0;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
		}
		button{
			-webkit-appearance: none;
			background: transparent;
			border: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	<h2>Password Protected Package</h2>
	<div id="div"> <!-- div that js modifies -->
		<form id="form">
			<ul>
				<li>
					<label>
						<strong>Username</strong>
						<input type="text" name="username" />
					</label>
				</li>
				<li>
					<label>
						<strong>Password</strong>
						<input type="password" name="password" id="password" />
					</label>
				</li>
				<li>
					<input type="submit" name="submit" role="button" value="Log In" />
				</li>
			</ul>
		</form>
	</div>
	<script type="text/javascript">
		window.addEventListener("load", function () {
			function sendData() {
				var XHR = new XMLHttpRequest();
				var FD  = new FormData(form);
				XHR.addEventListener("load", function(event) {
				if(event.target.responseText == "success"){
					document.getElementById("div").innerHTML = "<ul><li><p>&#10003; You have successfully authorized. You can download the package now.</p></li></ul>";
				}
				else if(event.target.responseText == "nope"){
					document.getElementById("div").innerHTML = "<ul><li><p>&#10006; Wrong username and/or password</p></li></ul>";
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
	<script src="https://raw.githubusercontent.com/hbang/iOS-7-CSS/master/ios7.min.js"></script>
<?php //iframe
if(isset($_GET['iframe'])){
	echo('<iframe frameborder="0" width="100%" height="500" target="_top" src="'.$_GET['iframe'].'"></iframe>');
}
?>
</body>
