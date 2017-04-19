<?php

require("model.php");

class NewDestinationController {


    /**
     * controller constructor.
     */
    public function __construct($destination, $user)
    {
        $this->destination = $destination;
        $this->user = $user;
    }


    public function saveDestination(){
        $destinationObject = new Destination($this->destination, $this->user);
        $destinationObject->saveDestination();

    }
}
