<?php
include 'subject.php';
include 'email.php';
include 'mobile.php';
include 'note.php';
class Client{
    public function registerSucceed(){
        $subject = new Subject();
        $subject->addObserver(new Email());
        $subject->addObserver(new Mobile());
        $subject->addObserver(new Note());
        $subject->notify();
    }
}

$client = new Client();
$client->registerSucceed();