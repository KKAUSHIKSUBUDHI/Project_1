<?php
	session_start();
	if(empty($_SESSION["mailid"]))
	{
		header("location:sign_in.php");
		exit(0);
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact | Maxknee</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<div>
				<span>Experience life to the fullest.</span>
				<a href="index.html" class="logo"><img src="images/" height="123px" wiidth="200px" alt="clinic logo"></a>
				<span class="tagline">....maximizing mobility</span>
			</div>
			<?php include 'upnav.php'; ?>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<form action="blog_image_update.php" method="POST" name="myform" enctype="multipart/form-data" onsubmit="return validateform()">
					<script type="text/javascript">
						onload=function(){
						var e=document.getElementById("refreshed");
						if(e.value=="no")e.value="yes";
						else{e.value="no";location.reload();}
						}
					</script>
          <p><b>Select an image for your article : </b></p>
					<input type="file" name="image" autocomplete="off">
					<input type="submit" name="update" id="send" value="update">
				</form>
			</div>
			<div id="sidebar">
				<div class="contact">
					<h2>Note :</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">Maxknee</a>
			</p>
			<?php include 'signout_downnav.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
