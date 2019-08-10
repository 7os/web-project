<?php
// Project relative definitions
\define("PRJ_ROOT",\dirname(__FILE__));
\define("PRJ_LIBRARY",PRJ_ROOT . "/vendor"); //composer directory
\define("PRJ_APP_DIR",PRJ_ROOT . "/dev"); // /dev for development | /vendor for production
\define("PRJ_DOMAIN","webnize.biz");
\define("PRJ_NAME","webnize.biz");
\define("PRJ_TITLE","Webnize Business");
\define("PRJ_DESCRIPTION","Tym Frontiers Webnize Business project.");
\define("PRJ_TAGS","tym, frontiers, webnize, get, affordable, website, your, business"); // separate with comma
\define("PRJ_AUTHOR","Author's Name"); // separate with comma
\define("PRJ_PUBLISHER","Publisher's Name"); // separate with comma
\define("PRJ_CREATOR","Creator's Name"); // separate with comma

\define("PRJ_API_PU_KEY","");
\define("PRJ_API_PR_KEY","");
// project icon check: https://realfavicongenerator.net/
// path should be relative to domain/project root
\define("PRJ_PRIMARY_COLOUR","#00473b");
\define("PRJ_SECONDARY_COLOUR","#ffffff");
\define("PRJ_THEME","dark"); //7 OS web-theme /theme: dark, light

\define("PRJ_ICON_SVG","/assets/img/icon.svg"); //
\define("PRJ_MS_CONFIG","/msconfig.xml"); //
\define("PRJ_WEB_MANIFEST","/site.webmanifest"); //
\define("PRJ_MS_TILE_COLOUR",PRJ_PRIMARY_COLOUR); // for windows 10 shortcut tile
\define("PRJ_MS_THEME_COLOUR",PRJ_SECONDARY_COLOUR); // for Windows theme
\define("PRJ_ICON_16X16","/assets/img/icon-16x16.png");
\define("PRJ_ICON_32X32","/assets/img/icon-32x32.png");
\define("PRJ_ICON_180X180","/assets/img/icon-180x180.png");
\define("PRJ_ICON_192X192","/assets/img/icon-192x192.png");
\define("PRJ_ICON_512X512","/assets/img/icon-180x180.png");
// template
\define("PRJ_INC_ICONSET",PRJ_ROOT . "/src/inc-iconset.php"); // include file
\define("PRJ_INC_HEADER","/src/inc-header.php"); // include file
\define("PRJ_INC_FOOTER","/src/inc-footer.php"); // include file
\define("PRJ_INC_SIDEBAR","/src/inc-aside.php"); // include file
\define("PRJ_SIDEBAR_POS","off"); // position of side bar: "left", "right", "off"
// MySQL Server
\define("MYSQL_SERVER","localhost");
// MySQL Databases
\define("MYSQL_PREFIX","webnize_"); //
\define("MYSQL_BASE_DB",MYSQL_PREFIX . "base"); // primary storage database
\define("MYSQL_ADMIN_DB",MYSQL_PREFIX . "admin"); // admin info database
\define("MYSQL_LOG_DB",MYSQL_PREFIX . "log"); // log database
\define("MYSQL_DATA_DB",MYSQL_PREFIX . "data"); // database for storing generic data
// MySQL Users
\define("MYSQL_GUEST_USERNAME", MYSQL_PREFIX . "GUEST");
\define("MYSQL_GUEST_PASS","cHlt01OpeF5Adrex");
\define("MYSQL_USER_USERNAME", MYSQL_PREFIX . "USER");
\define("MYSQL_USER_PASS","feFlPr94E8EvIc2u");
\define("MYSQL_ANALYST_USERNAME", MYSQL_PREFIX . "ANALYST");
\define("MYSQL_ANALYST_PASS","fr9S8obakogimat4");
\define("MYSQL_ADVERTISER_USERNAME", MYSQL_PREFIX . "ADVERTISER");
\define("MYSQL_ADVERTISER_PASS","seylNAxOraTho3Ir");
\define("MYSQL_MODERATOR_USERNAME", MYSQL_PREFIX . "MODERATOR");
\define("MYSQL_MODERATOR_PASS","3LBAfroWREcrlf2e");
\define("MYSQL_EDITOR_USERNAME", MYSQL_PREFIX . "EDITOR");
\define("MYSQL_EDITOR_PASS","qLswEyiWrUSWet7o");
\define("MYSQL_ADMIN_USERNAME", MYSQL_PREFIX . "ADMIN");
\define("MYSQL_ADMIN_PASS","0utheThoqitr1br4");
\define("MYSQL_DEVELOPER_USERNAME", MYSQL_PREFIX . "DEVELOPER");
\define("MYSQL_DEVELOPER_PASS","brof7egaqa0i7a0L");
\define("MYSQL_SUPERADMIN_USERNAME", MYSQL_PREFIX . "SUPERADMIN");
\define("MYSQL_SUPERADMIN_PASS","spus72WoDRawAche");
\define("MYSQL_OWNER_USERNAME", MYSQL_PREFIX . "OWNER");
\define("MYSQL_OWNER_PASS","7Uchob4iPRastEta");

// generic definition
\define('REQUEST_SCHEME',(
    ( !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] =='on'  )
      OR
    (  $_SERVER['REQUEST_SCHEME'] === 'https'	|| (int)$_SERVER['SERVER_PORT'] === 443 )
  ) ? "https://" : "http://");
\define('WHOST',REQUEST_SCHEME . PRJ_DOMAIN);
