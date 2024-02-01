<?php


// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function ($f3) {

    //add key-value pair to the F3 hive
    $f3->set("username", "sbain");
    $f3->set("password", sha1("Password01"));
    $f3->set("title", "Working with Templates");
    $f3->set("temp", 67);
    $f3->set("color", "purple");
    $f3->set("radius", 10);
    $f3->set("fruits", array("apple", "orange", "banana"));
    //Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

$f3->run();
