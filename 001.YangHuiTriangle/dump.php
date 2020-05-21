<html>
<head>
<style type="text/css">
body {
    font-family: "Courier New";
}
</style>
</head>
<body>
<?php
$line_count = isset($_GET['n']) ? intval($_GET['n']) : 10;
yanghui_dump($line_count);
?>
</body>
</html>

<?php
function yanghui_dump($n_line) {
    $datas = yanghui_datas($n_line);
    yanghui_print($datas);
}

function yanghui_datas($n_line) {
    $datas = [];
    $prev_line_datas = [];
    while ($n_line -- > 0) {
        $line_datas = yanghui_line_datas($prev_line_datas);
        array_push($datas, $line_datas);
        $prev_line_datas = $line_datas;
    }

    return $datas;
}
function yanghui_line_datas($prev_line_datas) {
    if (empty($prev_line_datas)) {
        return [1];
    }

    $line_datas = [];

    array_push($line_datas, 1); // 行首
    for ($i = 1; $i < count($prev_line_datas); $i ++) {
        array_push($line_datas, $prev_line_datas[$i - 1] + $prev_line_datas[$i]);
    }
    array_push($line_datas, 1); // 行尾

    return $line_datas;
}

function yanghui_print($datas) {
    $space         = '&nbsp;';
    $newline       = '<br />';

    $max_num       = yanghui_max_num($datas);
    $max_num_width = yanghui_num_width($max_num);
    $unit_width    = $max_num_width + 1;
    $line_count    = count($datas);

    foreach ($datas as $idx => $line_datas) {
        $line_no           = $idx + 1;
        $line_prefix_width = ($line_count - $line_no) * $unit_width / 2;

        echo str_repeat($space, $line_prefix_width);
        foreach ($line_datas as $num) {
            $num_width   = yanghui_num_width($num);
            $left_width  = intval(($unit_width - $num_width) / 2);
            $right_width = $unit_width - $left_width - $num_width;

            echo str_repeat($space, $left_width);
            echo $num;
            echo str_repeat($space, $right_width);
        }
        echo $newline;
    }
}

function yanghui_max_num($datas) {
    $max = 0;
    foreach ($datas as $line_datas) {
        foreach ($line_datas as $num) {
            $max = max($max, $num);
        }
    }
    return $max;
}
function yanghui_num_width($num) {
    return strlen(strval($num));
}