<?php
    // strlen
    $a = "bhavin";
    echo strlen($a). "<br>";

    // str_word_count
    $b = "hello bhavin";
    echo str_word_count($b). "<br>";

    // strpos
    $c = "hii hardik kanani";
    echo strpos($c,"hardik"). "<br>";

    // str_replace
    $d = "hello bhavin";
    $e = "vaibhav";
    echo str_replace("bhavin", $e, $d). "<br>";

?>

<!-- number -->
<!-- integer -->

<?php
    // int
    $f = 10;
    var_dump((is_int($f)));
    echo  "<br>";
    
    // float
    $g = 10.5;
    var_dump((is_float($g)));
    echo  "<br>";

    // infinity
    $x = 10.5e33;
    var_dump($x);
    echo  "<br>";

    // nan
    $y;
    var_dump($y);

?>

<h1>number to string</h1>

<?php
    $h = 223344;
    var_dump(is_numeric($h));
    echo "<br>";

    $i = "663344";
    var_dump(is_numeric($i));
    echo "<br>";

    $j = "bhAVIN";
    var_dump(is_numeric($j));
    echo "<br>";

    $k = "ABCoding";
    var_dump(is_numeric($k));
    echo "<br>";
?>

<h1>float to int</h1>

<?php
    $l = 123.6;
    $m = (int)$l;
    echo $m;
    echo "<br>";

    $n = "1122.566"
    $o = (int)$n;
    echo $o;
?>
