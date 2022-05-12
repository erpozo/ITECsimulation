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
}