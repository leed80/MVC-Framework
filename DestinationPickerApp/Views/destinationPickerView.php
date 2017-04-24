<?php

class destinationView{


    /**
     * view constructor.
     * @param $controller
     * @param $model
     */
    public function __construct($model){

        $this->Destination = $model;

    }

    /**
     * @return string
     */
    public function output(){

        $destination = $this->Destination->$destination;
        return "You have successfully added " . $destination;

    }
}