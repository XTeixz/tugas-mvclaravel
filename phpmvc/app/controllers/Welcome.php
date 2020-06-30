<?php

class Welcome extends AuthControllers {
    public function index($fname="default",$lname="default",$nationality="default",$bio="default"){
        $data["name"]=$fname." ".$lname;
        $this->view("welcome/index",$data);
    }
}