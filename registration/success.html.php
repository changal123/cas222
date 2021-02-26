
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

		<h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Tour: <?php echo htmlspecialchars($tour, ENT_QUOTES, 'UTF-8'); ?><br>
                  First Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Last Name: <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Tour Date: <?php echo htmlspecialchars($mydate, ENT_QUOTES, 'UTF-8'); ?><br>
                  Number of participants: <?php echo htmlspecialchars($mygroup, ENT_QUOTES, 'UTF-8'); ?><br>
                  Sensitivities: <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>

	</main>

	<div id="footer-outer">

		<?php include '../includes/footer.html.php'; ?>

	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../scripts/bootstrap.min.js"></script>

</body>

</html>