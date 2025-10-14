<?php

abstract class Token {}

class Keyword extends Token {
    public const AS = "as";
    public const BREAK = "break";
    public const CONST = "const";
    public const CONTINUE = "continue";
    public const CRATE = "crate";
    public const ELSE = "else";
    public const ENUM = "enum";
    public const EXTERN = "extern";
    public const FALSE = "false";
    public const FN = "fn";
    public const FOR = "for";
    public const IF = "if";
    public const IMPL = "impl";
    public const IN = "in";
    public const LET = "let";
    public const LOOP = "loop";
    public const MATCH = "match";
    public const MOD = "mod";
    public const MOVE = "move";
    public const MUT = "mut";
    public const PUB = "pub";
    public const REF = "ref";
    public const RETURN = "return";
    public const SELF = "self";
    public const SELF_1 = "Self";
    public const STATIC = "static";
    public const STRUCT = "struct";
    public const SUPER = "super";
    public const TRAIT = "trait";
    public const TRUE = "true";
    public const TYPE = "type";
    public const UNSAFE = "unsafe";
    public const USE = "use";
    public const WHERE = "where";
    public const WHILE = "while";
    public const LTIME_STATIC = "'static";
    public const MACRO_DEF = "macro_rules!";
    public const RAW = "raw";
    public const SAFE = "safe";
    public const UNION = "union";

    //TODO async,await,dyn
}

class Lexer {
    private $columnNo;
    private $lineNo;


}