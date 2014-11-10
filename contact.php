<?php session_start() ?>
<!DOCTYPE html><html lang = "en">
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet2.css">
	<title>Key In Car Rental - Contact Us</title>
	</head>
	<body>
<div id="header_container">
    <div id="header">
    <img src="img/smalllogo.png">
    </div>
</div>
<div id="nav">
<ul>
<li><a href="default.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="locations.html">Locations</a></li>
<li><a href="cars.html">Cars</a></li>
<li><a href="reserve.html">Reserve</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="deals.html">Specials</a></li>
</ul>
</div>
<div id="container">
    <div id="content">
    <div id="contact-form" class="clearfix">
    <h1>Get In Touch!</h1>
    <h2>Please fill out the form below and we will be in touch as soon as possible!</h2>
    <h2>Contact us</h2>
  <p>Fill out the form below.</p>
<form name="contactform" method="post" action="send_form_subscribe.php">
  <label for="first_name">First Name *</label>
  <input  type="text" name="first_name" maxlength="50" size="30">
  <label for="last_name">Last Name *</label>
  <input  type="text" name="last_name" maxlength="50" size="30">
  <label for="email">Email Address *</label>
  <input  type="text" name="email" maxlength="80" size="30"> 
  <label for="telephone">Telephone Number</label>
  <input  type="text" name="telephone" maxlength="30" size="30"> 
  <label for="comments">Comments *</label>
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
  <input type="submit" value="Submit">   <a href="send_email_form.php">Email Form</a>
</form>
</div>
<div id="map">
<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=620%20Michigan%20Avenue%20Northeast%2C%20Washington%2C%20DC%2C%20United%20States&key=AIzaSyAXMl4vTYQ3U1N_XEjXtyznzlYhq5QF4gU"></iframe>
 	</div>
    </div>
</div>
<div id="footer_container">
    <div id="footer">
        <p id="footer">Page created by: Austin, Max, Thomas, and Pat</p>
  		<p id="footer">Last Updated: May 4, 2014</p>
  		<p id="footer">Copyright Key in Car Rental Corporation</p>
    </div>
</div>
	</body>
</html>
