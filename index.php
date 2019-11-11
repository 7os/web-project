<?php
require_once "base.init.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="./site.manifest">
  <head>
    <meta>
    <title>7 OS Project UI testing</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="keywords" content="7, seven, os, operating, system, template">
    <meta name="description" content="7 OS Web - project template">
    <meta name="author" content="Your developer">
    <meta name="creator" content="7 OS">
    <meta name="publisher" content="Your company">
    <meta name="robots" content='index'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="./7os/theme-soswapp/css/theme.css">
    <link rel="stylesheet" href="./7os/theme-soswapp/css/theme-<?php echo PRJ_THEME; ?>.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="./7os/plugin-soswapp/css/plugin.css">
    <link rel="stylesheet" href="./7os/dnav-soswapp/css/dnav.css">
    <link rel="stylesheet" href="./7os/faderbox-soswapp/css/faderbox.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <!-- <div id="sos-loader">
      <div id="sos-loader-loaded"></div>
    </div> -->
    <div class="view-space">
      <div class="sec-div padding -p20">
        <h1>7 OS Project template</h1>
      </div>
    </div>

    <!-- Required scripts -->
    <script src="./7os/jquery-soswapp/js/jquery.min.js">  </script>
    <script src="./7os/js-generic-soswapp/js/js-generic.min.js">  </script>
    <script src="./7os/theme-soswapp/js/theme.min.js"></script>
    <!-- optional plugins -->
    <script src="/7os/plugin-soswapp/js/plugin.min.js"></script>
    <script src="/7os/dnav-soswapp/js/dnav.min.js"></script>
    <script src="/7os/faderbox-soswapp/js/faderbox.min.js"></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>"></script>
    <script type="text/javascript">
      // sos.faderBox.url("https://webnize.biz/register",{ref:'sirlouis'},{exitBtn:true,showLoader:true});
    </script>
  </body>
</html>
