<?php

interface OpenerInterface {
    public function open() : void;
}

class Door implements OpenerInterface {
    public function open() : void {
        // opens the door
    }
}

class Window implements OpenerInterface {
    public function open() : void {
        // opens the window
    }
}

class SmartDoor extends Door {
    public function open() : void {
        parent::open();
        $this->temperature();
    }
}

class SmartWindow extends Window {
    public function open() : void {
        parent::open();
        $this->temperature();
    }
}
