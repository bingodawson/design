<?php
include_once 'observer.php';
class Mobile extends Observer{
    public function update(){
        echo "send mobile message<br>";
    }
}
