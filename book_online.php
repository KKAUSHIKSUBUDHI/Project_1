<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Appointment | Maxknee</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<div>
				<a href="index.php" class="logo"><img src="images/logo.png" width="90px" height="80px"  alt="clinic logo"></a>
				<span1 class="tagline1"><b>"maxknee"</b></span1>
				<span class="tagline">.......maximizing mobility</span>
				<span2 class="tagline2">Conatct : <span2>
				<span2 class="tagline3">0674-2350713  </span2>
				<span2 class="tagline4">876-368-5158  </span2>
			</div>
			<ul>
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="about.php">about</a>
				</li>
				<li>
					<a href="doctor.php">our doctor</a>
				</li>
				<li>
					<a href="services.php">services</a>
				</li>
				<li class="selected">
					<a href="appointment.php">appointment</a>
				</li>
				<li>
					<a href="sos.php">sos emergency</a>
				</li>
				<li>
					<a href="contact.php">contact</a>
				</li>
				<li>
					<a href="blog.php">blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<form action="index.php">
					<br><b>Orthopedic Appointment :</b><br><br><br>
					<input type="text" name="fname" id="fname" placeholder="First Name" autocomplete="off">
					<input type="text" name="lname" id="lname" placeholder="Last Name" autocomplete="off">
					<input type="text" name="contact" id="contact" placeholder="Contact" autocomplete="off">
					<input type="text" name="dob" id="dob" placeholder="Date of Birth" autocomplete="off">
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here...." autocomplete="off"></textarea>
					<input type="submit" name="send" id="send" value="send message">
				</form>
			</div>
			<div id="sidebar">
				<div>
					<h3>Office hours : </h3>
					<span>Monday - Sunday (except friday) <span>5:00 ps.m. - 9:30 p.m.</span></span> <span>Physiotherapy (All days) <span>8:00 a.m. - 1:30 p.m.</span><span>3:30 p.m. - 9:30 p.m.</span></span>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.php">Maxknee</a>
			</p>
			<?php include 'downnav.php'; ?>
			<div>
				<?php include 'stay_connected.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
