<?php


class Example
{
    public $item='item bla bla';
    public $name;

    function Sample()    
    {
        $this->Test();
    }

    function Test()    
    {
        echo 'test';
    }
}

$e = new Example();

$e->Sample(); 
echo '<br>';
echo $e->item;

?>