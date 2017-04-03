<?php

    session_start();

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Temple-needs.org - ทำบุญวัดกับของที่จำเป็น
        </title>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport"/>
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
            </script>
            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
            </script>
            <link href="assets/css/main.css" rel="stylesheet"/>
            <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
            <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        </link>
    </head>
    <body>
        <!-- Header -->
        <div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <!---Login-->

                <?php

                if($_SESSION["login_user"] == null){

                ?>

                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label>
                            username:
                        </label>
                        <input class="form-control" type="text" name="username"/>
                    </div>
                    <div class="form-group">
                        <label>
                            password:
                        </label>
                        <input class="form-control" type="password" name="password"/>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <br>
                                    <button type="submit" value="login">
                                        Sign in
                                    </button>
                                </br>       
                            </div>
                        </div>
                    </div>
                </form>

                <?php

                } else {

                    echo "Welcome ".$_SESSION["login_user"];

                    ?>
                    <input type="button" value="Register" onclick="location.href = 'signup.php';">
                    <input type="button" value="Logout" onclick="location.href = 'logout.php';">
                    <?php
                }

                ?>
                
            </div>
        </div>
        <div id="logo-container">
            <img src="images/header.png">
            </img>
        </div>
    </body>
</html>
<header id="header">
    <h1>
        ทำบุญกับสิ่งของที่จำเป็น
    </h1>
    <p>
        Currently 310 Wats are active having updated their requirements in the last week.
        <br/>
        If the Wat you visit is not on the list please provide the URL Below
    </p>
</header>
<form action="temple_detail.php" class="form-search" id="s" method="GET">
    <div class="input-append col-md-10">

        <select class="form-control" name="templename">
            <?php
            
                require_once("mysql.php");

                $result = $mysqli->query("SELECT * FROM temple");

                while($data = $result->fetch_assoc()){
            ?>
            <option value="<?php echo $data["temple_id"]; ?>">
                <?php
                    echo $data["name"];
                ?>
            </option>
            <?php

                }

            ?>
        </select>
    </div>
    <div class="col-md-2">
        <button type="submit">
            Go
        </button>
    </div>

</form>
<!-- Footer -->
<footer id="footer">
    <ul class="copyright">
        <li>
            www.temples-needs.org
        </li>
    </ul>
</footer>
<!-- Scripts -->
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js">
</script>
