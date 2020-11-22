
<?php
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'hotels'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = mysqli_connect('127.0.0.1', $user, $password, $database);


$sql = "SELECT * FROM hotels WHERE HotelID = 3";
$result = mysqli_query($mysqli, $sql);

$row = $result->fetch_assoc();
$hotel_ID = $row["HotelID"];
$hotel_rating = $row["Rating"];
$price = $row["Price/Night"];

echo $hotel_ID . $hotel_rating . $price;

?>