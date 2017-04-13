<?php

class view{
    private $model;
    private $controller;

    /**
     * view constructor.
     * @param $controller
     * @param $model
     */
    public function __construct($controller, $model){
        $this->controller = $controller;
        $this->model = $model;

    }

    /**
     * @return string
     */
    public function output(){
        return "<p>" . $this->model->string . "</p>"

    }
}