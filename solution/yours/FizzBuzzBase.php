<?php declare(strict_types=1);

namespace wbs\solution\yours;


abstract class FizzBuzzBase
{
    abstract protected function checkValue (int $i) : string;

    public function generateOutput (array $lines) : string
    {
        $eol = PHP_EOL;
        return implode ("<br />", $lines);
    }
}

