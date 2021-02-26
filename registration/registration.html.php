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

			<?php include '../includes/nav.html.php'; ?>

		</header>
	</div>


	<main class="wrapper">

		<div id="registration">
			<h1>Registration</h1>
			<form method="post" action=" ">
				<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />

				<label for="myname">Full Name:</label>
				<input type="text" name="myname" id="myname" required>

				<label for="myage">Age:</label>
				<input type="text" name="myage" id="myage" required>

				<label for="myrole">Role:</label>
				<select size="1" name="myrole" id="myrole" required>
					<option>Choose Your Role</option>
					<option value="athlete">Athlete</option>
					<option value="volunteer">Volunteer</option>
				</select>

				<label for="myphone">Phone:</label>
				<input type="tel" name="myphone" id="myphone" required>

				<label for="myemail">Email:</label>
				<input type="email" name="myemail" id="myemail" required>

				<label for="myename">Emergency Contact Name:</label>
				<input type="text" name="myename" id="myename" required>

				<label for="myephone">Emergency Contact Phone Number:</label>
				<input type="tel" name="myephone" id="myephone" required>

				<label for="mygender">Gender:</label>
				<select size="1" name="mygender" id="mygender" required>
					<option>Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other/non-binary">Other / Non-binary</option>
				</select>

				<label for="mytsize">T-Shirt Size:</label>
				<select size="1" name="mytsize" id="mytsize" required>
					<option>Choose Your Size</option>
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>

				<label for="mysatregistration">Saturday Events Registering For:</label>
				<select size="1" name="mysatregistration" id="mysatregistration" required>
					<option>Choose Your Event</option>
					<option value="long course">Long Course - $240</option>
					<option value="olympic">Olympic - $110</option>
					<option value="10K">10k - $50</option>
					<option value="half marathon">Half Marathon - $75</option>
					<option value="sprint">Sprint - $90</option>
					<option value="try-a-tri">Try-a-Tri - $65</option>
				</select>

				<label for="mysunregistration">Sunday Events Registering For:</label>
				<select size="1" name="mysunregistration" id="mysunregistration" required>
					<option>Choose Your Event</option>
					<option value="long course">Long Course - $240</option>
					<option value="olympic">Olympic - $110</option>
					<option value="10K">10k - $50</option>
					<option value="half marathon">Half Marathon - $75</option>
					<option value="sprint">Sprint - $90</option>
					<option value="try-a-tri">Try-a-Tri - $65</option>
				</select>

				<label for="myaccommodations">Any Special Accommodations Needed:</label>
				<textarea name="myaccommodations" id="myaccommodations" rows="2" cols="20"></textarea>

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