<!DOCTYPE html>
<html lang="en">
<head>

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


	<h2>Avoid the wait! Order ahead of time!</h2>
	<form action="sendmail.php" method="post" name="contact_form" id="contact_form">
		<fieldset>
        	<legend>Customer Information</legend>
            <label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" required><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" required><br>
        	<label for="email">Email Address:</label>
        	<input type="email" name="email" id="email" required><br>
        	<label for="verify">Verify Email:</label>
        	<input type="email" name="verify" id="verify" required autocomplete="off"><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="999-999-9999" required><br>
		</fieldset>
		<fieldset>
    		<legend>Order Info</legend>
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" required><br>
			<label for="message">Message:</label>
			<textarea id="message" name="message" rows="4" placeholder="What would you like to order?" required></textarea>
		</fieldset>
		<fieldset id="buttons">
			<legend>Submit</legend>
			<label>&nbsp;</label>
			<input type="submit" id="submit" value="Send Email">
			<input type="reset" id="reset" value="Reset"><br>
		</fieldset>
	</form>
</main>

	<footer>
		<p><a href=""><i class="far fa-envelope"></i></a> | <a href=""><i class="fab fa-facebook-f"></i></a> | <a href=""><i class="fab fa-twitter"></i></a></p>
	</footer>
</body>
</html>
