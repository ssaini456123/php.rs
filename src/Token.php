<?php

class Token
{
    private $lineNo;
    private $columnNo;
    private $name;

    public function __construct($lineNo, $columnNo, $name)
    {
        $this->lineNo=$lineNo;
        $this->columnNo=$columnNo;
        $this->name=$name;
    }
}