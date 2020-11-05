<html>
<header>

</header>

<body>
    <?php
    /*
* Change the value of $password if you have set a password on the root userid
* Change NULL to port number to use DBMS other than the default using port 3306
*
*/
    $user = 'root';
    $password = ''; //To be completed if you have set a password to root
    $database = 'hotels'; //To be completed to connect to a database. The database must exist.
    $port = NULL; //Default must be NULL to use default port
    $mysqli = mysqli_connect('127.0.0.1', $user, $password, $database);

    //Connects to the database, in this case the database is "hotels", the advantge of the database is that we can have multiple tables that hold different things
    //For this example, I use the table called "hotels" cause I named them the same and didnt know better, we can change that in the future.
    

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    else{
        echo '<p>Connection OK ' . $mysqli->host_info . '</p>';
        echo '<p>Server ' . $mysqli->server_info . '</p>';
        echo '<p>Initial charset: ' . $mysqli->character_set_name() . '</p>';
    }

    //connection checking stuff, if it does fail, it will say so, otherwise it prints out the server number and such

    $sql = "SELECT * FROM hotels"; //selects every column in the table from table hotels

    $result = mysqli_query($mysqli, $sql); //gets the result from the connected database, and the columns that we wanted

    if (mysqli_num_rows($result) > 0) {
        //output data of each row
    while($row = $result->fetch_assoc()) {//Prints out the data from each column and each row, this is more of a proof of concept rather than what we will be using.
        echo "<br> id: ". $row["HotelID"]. " - Name: ". $row["Hotel Name"]. " - Price: " . $row["Price/Night"] . " - Rating: " . $row["Rating"] . " - Review 1: " . $row["Review1"] . " - Review 2: ". $row["Review2"] . " - Review 3: " . $row["Review3"] . "<br>";
    }
    } else {
        echo "0 results";//if no results are there, print out that there is nothing
    }

    $sql = "SELECT * FROM hotels WHERE HotelID = 3"; //The same as above, however with the key difference of HotelID. Each hotel has an ID that is auto incrementing, so we can selected
    //the data that we want from one using its id rather than its name, makes it easier

    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["HotelID"]. " - Name: ". $row["Hotel Name"] . "<br>"; //after getting the row we want, we can use the data from the individual section to do our code
        }
        
    } else {
        echo "0 results";
    }

    //The code above is just a singlular version of the code below which is simplified
    //everytime you want to make a query, you must select the table and connection again
    // $sql and $result are required
    //followed by the 3rd line to get the row

    $sql = "SELECT * FROM hotels WHERE HotelID = 3";
    $result = mysqli_query($mysqli, $sql);
    $row = $result->fetch_assoc();

    echo "<br> id: " . $row["HotelID"] . "<br>";
    


    $mysqli->close(); //this closes our connection
    ?>
</body>

</html>