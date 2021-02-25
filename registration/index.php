<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration

<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=achan933_ace', 'achan933_user', 'Mypassword!');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['name']) && empty($_POST['honeypot']))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
	$myname = $_POST['myname'];
	$myage = $_POST['myage'];
	$myrole = $_POST['myrole'];
	$myphone = $_POST['myphone'];
	$myemail = $_POST['myemail'];
	$myename = $_POST['myename'];
	$myephone = $_POST['myephone'];
	$mygender = $_POST['mygender'];
	$mytsize = $_POST['mytsize'];
	$mysatregistration = $_POST['mysatregistration'];
	$mysunregistration = $_POST['mysunregistration'];
	$myaccommodations = $_POST['myaccommodations'];
	

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registration SET
		  name = :name,
		  age = :age,
		  role = :role,
		  phone = :phone,
		  email = :email,
		  ename = :ename,
		  ephone = :ephone,
		  gender = :gender,
		  tsize = :tsize,
		  satregistration = :satregistration,
		  sunregistration = :sunregistration,
		  accommodations = :accommodations';
      $s = $pdo->prepare($sql);
	  $s->bindValue(':name', $_POST['tour']);
	  $s->bindValue(':fname', $_POST['myfname']);
	  $s->bindValue(':lname', $_POST['mylname']);
      $s->bindValue(':email', $_POST['myemail']);
	  $s->bindValue(':phone', $_POST['myphone']);
	  $s->bindValue(':date', $_POST['mydate']);
	  $s->bindValue(':participants', $_POST['mygroup']);
	  $s->bindValue(':allergies', $_POST['mycomments']);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted joke: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
	include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false
   
  } else {
		include 'registration.html.php'; //Modify this to include the initial file for this folder

	}
?>