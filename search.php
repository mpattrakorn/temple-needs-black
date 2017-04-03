<?php

  require_once("mysql.php");

  $res = $mysqli-> query(SELECT*FROM temples);

  $result = $res->fetch_assoc();

?>