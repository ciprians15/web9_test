<?php

require_once "Life.php";

class Human extends Life
{
    
    //Cannot access private property Human on age.(private).
    
    public $isDancing = TRUE;
    
    
    
    
    //public setter function
    function setAge($age)
    {
        if($age > 10 && $age < 30)
        {
            $this->age = $age;
        }
    }
    
    function printInfo()
    {
        parent::printInfo();
        echo "Dancing = " . $this->isDancing;
    }
    
    function printHuman()
    {
        return "HUMAN = " .$this->name. " is " . $this->age . " year old and is dancing " . $this->isDancing;
    }
    private function myPrivate()
    {
        echo "My private function";
        
    }
}
?>