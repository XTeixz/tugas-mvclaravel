<?php

class Register extends AuthControllers {
    public function index(){
        $this->view("register/index");
    }
}