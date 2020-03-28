<?php

include_once 'observer.php';
class Note extends Observer
{
    public function update(){
        echo "send insite note<br>";
    }
}