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
