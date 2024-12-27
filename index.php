<?php
require("./vendor/autoload.php");
$f3 = \F3::instance();
$pd = \Parsedown::instance();
$f3->route("GET /", function(){
    global $f3, $pd;
});
$f3->run();
?>
