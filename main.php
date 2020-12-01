<?php session_start() ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ce3b8b35e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/styles.css">
    <style>
        .logintext{
            font-family: 'Roboto', sans-serif;
            color: #292f36;
            padding-top: 1%;
            margin-top: 0%;
        }
        .logintext a{
            font-family: 'Roboto', sans-serif;
            color: #ff8811;
            padding-top: 1%;
            margin-top: 0%;
        }
    </style>
</head>


<body>
    <?php
    $user = 'root';
    $password = ''; //To be completed if you have set a password to root
    $database = 'hotels'; //To be completed to connect to a database. The database must exist.
    $port = NULL; //Default must be NULL to use default port
    $mysqli = mysqli_connect('127.0.0.1', $user, $password, $database);
    ?>
    <div class="titleCard">
        <?php
        if (isset($_SESSION["userid"])) {
            echo "<p class=\"logintext\" >Welcome to Hotelite " . $_SESSION["userName"] . " <a href=\"src/includes/logout.inc.php\">logout</a> </p>";
        } else {
            echo "<p class=\"logintext\" ><a href=\"login.php\">Login</a></p>";
        }
        ?>

        <div class="container">

            <div>
                <h1 class="mainTitle">Hotelite</h1>
            </div>
            <div class="searchCombo">
                <form action="">
                    <input id="search" name="search" type="text" placeholder="What are we looking for?">
                    <i class="fas fa-search" style="color:#f4d06f ;"></i>

                </form>
            </div>
        </div>
        <!--  <div class="column2" >
            <h1 class="mainTitle">Hotelite</h1>
        </div>
       <div class="column2">
            <div id="searchCombo">
                <form action="" autocomplete="on">
                    <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input
                        id="search_submit" value="Search" type="submit">
                </form>
            </div>
       </div>
-->
    </div>
    <div class="trendingArea">
        <div class="row">
            <div class="column">
                <h3>Trending</h3>
            </div>
            <div class="column">
                <?php
                $hotel_id = 1;

                $sql = "SELECT * FROM hotels WHERE HotelID = $hotel_id";
                $result = mysqli_query($mysqli, $sql);


                $row = $result->fetch_assoc();
                $hotel_name = $row["Hotel Name"];
                $hotel_rating = $row["Rating"];
                $price = $row["Price/Night"];

                ?>
                <a href="hotelsite.php?id=1">
                    <div class="card">
                        <div class="side-crop">
                            <img src="src/img/1-1.jpg" alt=<?php echo "\"" . $hotel_name . "\"" ?> style="width: 100%;">
                        </div>
                        <div class="conatiner">
                            <p class="title"><?php echo $hotel_name ?></p>
                            <p class="priceNight"><span class="priceTag">$<?php echo $price ?></span> per night</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <?php
                $hotel_id = 2;

                $sql = "SELECT * FROM hotels WHERE HotelID = $hotel_id";
                $result = mysqli_query($mysqli, $sql);


                $row = $result->fetch_assoc();
                $hotel_name = $row["Hotel Name"];
                $hotel_rating = $row["Rating"];
                $price = $row["Price/Night"];

                ?>
                <a href="hotelsite.php?id=2">
                    <div class="card">
                        <div class="side-crop">
                            <img src="src/img/2-1.jpg" alt="SKARNERGAMING" style="width: 100%;">
                        </div>
                        <div class="conatiner">
                            <p class="title"><?php echo $hotel_name ?></p>
                            <p class="priceNight"><span class="priceTag">$<?php echo $price ?></span> per night</p>
                        </div>
                    </div>
                </a>
            </div>
            <a href="hotelsite.php?id=3">
                <div class="column">
                    <?php
                    $hotel_id = 3;

                    $sql = "SELECT * FROM hotels WHERE HotelID = $hotel_id";
                    $result = mysqli_query($mysqli, $sql);


                    $row = $result->fetch_assoc();
                    $hotel_name = $row["Hotel Name"];
                    $hotel_rating = $row["Rating"];
                    $price = $row["Price/Night"];

                    ?>
                    <div class="card">
                        <div class="side-crop">
                            <img src="src/img/3-1.jpg" alt="SKARNERGAMING" style="width: 100%;">
                        </div>
                        <div class="conatiner">
                            <p class="title"><?php echo $hotel_name ?></p>
                            <p class="priceNight"><span class="priceTag">$<?php echo $price ?></span> per night</p>
                        </div>
                    </div>
            </a>
        </div>
    </div>


    </div>
</body>

</html>