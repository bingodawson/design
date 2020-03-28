<?php

class Restaurant{

    private $guestArr;

    /**
     * 顾客刚下单，等待饭菜
     * @param Guest $obj
     */
    public function addGuest(Guest $obj){
        $this->guestArr[] = $obj;
    }

    /**
     * 顾客的饭菜已经送到了
     * @param Guest $obj
     */
    public function removeGuest(Guest $obj){
        foreach($this->guestArr as $key => $item){
            if( get_class($obj) == get_class($item) ){
                unset($this->guestArr[$key]);
            }
        }
    }

    /**
     * 顾客饭菜刚炒好，通知顾客取餐
     */
    public function notify(){
        foreach($this->guestArr as $item){
            $item->fetchFood();
        }
    }
}

interface Guest{
    public function fetchFood();
}

class A implements Guest{
    public function fetchFood()
    {
        echo get_class($this)." start to fetch food<br>";
    }
}

class B implements Guest{
    public function fetchFood()
    {
        echo get_class($this)." start to fetch food<br>";
    }
}

$restaurant = new Restaurant();
//A客人来点餐了
$restaurant->addGuest(new A);
//A客人饭菜好了
$restaurant->notify();