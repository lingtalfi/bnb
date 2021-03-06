<?php

use Beauty\TestFinder\KazuyaTestFinder;



//--------------------------------------------
// THIS IS THE BEAUTY GUI SCRIPT
//--------------------------------------------
/**
 * 2016-12-15
 *
 *
 * For more details on how to use it, please read
 * KazuyaTestFinder's class comments.
 * (Beauty/TestFinder/KazuyaTestFinder)
 *
 *
 *
 *
 * This app works best with the chrome browser (firefox is slow for some reasons).
 * This app is created with kif (https://github.com/lingtalfi/kif).
 *
 *
 *
 */



require_once __DIR__ . "/../functions/main-functions.php";
//------------------------------------------------------------------------------/
// COLLECT TESTS
//------------------------------------------------------------------------------/
$dir = APP_ROOT_DIR . "/www/bnb";
$testPageUrls = KazuyaTestFinder::create()
    ->setRootDir($dir)
    ->addExtension('test.php')
    ->addExtension('test.html')
    ->getTestPageUrls();


// here choose which groups should be opened when starting
$openGroups = [
    'ssssplanets',
];




//------------------------------------------------------------------------------/
// DISPLAYING THE HTML PAGE
//------------------------------------------------------------------------------/
/**
 * This is the beauty gui snippet below, just copy paste it.
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <script src="/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="/libs/beauty/js/beauty.js"></script>
    <title>Html page</title>
</head>

<body>
<div id="beauty-gui-container"></div>

<script>
    (function ($) {
        $(document).ready(function () {


            var tests = <?php echo json_encode($testPageUrls); ?>;
            var jContainer = $('#beauty-gui-container');
            var beauty = new window.beauty({
                tests: tests
            });
            beauty.loadTemplateWithJsonP('default', jContainer, function () {
                beauty.start(jContainer);
                beauty.closeAllGroups();
                beauty.openGroups(<?php echo json_encode($openGroups); ?>, true);
            });
        });
    })(jQuery);
</script>

</body>
</html>