<?php

class model{

    public $modelDescription;
    private $destination;
    private $username;

    /**
     * model constructor.
     */
    public function __construct(){
        $this->modelDescription = "This is the model class";
        $this->destination = $destination;
        $this->username = $username;

        public function save(){
            $sql = "INSERT INTO Destinations (username, destination) VALUES ('" . $this->username . "'," . $this->destination"')";


        }
    }
}