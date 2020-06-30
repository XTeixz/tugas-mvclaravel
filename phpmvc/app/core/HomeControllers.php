<?php
class HomeControllers {
    public function __construct() {
        // echo "Controllers OK! <br>";
    }

    public function view($views,$data=[]){
        require_once("../app/views/$views.php");
    }
}
?>