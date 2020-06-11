<?php
function gen_nums($n, $min = 1, $max = 10000) {
    $datas = [];
    while ($n -- > 0) {
        array_push($datas, rand($min, $max));
    }
    return $datas;
}
function dump($datas) {
    foreach ($datas as $num) {
        printf("%3d", $num);
    }
    echo chr(10);
}

class TopNFilter {
    protected $datas = [];
    protected $capacity;
    protected $minIndex = -1;
    public function __construct($capacity) {
        $this->capacity = $capacity;
    }
    public function push($num) {
        if (count($this->datas) < $this->capacity) {
            array_push($this->datas, $num);
        } else {
            $minIndex = $this->minIndex();
            if ($num > $this->datas[$minIndex]) {
                $this->datas[$minIndex] = $num;
                $this->minIndex = -1;
            }
        }
    }
    public function datas() {
        return $this->datas;
    }
    protected function minIndex() {
        if ($this->minIndex != -1) {
            return $this->minIndex;
        }
        $minIndex = 0;
        foreach ($this->datas as $index => $num) {
            if ($num < $this->datas[$minIndex]) {
                $minIndex = $index;
            }
        }
        $this->minIndex = $minIndex;
        return $minIndex;
    }
}

$filter = new TopNFilter(10);
$datas = gen_nums(20, 1, 99);
dump($datas);

$rdatas = $datas;
rsort($rdatas, SORT_NUMERIC);
dump($rdatas);

foreach ($datas as $num) {
    $filter->push($num);
}
dump($filter->datas());