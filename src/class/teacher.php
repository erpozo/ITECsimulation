<?php

namespace ITEC\class;
use ITEC\class\date;

class teacher{
    private int $id;
    private string $name;
    private date $borndate;

    private static $IDcount=0;

    public function __construct(string $teacherName, date $borndate, int $id){
        $this->$id = $id;
        $this->$teacherName = $teacherName;
        $this->$borndate = $borndate;
    }

    public static function create(string $teacherName, date $borndate, int $id){
        return new teacher($teacherName, $borndate, $id);
    }

    public static function createTeacherDate(string $teacherName, int $day, int $month, int $year, int $id){
        $date = date::createDate($day,$month,$year);
        return self::create($teacherName, $date, $id);
    }

    public function getName():string{
        return $this->$name;
    }

    public function getBornDate():date{
        return $this->$borndate;
    }

    public function getBornDateStr(){
        return $this->$borndate->getDateStr();
    }

    public function getId():int{
        return $this->$id;
    }
}