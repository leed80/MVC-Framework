<?php

include 'model.php';
include 'contoller.php';
include 'view.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();

