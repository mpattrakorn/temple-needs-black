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
                <div class="row page-header">
                    <h2>
                        Registration Form.
                    </h2>
                </div>
                <!---Login-->
                <form action="signup-process.php" method="POST">
                    <div class="form-group">
                        <label>
                            username:
                        </label>
                        <input class="form-control" name="username" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label>
                            password:
                        </label>
                        <input class="form-control" name="password" type="password" minlength="6" required/>
                    </div>
                    <div class="form-group">
                        <label>
                            re-enter password:
                        </label>
                        <input class="form-control" name="repassword" type="password" minlength="6" required/>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <br>
                                <button type="submit">
                                    Register
                                </button>
                            </br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
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
