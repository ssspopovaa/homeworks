<?php

/**
 * Find answer is it exists way from point $start to point $end
 * Use queue "FIFO - First In First Out"
 */
class BreadthSearchGraph
{
    public $queue;
    public $graph;
    public $start;
    public $end;
    public $current;
    public function __construct(array $graph, $start, $end)
    {
        $this->graph = $graph;
        $this->start = $start;
        $this->end = $end;
        $this->queue = [];
        $this->queue[] = $start;
    }

    public function find()
    {
        while (count($this->queue) > 0) {
            $this->current = array_shift($this->queue);

            if (empty($this->graph[$this->current])) {
                $this->graph[$this->current] = [];
            }

            if (in_array($this->end, $this->graph[$this->current])) {
                return true;
            } else {
                $this->queue = array_merge($this->graph[$this->current], $this->queue);
            }
        }

        return false;
    }

    public function echoResult()
    {
        if ($this->find()) {
            echo "Exists " . PHP_EOL;
        } else {
            echo "Not exists " . PHP_EOL;
        }
    }
}

/**
    Graph Schema

    A ->  B ->  F -> G
    |        / |
    |     D    |
    |  /       |
    C   --- -> E

 */


// example
$graph = [
    'a' => ['b', 'c'],
    'b' => ['f'],
    'c' => ['d','e'],
    'd' => ['f'],
    'e' => ['f'],
    'f' => ['g'],
];

(new BreadthSearchGraph($graph, 'a', 'g'))->echoResult();
