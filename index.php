<?php
require("./vendor/autoload.php");
$f3 = \F3::instance();
$pd = \Parsedown::instance();
<<<<<<< HEAD
$f3->route("GET /", function($f3){
	global $pd;
	echo($pd->text("# Welcome!"));
	echo("this is working now :P");
=======
$f3->route("GET /", function(){
    global $f3, $pd;
>>>>>>> bcd99db06081afe09a2e66ad6038e81a08c941a4
});
$f3->run();
?>
