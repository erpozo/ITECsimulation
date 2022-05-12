<?php

namespace ITEC\class;

class exam{
    private int $ID;
    private course $course;
    private date $date;
    private time $time;
    private teacher $teacher;
    private questionlist $questionlist;

    private static $IDcount=0;

    public function __construct(course $course, date $date, time $time, teacher $teacher,questionlist $questionlist){
        $this->$course = $course;
        $this->$date = $date;
        $this->$time = $time;
        $this->$teacher = $teacher;
        $this->$questionlist = $questionlist;
    }
}