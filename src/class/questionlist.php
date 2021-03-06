<?php

namespace ITEC\class;
use ITEC\class\question;

class questionlist{
    private int $ID;
    private array $list;

    private static $IDcount=0;
    
    public function __construct(array $questionlist){
        $chekQuestion = [];
        for($n=0;$n<count($questionlist);++$n){
            if(self::validateQuestion($questionlist[$n])){
                $this->list[]=[$questionlist[$n]->get];
            };
        }
        $this->ID = ++self::$IDcount;
        $this->list = $chekQuestion;
    }

    private static function validateQuestion(question $question):bool{
        return is_a($question, "question");
    }

    public function addQuestion($question){
        if(self::validateQuestion($question)){
            array_push($this->list,$question);
        }
    }

    public function addNewQuestion(string $description,int $maxScore){
        $this->addQuestion(question::createQuestion($description, $maxScore));
    }

    public function getTotalScore(){
        $totalScore=0;
        foreach($this->list as $id=>$question){
            $totalScore += $question->getMaxScore;
        }
        return $totalScore;
    }

    public function numQuestion(){
        return count($this->list);
    }

    public function removeQuestion(){}

    public function getQuestion(int|array $numQuestion):question|array{
        if (is_int($numQuestion))return $this->list[$numQuestion];
        if (is_array($numQuestion)){
            $getListQuestion=[];
            for($n=0;$n<count($numQuestion);++$n){
                $getListQuestion[$n] = $this->getQuestion($numQuestion);
            }
            return $getListQuestion;
        }
    }
}