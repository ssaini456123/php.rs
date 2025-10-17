<?php

include("src/Lexer.php");

$prt_all=false;

$l = new Lexer(0,0,"test.rs");
$l->lex();

$l->dbg_dump_src();