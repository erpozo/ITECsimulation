<?php

namespace ITEC\class;

class exam{
    private int $ID;
    private string $name;
    private course $course;
    private date $date;
    private time $time;
    private teacher $teacher;
    private questionlist $questionlist;

    private static $IDcount=0;

    public function __construct(string $name, course $course, date $date, time $time, teacher $teacher,questionlist $questionlist){
        $this->$name = $name;
        $this->$course = $course;
        $this->$date = $date;
        $this->$time = $time;
        $this->$teacher = $teacher;
        $this->$questionlist = $questionlist;
    }

    public static function createExam(string $name, course $course, date $date, time $time, teacher $teacher,questionlist $questionlist){
        return new exam($name, $course, $date, $time, $teacher, $questionlist);
    }
}