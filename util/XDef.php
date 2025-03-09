<?php

declare (strict_types=1);

namespace util;

/* Parsing user input against XSS  */

class XDef
{
    static function parseInput(string $input) : string {

        return htmlspecialchars($input, ENT_QUOTES);
    }
}