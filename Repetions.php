<?php

//Дан массив случайных чисел. Вывести все числа, которые повторяются
//больше одного раза.

class Repetions
{
    protected $arrayNumbers = [];
    protected $n; // for future method get by numbers of repet

    protected $numberOfOccurrences = [];
    public $moreOne = [];

    public function __construct(array $arrayNumbers, $n = null)
    {
        $this->arrayNumbers = $arrayNumbers;
        $this->n = $n;
    }

    protected function getNumberOfOccurrences()
    {
        foreach ($this->arrayNumbers as $key => $value) {
            $this->numberOfOccurrences[$key] = 0;
            foreach ($this->arrayNumbers as $value2) {
                if ($value2 === $value) {
                $this->numberOfOccurrences[$key]++;
                }
            }
        }

        return $this->numberOfOccurrences;
    }

    public function getWhereMoreOne()
    {
        $NumberOfOccurrences = $this->getNumberOfOccurrences();
        foreach ($NumberOfOccurrences as $key => $value) {
            if ($value > 1) {
               $res[] = $this->arrayNumbers[$key];
            }
        }
        $this->moreOne = array_unique($res);
        return $this->moreOne;
    }
}

