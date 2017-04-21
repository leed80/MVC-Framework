<?php

include("model.php");
include ("view.php");

$user = 1;
$destination = $_GET["destination"];

$destinationObject = new Destination($destination, $user);
$destinationObject->save();
$view = new View($destinationObject);
echo $view->output();

