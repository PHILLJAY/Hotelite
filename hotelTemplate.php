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
</head>

<body>

    <?php
    $user = 'root';
    $password = ''; //To be completed if you have set a password to root
    $database = 'hotels'; //To be completed to connect to a database. The database must exist.
    $port = NULL; //Default must be NULL to use default port
    $mysqli = mysqli_connect('127.0.0.1', $user, $password, $database);
    ?>
    <script src="" async defer></script>
    <div class="headerTitle">
        <a href="main.html">
            <h1 id="logoClick">Hotelite</h1>
        </a>
        <div class="aboutText"><a href="about.html">
                <p>about</p>
            </a></div>
    </div>
    <div class="titleCard big">
        <div class="container">
            <div class="imageHolder">
                <img src="src/img/1-1.jpg" alt="SKARNERGAMING" style="width: 100%;">
            </div>
            <div class="coolInfo">
                <p class="hotelTitle">
                    <?php
                    $sql = "SELECT * FROM hotels";


                    ?>
                </p>
                <p class="perNight"><span class="priceTag">$399</span> Per Night </p>
                <span></span>
                <ul class="hotelDetails">
                    <li>Rating: 5 Stars</li>
                    <li>City: Oshawa</li>
                </ul>
                <div class="reviews">
                    <h3>Reviews:</h3>
                    <p>Great boutique hotel. Convenient location, fresh and tasty breakfast, nice views!</p>
                    <p>Clean and nice rooms. Dark sketchy road leading to entrance could be improved. Drug addicts and
                        homeless hanging around that road each morning/night.</p>
                    <p>Great location and nice little hotel. Breakfast was good, staff friendly and they upgraded my
                        room without asking so that was great. You won't go wrong here.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>