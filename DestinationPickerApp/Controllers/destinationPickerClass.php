<?php
/**
 * Created by PhpStorm.
 * User: davidlee
 * Date: 24/04/2017
 * Time: 14:30
 */

require("../Models/destinationModel.php");

class destinationPicker{

    public function __construct($user, $destination){

        $this->user = $user;
        $this->destination = $destination;
        $this->destinationModel = new Destination($this->destination, $this->user);
        $this->destinationModel->save();

    }




}