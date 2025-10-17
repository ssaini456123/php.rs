<?php

class Lexer {
    private $columnNo;
    private $lineNo;
    private $src;
    private $fileName;

    /**
     * Creates a new instance of Lexer.
     * @param $columnNo int column to begin at
     * @param $lineNo int line to begin at
     * @param $filename string name
     */
    public function __construct($columnNo,$lineNo,$filename)
    {
        $this->columnNo=$columnNo;
        $this->lineNo=$lineNo;
        $this->fileName=$filename;

        $h=fopen($filename,"r");
        if($h)
        {
            while(($ln=fgets($h))!==false)
            {
                $trimmed=rtrim($ln);

                if ($trimmed != '')
                    $this->src[]=$trimmed;
            }

            fclose($h);
        }
    }

    private function next_line_open($srcpos)
    {
        $sz=count($this->src);
        if($srcpos<$sz)
        {
            return true;
        }

        return false;
    }

    private function next_char_open($line,$givenPos)
    {
        $sz=strlen($line);
        if($givenPos<$sz) return true;
        return false;
    }

    public function dbg_dump_src()
    {
        print_r($this->src);
    }

    public function lex()
    {
        $srcpos=$this->lineNo;

        while($this->next_line_open($srcpos))
        {
            $line=$this->src[$srcpos];

            while ($this->next_char_open($line,$this->columnNo))
            {
                if ($line[$this->columnNo]=="\n") break;
                $this->columnNo++;
            }

            echo($this->columnNo . " chars counted on line: " . ($srcpos+1) . "\n");

            $srcpos++;
            $this->lineNo=$srcpos;
            $this->columnNo=0;
        }
    }
}