<?php

namespace VivekPassword;

class Password
{
    private $length = 8;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public static function generate()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789[{(*%+-$#@!)}]";
        $pass = [];
        $alphaLength = strlen($alphabet) - 1;

        for ($i = 0; $i < $this->length; $i++)
        {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}
