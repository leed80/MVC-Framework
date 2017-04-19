<?php

include("model.php");
include ("controller.php");
include ("view.php");

$user = 1;
$destination = "Edinburgh";

$destinationObject = new Destination($destination, $user);
$controller = new Controller($destinationObject);
$view = new View($controller, $destinationObject);
echo $view->output();

