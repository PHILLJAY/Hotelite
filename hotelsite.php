<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="src/slideshow.js"></script>
</head>

<body>
    <?php
    $user = 'root';
    $password = ''; //To be completed if you have set a password to root
    $database = 'hotels'; //To be completed to connect to a database. The database must exist.
    $port = NULL; //Default must be NULL to use default port
    $mysqli = mysqli_connect('127.0.0.1', $user, $password, $database);

    if (empty($_GET['id'])) {
        $hotel_id = 3;
    } else {
        $hotel_id = $_GET['id'];
    }

    $sql = "SELECT * FROM hotels WHERE HotelID = $hotel_id";
    $result = mysqli_query($mysqli, $sql);

    $row = $result->fetch_assoc();
    $hotel_name = $row["Hotel Name"];
    $hotel_rating = $row["Rating"];
    $price = $row["Price/Night"];
    $review1 = $row["Review1"];
    $review2 = $row["Review2"];
    $review3 = $row["Review3"];

    $sql = "SELECT * FROM hotels WHERE HotelID = $hotel_id";


    //echo $hotel_id . " " . $hotel_rating . " " . $hotel_name . " " . $price;

    ?>
    <script src="" async defer></script>
    <div class="headerTitle">
        <a href="main.php">
            <h1 id="logoClick">Hotelite</h1>
        </a>
        <div class="aboutText"><a href="about.html">
                <p>about</p>
            </a></div>
    </div>
    <div class="titleCard big">
        <div class="container">
         <div class="imageHolder">
                <img src=<?php echo "src/img/" . $hotel_id . "-1.jpg" ?> alt="SKARNERGAMING" style="width: 100%;">
            </div>
            <div class="coolInfo">
                <p class="hotelTitle">
                    <?php
                    echo $hotel_name;
                    ?>
                </p>
                <p class="perNight"><span class="priceTag">$<?php echo $price ?></span> Per Night </p>
                <span></span>
                <ul class="hotelDetails">
                    <li>Rating: <?php echo $hotel_rating; ?> Stars</li>
                    <li>City: Oshawa</li>
                </ul>
                <div class="reviews">
                    <h3>Reviews:</h3>
                    <p><?php echo $review1 ?></p>
                    <p><?php echo $review2 ?></p>
                    <p><?php echo $review3 ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>