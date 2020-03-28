<?php

class Subject{

    private $observerArr = [];

    public function addObserver(Observer $observer){
        $this->observerArr[] = $observer;
    }

    public function removeObserver(Observer $observer){
        foreach($this->observerArr as $key => $item){
            if( get_class($observer) == get_class($item)){
                unset($this->observerArr[$key]);
            }
        }
    }

    public function notify(){
        foreach($this->observerArr as $key => $item){
            $item->update();
        }
    }
}
