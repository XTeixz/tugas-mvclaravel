<?php
class AuthControllers {
    public function view($views,$data=[]){
        require_once("../app/views/$views.php");
    }

    public function model($model){
        require_once("../app/views/models/$model.php");
        return new $model;
    }
}
?>