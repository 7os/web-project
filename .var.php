<?php
namespace TymFrontiers;
require_once "./.constant.php";
// Project-wide generic variables
// MySQL Database instance
$database = new MySQLDatabase (MYSQL_SERVER,MYSQL_GUEST_USERNAME,MYSQL_GUEST_PASS,MYSQL_BASE_DB);
$db =& $database;
