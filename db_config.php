<?php
// Create connection

error_reporting( E_ALL | E_STRICT ); 
ini_set( 'display_errors', 1 )

$fname =  $_POST['firstname'];
$minitial = $_POST['middle_initial'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$reservationdate = $_POST['start_date'];
$reservationend = $_POST['end_date'];
$cartype = $_POST['car_type'];
$carcolor = $_POST['color'];
$reservationid = 0000001

$con=mysqli_connect("gilfoildesigns.com","gilfoild_testdb","password1234","gilfoild_testdb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = mysqli_query($con,"INSERT INTO Reservations (FIRST NAME, MIDDLE INITIAL, LAST NAME, EMAIL, RESERVATION DATE, STREET, CITY, STATE, RESERVATION END, CAR TYPE, CAR COLOR, RESERVATION NUMBER)
VALUES ('$fname', '$minitial','$lname','$email','$reservationdate','$street','$city','$state','$reservationend','$cartype','$carcolor','reservationid$')");

mysql_query($sql) or die(mysql_error());

?>