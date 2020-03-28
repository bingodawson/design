<?php
include_once 'observer.php';
class Email extends Observer{
    public function update(){
        echo "send email<br>";
    }
}
