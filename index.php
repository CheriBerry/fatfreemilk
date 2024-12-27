<?php
require("./vendor/autoload.php");
$f3 = \F3::instance();
$pd = \Parsedown::instance();
$f3->route("GET /", function($f3){
	global $pd;
	echo($pd->text("# Welcome!"));
	echo("this is working now :P");
});
$f3->run();
?>
