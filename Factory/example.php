<?php

class Friend
{
    private $beerType;
    private $beerQuantity;

    public function setBeerType($type)
    {
        $this->beerType = $type;
    }

    public function setBeerQuantity($quantity)
    {
        $this->beerQuantity = $quantity;
    }

    public function hasBeer()
    {
        return "Estou levando {$this->beerQuantity} cervejas, do tipo {$this->beerType}.";
    }
}

interface FriendFactoryInterface {
    public function create() : Friend;
}

class FriendFactory implements FriendFactoryInterface {
    public function create($beerType, $beerQuantity) : Friend {
        $friend = new Friend();
        $friend->setBeerType($beerType);
        $friend->setBeerQuantity($beerQuantity);

        return $friend;
    }
}
