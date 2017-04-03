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
        <div id="logo-container">
            <img src="images/watdonjun.jpg">
            </img>
        </div>
        <header id="header">
        </header>
        <?php 
    		$templeId = $_GET["templename"];
   		 	require_once("mysql.php");
    		$resultTemple = $mysqli->
        					query("SELECT * FROM temple where temple_id = '$templeId'");
		?>
        <div class="panel text-center" style="padding: 10px;">
            <span style="color:brown; font-weight: bold; font-size: 30px;">
                <?php 
           			 $temple = $resultTemple-> fetch_assoc();
            		echo $temple["name"];
        		?>
            </span>
        </div>
        <h5>
            ปรับปรุงครั้งล่าสุด 15/02/2560
        </h5>
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="text-primary">
                    รายการที่วัดขาดแคลน
                </span>
            </div>
            <?php
    
    		$resultNeed= $mysqli->query("SELECT * FROM temple_need where temple_id = '$templeId'");
    
    		while($data = $resultNeed->fetch_assoc()){
    ?>
            <div class="panel-body">
                <span class="text-success">
                    <?php echo $data["item_need"]; ?>
                </span>
            </div>
            <?php
    }
    ?>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="text-primary">
                    รายการที่มีเพียงพอ
                </span>
            </div>
            <?php
    
    			$resultNoNeed= $mysqli->query("SELECT * FROM temple_no_need where temple_id = '$templeId'");
    
    			while($data = $resultNoNeed->fetch_assoc()){ 

    		?>

            <div class="panel-body">
                <span class="text-success">
                    <?php echo $data["item_no_need"]; ?>
                </span>
            </div>

            <?php
    			}
   			 ?>
        </div>
    
         <input type="button" value="Back" onclick="location.href = 'index.php';">

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
    </body>
</html>
