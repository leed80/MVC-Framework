<?php

include("model.php");
include ("controller.php");
include ("view.php");

$user = 1;
$destination = $_GET["destination"];

$destinationObject = new NewDestinationController($destination, $user);
$destinationObject->saveDestination();
$view = new View($controller, $destinationObject);
echo $view->output();

