<?php
use PHPUnit\Framework\TestCase;
use ITEC\class\question;

final class questionTests extends TestCase{

    public function testquestion(){
        $p1 = question::createQuestion("Explica POO",10);
        $p2 = question::createQuestion("Explica Metodos Magicos",8);
        $p3 = question::createQuestion("Sintaxis CSS",5);

        $this->assertEquals($p1->getMaxScore(),10);
        $this->assertEquals($p2->getMaxScore(),8);
        $this->assertEquals($p3->getDescription(),"Sintaxis CSS");
        $this->assertEquals($p1->getId(),1);
        $this->assertEquals($p2->getId(),2);
    }
}