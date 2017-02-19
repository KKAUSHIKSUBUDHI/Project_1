<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://maps.googleapis.com/maps/api/js"></script>
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
				<li>
					<a href="appointment.php">appointment</a>
				</li>
				<li>
					<a href="sos.php">sos emergency</a>
				</li>
				<li class="selected">
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
				<h2>contact</h2>
				<b><a href="#">visit our bhubaneswar office</a></b>
								<!-- Add Google Maps -->
				<div id="googleMap" style="height:400px;filter:grayscale(50%);-webkit-filter:grayscale(30%);"></div>
				<script>
					var myCenter = new google.maps.LatLng(20.254657,85.799662);
					function initialize() {
					    var mapProp = {
					    center: myCenter,
					    zoom: 16,
					    scrollwheel: false,
					    draggable: true,
					    mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
					var marker = new google.maps.Marker({
					    position: myCenter,
					});
					marker.setMap(map);
					}
					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
				<form action="index.php">
					<br><b>send us a message</b><br><br><br>
					<input type="text" name="fname" id="fname" placeholder="Name" autocomplete="off">
					<input type="text" name="email" id="email" placeholder="Email Addess" autocomplete="off">
					<select name="offices" autocomplete="off">
						<option>Choose Clinic Office</option>
						<option>Bhubaneswar ITER office</option>
					</select>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here...." autocomplete="off"></textarea>
					<input type="submit" name="send" id="send" value="send message">
				</form>
			</div>
			<div id="sidebar">
				<div class="contact">
					<h3>contact information</h3>
					<ul class="first">
						<li class="office">
							<b>bhubaneswar office</b><span>Maxknee, ITER square, <br>Jagmohan Nagar, Bhubaneswar, Odisha, 751030</span>
						</li>
						<li class="telephone">
							0674-2350713
						</li>
						<li class="telephone">
							876-368-5158
						</li>
						<li class="telephone">
							943-718-2313
						</li>
						<li class="email">
							<a href="#">maxkneebhubaneswar@gmail.com</a>
						</li>
					</ul>
				</div>
				<div>
					<h3>office hours:</h3>
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
