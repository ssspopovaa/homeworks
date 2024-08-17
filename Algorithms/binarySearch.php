<?php

class BinarySearch
{
    public $array;
    public $search;
    public $attampts;

    public function __construct(array $array, $search)
    {
        $this->array = $array;
        $this->search = $search;
        $this->attampts = 0;
    }

    public function process()
    {
        try {
            if (!is_array($this->array) || count($this->array) == 0) {
                throw new Exception('Invalid params');
            }

            $start = 0;
            $end = count($this->array) - 1;

            while ($start <= $end) {
                $this->attampts++;
                $middle = (int) floor(($start + $end) / 2);
                $value = $this->array[$middle];

                if ($value == $this->search) {
                    return $middle;
                } elseif ($value < $this->search) {
                    $start = $middle + 1;
                } else {
                    $end = $middle - 1;
                }
            }

            return "Not found";
        } catch (Exception $exception) {
            echo $exception->getMessage() . PHP_EOL;
        }
    }

    public function search()
    {
        echo PHP_EOL . "Key: " . $this->process() . ". Attempts: " . $this->attampts . PHP_EOL;
    }
}

$array = [
    1,
    2,
    8,
    12,
    17,
    45,
    48,
    85,
    100,
    300,
    500,
    551,
    900,
    945,
    1195,
    1983,
    2000,
    10000,
];

$search = 85;

(new BinarySearch($array, $search))->search();