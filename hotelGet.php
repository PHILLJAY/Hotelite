
<?php
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'hotels'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysqli = mysqli_connect('127.0.0.1', $user, $password, $database);


if(empty($_GET['id'])){
$hotel_id = 3;
} else{
    $hotel_id = $_GET['id'];
}

$sql = "SELECT * FROM hotels WHERE HotelID = $hotel_id";
$result = mysqli_query($mysqli, $sql);

$row = $result->fetch_assoc();
$hotel_name = $row["Hotel Name"];
$hotel_rating = $row["Rating"];
$price = $row["Price/Night"];


echo $hotel_id . " " . $hotel_rating . " " . $hotel_name . " " . $price;

?>