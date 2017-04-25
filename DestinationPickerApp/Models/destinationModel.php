<?php

require("connect.php");

class Destination{

    /**
     * model constructor.
     * @param $destination
     * @param $user
     */
    public function __construct($destination, $user)
    {
        $this->modelDescription = "Destination model";
        $this->destination = $destination;
        $this->user = $user;
        $this->databaseAction = new DatabaseControl();

    }


    public function save()
    {

        $sql = "INSERT INTO Destinations (User, Destination) VALUES (" . $this->user . "," . $this->destination . ")";
        $this->databaseAction->query($sql);

        echo "Destination " . $this->destination . " saved successfully!";

    }



    public function get(){
        //retreive destinations from the database

    }

}


