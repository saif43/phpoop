<?php


class Calc
{
    protected $input;
    protected $input2;
    private $output;

    function setInput($inp)
    {
        $this->input = $inp;
    }
    
    function setInput2($inp)
    {
        $this->input2 = $inp;
    }

    function calculate()
    {
        $this->output =  $this->input + $this->input2;
    }
    
    function getResult()
    {
        return $this->output;
    }



}

class Test extends Calc
{
    
}

$calc = new Test();

$calc->setInput(10);
$calc->setInput2(20);

$calc->calculate();

echo $calc->getResult();

// $calc->input =2; // childs can't even access the private property



// echo $calc->output; // can't access private property in public


?>