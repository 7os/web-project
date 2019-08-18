<?php
require_once __DIR__ . "/.constant.php";
// Project-wide generic variables
// MySQL Database instance
$database = new TymFrontiers\MySQLDatabase (MYSQL_SERVER,MYSQL_GUEST_USERNAME,MYSQL_GUEST_PASS,MYSQL_BASE_DB);
$db =& $database;

$ugroup_rank = [
  "QUEST"       => 0,
  "USER"        => 0,
  "ANALYST"     => 1,
  "ADVERTISER"  => 2,
  "MODERATOR"   => 3,
  "EDITOR"      => 4,
  "ADMIN"       => 5,
  "DEVELOPER"   => 6,
  "SUPERADMIN"  => 7,
  "OWNER"       => 14
];
