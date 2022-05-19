<?php
use PHPUnit\Framework\TestCase;
use ITEC\class\teacher;

final class teacherTests extends TestCase{

    public function testteacher(){
        $ignacio = teacher::createTeacherDate("Ignacio",18,9,1978,1234);
        $this->assertEquals($ignacio->getName(),"Ignacio");
    }
}