<?php

include("destinationPickerClass.php");
include("destinationPickerView.php");

$destinationController = new destinationPickerClass($_SESSION["user"], $_GET["destination"]);
$view = new View($destinationObject);
echo $view->output();

