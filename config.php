<?php

define("DB_SERVER", "remotemysql.com:3306");
define("DB_USERNAME", "mJf7ojK9ud");
define("DB_PASSWORD", "DwG2ZsVM3l");
define("DB_NAME", "mJf7ojK9ud");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn == false){
  dir("Error: mysqli connection error");
}
?>
