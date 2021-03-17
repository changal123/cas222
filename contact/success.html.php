<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Events</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet/less" href=../style/style.less>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <?php include '../includes/header.html.php'; ?>
            <?php include '../includes/nav.html.php'; ?>
            <main>
                <h1>Success!</h1>
                <p>A cheerful member of our staff will be in contact with you soon:<br>
                  Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Question: <?php echo htmlspecialchars($myquestion, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.html.php'; ?>
        </div>
    </body>
</html>