<?php

function hello(){
    echo "hii abcoding <br>";
}
hello();

function hellos($a){
    echo "hello bhavin $a <br>";
}
hellos("39");

?>

<?php

function fun(float $b, float $c){
    return $b + $c;
}
echo fun(10,15.5). "<br>";

function funs(int $d, int $e){
    return $d + $e;
}
echo funs(15,20.5);

?>

<pre>default argument value</pre>

<?php

function num(int $a =20){
    echo "this number is $a <br>";
}
num(10);
num();
num(30.6);
num(40);

?>

<pre>return value</pre>

<?php

    function num1(float $b, float $c) :float{
        return $b + $c;
    }
    echo num1(11.5,20.30). "<br>";

    function num2(int $d, int $e) : int{
        return (int)($d + $e);
    }
    echo num2(10,20.4). "<br>";

?>

<pre>passing argument by referance</pre>

<?php

function num3($d){
    echo $d += 20;
}
$num4 =20;
num3 ($num4);
// echo $num4;

?>




