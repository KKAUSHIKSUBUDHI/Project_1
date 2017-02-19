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
				<a href="index.php" class="logo"><img src="images/" height="123px" wiidth="200px" alt="clinic logo"></a>
				<span class="tagline">....maximizing mobility</span>
			</div>
			<?php include 'upnav.php'; ?>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<form action="blog_update.php" method="POST" name="myform" onsubmit="return validateform()">
					<script type="text/javascript">
						onload=function(){
						var e=document.getElementById("refreshed");
						if(e.value=="no")e.value="yes";
						else{e.value="no";location.reload();}
						}
					</script>
          <p><b>Update your Blog : </b></p>
				  <input type="text" name="topic" enctype="multipart/form-data" placeholder="Topic" autocomplete="off">
					<input type="text" name="author" placeholder="name of the author" autocomplete="off">
          <select name="article_type">
						<option>Choose article type</option>
						<option value="Health Factor">Health Factor</option>
            <option value="Medical Eduction">Medical Eduction</option>
            <option value="Preventive Tips">Preventive Tips</option>
            <option value="Others">Others</option>
					</select>
          <textarea name="content" cols="15" rows="5" placeholder="Put your content" autocomplete="off"></textarea>
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
				Copyright &copy; <a href="index.php">Maxknee</a>
			</p>
			<?php include 'signout_downnav.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
