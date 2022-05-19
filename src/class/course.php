<?php

namespace ITEC\class;

class course{
    private int $ID;
    private string $name;

    private static $IDcount=0;

    public function __construct(string $name){
        $this->ID = ++self::$IDcount;
        $this->name = $name;
    }

    public function getID(){
        return $this->ID;
    }

    public function getName(){
        return $this->name;
    }
}