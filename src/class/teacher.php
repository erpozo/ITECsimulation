<?php

namespace ITEC\class;
use ITEC\class\date;

class teacher{
    private int $id;
    private string $name;
    private date $borndate;

    private static $IDcount=0;

    public function __construct(string $teacherName, date $borndate, int $id){
        $this->id = $id;
        $this->teacherName = $teacherName;
        $this->borndate = $borndate;
    }

    public static function create(string $teacherName, date $borndate, int $id){
        return new teacher($teacherName, $borndate, $id);
    }


    /**
     * Crea un profesor sin necesidad de crear antes un objeto fecha
     * si no que se crea al mismo tiempo
     * @param string $teacherName
     * Nombre del profesor
     * @param int $day
     * Dia de su fecha de nacimiento
     * @param int $month
     * Mes de su fecha de nacimiento
     * @param int $year
     * Año de su fecha de nacimiento
     * @param int $id
     * ID del profesor
     */
    public static function createTeacherDate(string $teacherName, int $day, int $month, int $year, int $id){
        return self::create($teacherName, date::createDate($day,$month,$year), $id);
    }

    public function getName():string{
        return $this->name;
    }

    public function getBornDate():date{
        return $this->borndate;
    }

    public function getBornDateStr(){
        return $this->borndate->getDateStr();
    }

    public function getId():int{
        return $this->id;
    }
}