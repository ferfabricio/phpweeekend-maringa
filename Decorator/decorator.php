<?php

class SmartOpener implements OpenerInterface  {

    private $opener;
    public function __construct(OpenerInterface $opener) {
        $this->opener = $opener;
    }

    public function open() : void {
        $this->opener->open();
        $this->temperature();
    }
}

$door = new Door();
$window = new Window();
$smartDoor = new SmartOpener($door);
$smartWindow = new SmartOpener($window);
