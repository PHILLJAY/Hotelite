<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/styles.css">
    <style>
        body {
            background-color: #fff8f0;
        }

        .login-div {
            height: 800px;
        }
    </style>
</head>

<body>
    <div class="login-div">
        <div class="logo"></div>
        <div class="title">Hotelite</div>
        <div class="sub-title">register</div>
        <div class="fields">
            <form action="src/includes/registration.inc.php" method="POST">
                <div class="username"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z">
                        </path>
                    </svg><input type="username" name="username" class="user-input" placeholder="username" required />
                </div>
                <div class="email"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z">
                        </path>
                    </svg><input type="username" name="email" class="user-input" placeholder="email" required />
                </div>
                <div class="password"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z">
                        </path>
                    </svg><input type="password" name="pass1" class="pass-input" placeholder="password" required />
                </div>
                <div class="confirmpassword"> <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z">
                        </path>
                    </svg><input type="password" name="pass2" class="pass-input" placeholder="confirm password" required />
                </div>
                <button name="submit" class="signin-button">Register</button>
            </form>
        </div>
        <div class="link">
            <a href="login.php">Login</a> or <a href="main.php">Return home</a>
        </div>

        <div class="error">
            <?php
             if (isset($_GET["error"])) {
                if (($_GET["error"]) == "emptyinput") {
                    echo "<p>Please Fill in all fields!</p>";
                } else if (($_GET["error"]) == "invalidusername") {
                    echo "<p>Please input a valid username.</p>";
                } else if (($_GET["error"]) == "invalidemail") {
                    echo "<p>Please input a valid email.</p>";
                }  else if (($_GET["error"]) == "passwordsfail") {
                    echo "<p>Error: passwords do not match</p>";
                } else if (($_GET["error"]) == "usernametaken") {
                    echo "<p>Username or email taken</p>";
                } else if (($_GET["error"]) == "stmtfailed") {
                    echo "<p>Error: Something went <strong>wrong</strong>.</p>";
                } else if (($_GET["error"]) == "none") {
                    echo "<p>You have succesfully signed up!</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>