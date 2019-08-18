<?php
namespace TymFrontier;
require_once __DIR__ . "/base.init.php";
require_once "/Users/SIRLOUIS/Sites/GIT/tymfrontiers-private/php-golink-admin/src/Admin.php";
$database->closeConnection();
$database = new \TymFrontiers\MySQLDatabase (MYSQL_SERVER,MYSQL_ADMIN_USERNAME,MYSQL_ADMIN_PASS,MYSQL_ADMIN_DB);

// $admin = new GoLink\Admin([
//   "user" => "190814149516",
//   "work_group" => "EDITOR",
//   "active" => true,
//   "access" => [
//     "/",
//     "/setting"
//   ]
// ],"project.7os.io");
$admin = new GoLink\Admin("190814149516","project.7os.io");

echo " <tt> <pre>";
\print_r($admin);
echo "</pre></tt>";
