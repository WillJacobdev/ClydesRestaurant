<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Example contact form">
    <meta name="keywords" content="VICOM-128, HTML Contact Form">
	<title>Contact Form</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/contact.css">
  <link rel="stylesheet" href="theme.css">

    <!--Font Awesome Import Links-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/regular.css" integrity="sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/brands.css" integrity="sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">

  <!--Google Font Import Links-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Jura|Saira+Semi+Condensed" rel="stylesheet">

  <!--Meta-->
  <meta charset="UTF-8">
  <meta name="description" content="Clyde's Resturaunt">
  <meta name="keywords" content="Resturaunt, food, drink, bar">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Contact Form</title>
    <link rel="shortcut icon" href="../images/icon.ico">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/contact.css">
  <link rel="stylesheet" href="../theme.css">



    <!--<link rel="stylesheet" href="styles/normalize.css">
  <link rel="stylesheet" href="styles/contact.css">-->
</head>

<body>

<header>
    
    <h1>Clyde's Restaurant <span>1234 Main St. Milwaukee WI 414-555-0000</span></h1>

</header>

<main>

  <nav id="PCMenu">
    
    <ul>
      <li><a href="../index.html"> Home </a></li>
      <li><a href="../breakfast.html"> Breakfast </a></li>
      <li><a href="../lunch.html"> Lunch </a></li>
      <li><a href="../dinner.html"> Dinner </a></li>
      <li><a href="../drinks.html"> Drinks </a></li>
      <li><a href="../hours.html"> Hours & Location </a></li>
      <li><a href="php/index.html"> Order Online </a></li>
    </ul>

  </nav>

  <nav id="MobileMenu">
    <ul>
      <li><a href="#">&#9776;</a>
        <ul id="Mobileul">
      <li><a href="../index.html"> Home </a></li>
      <li><a href="../breakfast.html"> Breakfast </a></li>
      <li><a href="../lunch.html"> Lunch </a></li>
      <li><a href="../dinner.html"> Dinner </a></li>
      <li><a href="../drinks.html"> Drinks </a></li>
      <li><a href="../hours.html"> Hours & Location </a></li>
      <li><a href="php/index.html"> Order Online </a></li>
          
        </ul>
      </li>
    </ul>
  </nav>


	    <h1>Email Confirmation</h1>
		<fieldset>
        	<legend>Customer Information</legend>
    		<label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
        	<label for="email">Email Address:</label>
        	<input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
        	<label for="verify">Verify Email:</label>
        	<input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
		</fieldset>
		<fieldset>
    		<legend>Order Info</legend>
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
			<label for="Message">Message:</label>
			<textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
		</fieldset>
<!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
<h2>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "webbwj@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $phone = $_REQUEST['phone']; //Request phone that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
  //Combine first name and last name, adding a space in between
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Phone: " . $phone . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us! Your order will be ready shortly."; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>

</h2>
</main>

  <footer>
    <p><a href=""><i class="far fa-envelope"></i></a> | <a href=""><i class="fab fa-facebook-f"></i></a> | <a href=""><i class="fab fa-twitter"></i></a></p>
  </footer>
</body>
</html>
