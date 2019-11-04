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
    <link rel="stylesheet" href="./7os/web-theme/css/web-theme.css">
    <link rel="stylesheet" href="./7os/web-theme/css/web-theme-<?php echo PRJ_THEME; ?>.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="./7os/web-plugin/css/web-plugin.css">
    <link rel="stylesheet" href="./7os/web-dnav/css/web-dnav.css">
    <link rel="stylesheet" href="./7os/web-faderbox/css/web-faderbox.css">
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
    <script src="./7os/jquery/js/jquery.min.js">  </script>
    <script src="./7os/js-generic/js/js-generic.min.js">  </script>
    <script src="./7os/web-theme/js/web-theme.min.js"></script>
    <!-- optional plugins -->
    <script src="/7os/web-plugin/js/web-plugin.min.js"></script>
    <script src="/7os/web-dnav/js/web-dnav.min.js"></script>
    <script src="/7os/web-faderbox/js/web-faderbox.min.js"></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>"></script>
    <script type="text/javascript">
      // sos.faderBox.url("https://webnize.biz/register",{ref:'sirlouis'},{exitBtn:true,showLoader:true});
    </script>
  </body>
</html>
