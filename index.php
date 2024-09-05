<?php
require("./vendor/autoload.php");
$f3 = \F3::instance();
$pd = \Parsedown::instance();
$index = new class("temp.md"){
    private string $name;
    private $handle;
    function __construct($name){
        $this->name = $name;
        $this->handle = fopen($name, "r");
    }
    function read(){
        return file_get_contents($this->name);
    }
    function readM($size){
        return fread($this->handle, $size);
    }
};
echo("<link rel='stylesheet' href='style.css'>");
$f3->route("GET /", function(){
    global $f3, $pd, $index;
    echo("<div>");
    echo($pd->text($index->read()));
    echo("</div>");
});
$f3->route("GET /file", function($f3){
    echo(file_get_contents("./".$_GET["file"]));
});
$f3->run();
?>
