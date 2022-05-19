<?php

namespace ITEC\class;

class time{
    private int $hour;
    private int $minute;
    private int $second;
    private DateTime $DateTimeObj;

    public function __construct(int $hour, int $minute, int $second){
        $this->DateTimeObj = new \DateTime();
        $this->DateTimeObj->setTime($hour,$minute,$second);
        $this->hour=$hour;
        $this->minute=$minute;
        $this->second=$second;
    }

    public static function createTime(int $hour, int $minute, int $second){
        return new time($hour,$minute,$second);
    }

    public function __toString(){
        return $this->DateTimeObj->format("G:i:s");
    }

    public function getTimeStr():string{
        return $this;
    }

    public function getHoursLeft(){
        $now = new \DateTime();
        return $now->diff($this->DateTimeObj)->format("G:i:s");
    }
}