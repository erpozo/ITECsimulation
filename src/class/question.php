<?php

namespace ITEC\class;

class question{
    private int $ID;
    private string $description;
    private int $maxScore;

    private static $IDcount=0;

    public function __construct(string $description,int $maxScore){
        $this->$ID = ++self::$IDcount;
        $this->$description = $description;
        $this->$maxScore = $maxScore;
    }

    public static function createQuestion(string $description,int $maxScore){
        return new question($description, $maxScore);
    }

    public function getMaxScore():int{
        return $this->$maxScore;
    }

    public function getDescription():string{
        return $this->$description;
    }

    public function getId():int{
        return $this->$ID;
    }
}