<?php declare(strict_types=1);

namespace wbs\solution\yours;


class FizzBuzz extends FizzBuzzBase implements FizzBuzzInterface
{
    protected function checkValue (int $i) : string
    {
        if ($i%3 == 0 && $i%5 == 0) {
            return 'FizzBuzz';
        }
        if ($i%3 == 0) {
            return 'Fizz';
        }
        if ($i%5 == 0) {
            return 'Buzz';
        }

        return "$i";
    }


    public function getNumbersAsHtml() : string
    {
        $eol = PHP_EOL;
        $lines = [];

        for ($i=1; $i<=100; $i++) {
            $lines[] = $this->checkValue($i);
        }

        return $this->generateOutput($lines);
    }
}

