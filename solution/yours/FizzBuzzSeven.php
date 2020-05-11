<?php declare(strict_types=1);

namespace wbs\solution\yours;


class FizzBuzzSeven extends FizzBuzz implements FizzBuzzInterface
{
    private $_min;
    private $_max;

    public function __construct(int $min, int $max)
    {
        $this->_min = $min;
        $this->_max = $max;
    }


    protected function checkValue (int $i) : string
    {
        $v = null;

        if ($i%3 == 0 && $i%5==0 && $i%7 == 0) {
            $v = "FizzBuzzSeven";
        } else if ($i%3 == 0 && $i%7 == 0) {
            $v = "FizzSeven";
        } else if ($i%5 == 0 && $i%7 == 0) {
            $v = "BuzzSeven";
        } else if ($i%7 == 0) {
            $v= "Seven";
        } else {
            $v = parent::checkValue($i);
        }

        return "$v";
    }


    public function getNumbersAsHtml() : string
    {
        $lines = [];

        for ($i=$this->_min; $i<=$this->_max; $i++) {
            $lines[] = $this->checkValue($i);
        }

        return $this->generateOutput($lines);
    }
}

