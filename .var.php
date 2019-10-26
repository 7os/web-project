<?php
require_once __DIR__ . "/.constant.php";
// Project-wide generic variables
// MySQL Database instance
if (!empty($session) && $session instanceof \TymFrontiers\Session) {
  if ($session->isLoggedIn() && (bool) PRJ_ENABLE_ACCESS_GROUP) {
    $db_user = "MYSQL_{$session->access_group}_USERNAME";
    $db_pass = "MYSQL_{$session->access_group}_PASS";
    $database = new \TymFrontiers\MySQLDatabase (MYSQL_SERVER, \constant($db_user), \constant($db_pass));
  } else {
    $database = new \TymFrontiers\MySQLDatabase (MYSQL_SERVER,MYSQL_GUEST_USERNAME,MYSQL_GUEST_PASS,MYSQL_BASE_DB);
  }
} else {
  $database = new \TymFrontiers\MySQLDatabase (MYSQL_SERVER,MYSQL_GUEST_USERNAME,MYSQL_GUEST_PASS,MYSQL_BASE_DB);
}
$db =& $database;

$access_ranks = [
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
$email_replace_pattern = [
  "name" => "%name%",
  "surname" => "%surname%",
  "email" => "%email%",
  "phone" => "%phone%",
  "country" => "%country%",
  "state" => "%state%",
  "city" => "%city%",
  "address" => "%address%",
  "zip_code" => "%zip_code%",
];
$file_upload_groups = [
  "image" => [
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpe' => 'image/jpeg',
    'gif' => 'image/gif'
  ],
  "document" => [
    'pdf' => 'application/pdf',
    'doc' => 'application/msword',
    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'rtf' => 'application/rtf',
    'xls' => 'application/vnd.ms-excel',
    'xlsx'=> 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'ppt' => 'application/vnd.ms-powerpoint',
    'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    'odt' => 'application/vnd.oasis.opendocument.text',
    'ods' => 'application/vnd.oasis.opendocument.spreadsheet'
  ]
];
$api_sign_patterns = [
  "/path/to/request" => [
    "var1", "var2", "var3" // in order of inclusion
  ]
];
$api_app = [
  "name"    => API_APP_NAME,
  "pu_key"  => API_APP_PUKEY,
  "pr_key"  => API_APP_PRKEY
];
