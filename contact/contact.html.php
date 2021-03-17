<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<!-- Bootstrap core CSS -->
	<link href="../style/bootstrap.min.css" rel="stylesheet">

	<title>Ace in the Hole Multisport Events</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link href="../style/style.less" rel="stylesheet/less">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

</head>

<body>
	<div id="masthead">

		<header class="wrapper">

			<div id="company-logo">Ace in the Hole Multisport Events</div>

			<nav class="navbar navbar-default navbar-static-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="../index.php">Home</a></li>
						<li><a href="../information.php">Info</a></li>
						<li><a href="../packet.php">Packet</a></li>
						<li><a href="../faq.php">FAQ</a></li>
						<li><a href="../registration/index.php">Registration</a></li>
						<li><a href="contact/index.php">Contact</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</nav>

		</header>
	</div>


	<main class="wrapper">

		<div>
			<h1>Questions? We'd love to hear from you!</h1>
			<form method="post" action=" " id="inquiryForm">
				<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />

				<label for="myname">Name:</label>
				<input type="text" name="myname" id="myname">

				<label for="myemail">E-mail:</label>
				<input type="text" name="myemail" id="myemail">

				<label for="myquestion">Question:</label>
				<textarea form="inquiryForm" rows="10" cols="50" name="myquestion" id="myquestion"></textarea>

				<label for="myrole">Role:</label>
				<select size="1" name="myrole" id="myrole">
					<option>Select Role</option>
					<option value="athlete">Athlete</option>
					<option value="volunteer">Volunteer</option>
					<option value="interested party">Interested Party</option>
				</select>

				<input id="mysubmit" type="submit" value="Submit">
			</form>
		</div>

	</main>

	<div id="footer-outer">

		<?php include '../includes/footer.html.php'; ?>

	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>

</body>

</html>