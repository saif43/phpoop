<?php

class Log
{
    public function Write($filename)
    {
        fopen($filename, 'a+');
    }
    
    public function Read($filename)
    {

    }
}




?>