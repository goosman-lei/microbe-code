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

/*
N: 数字总数
M: 要找出最大的M个数

Version1: (N - M) * 2 * M
Version2: (N - M) * 1 ---------- (N - M) * M
*/
class TopNFilter {
    protected $capacity;
    protected $datas;
    protected $min_index = -1;

    public function __construct($capacity) {
        if ($capacity < 1) {
            throw new Exception('Invalid Capacity');
        }
        $this->capacity = $capacity;
        $this->datas    = [];
    }
    public function push($num) {
        if (count($this->datas) < $this->capacity) {
            array_push($this->datas, $num);
        } else if ($num > $this->min_num()) {
            $this->replace_min($num);
        }
    }
    protected function min_num() {
        return $this->datas[$this->min_index()];
    }
    protected function replace_min($num) {
        $this->datas[$this->min_index()] = $num;
        $this->min_index = -1;
    }
    protected function min_index() {
        if ($this->min_index >= 0) {
            return $this->min_index;
        }
        $this->min_index = 0;
        foreach ($this->datas as $index => $num) {
            if ($num < $this->datas[$this->min_index]) {
                $this->min_index = $index;
            }
        }
        return $this->min_index;
    }
    public function datas() {
        return $this->datas;
    }
}

$filter = new TopNFilter(10);
$datas = gen_nums(20, 1, 99);
dump($datas);
rsort($datas, SORT_NUMERIC);
dump($datas);
foreach ($datas as $num) {
    $filter->push($num);
}
dump($filter->datas());