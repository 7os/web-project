<?php
require_once \dirname(__DIR__) . "/.constant.php";
require_once \dirname(__DIR__) . "/.var.php";

function html_style (string $style_name) {
  return WHOST . "/assets/css/" . $style_name;
}
function html_script (string $script_name) {
  return WHOST . "/assets/js/" . $script_name;
}
function asset_img (string $filename) {
  return WHOST . "/assets/img/{$filename}";
}
