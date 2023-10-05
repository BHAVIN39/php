<pre>if else elseif statement</pre>

<?php

$a = 51;
if($a < 20){
    echo "have a good day ";
}
elseif($a < 50){
    echo "have a bad day ";
}
else{
    echo "null";
}

?>

<pre>switch</pre>

<?php

$b = 4;

switch($b){
    case 1:
        echo "hello bhavin ".$b;
        break;
    case 2:
        echo "hello hardik ".$b;
        break;
    case 3:
        echo "hello vaibhav ".$b;
        break;
    default:
    echo "it's ok ";
}

?>

<pre>loop</pre>

<?php

$c = 10;

while($c < 20){
    echo "this value is ".$c;
    echo "<br>";
    $c += 2;
}

$d = 30;

do{
    echo "this number is $d <br>";
    $d++;
}while($d < 50)

?>

<?php

$e = 10;

for($f = 0; $f < $e; $f++){
    echo "this  $f <br>";
}

?>

<?php

$g = array('A','B','C','D');

foreach ($g as $h){
    echo $h. "<br>";
}

$i = array("bhavin" => 20,"hardik" => 50,"vaibhav" => 100);
foreach($i as $j =>$k){
    echo "$j == $k <br>";
}

?>


<pre>break and continue</pre>

<?php

for($l = 0; $l < 10; $l++){
    if($l == 5){
        break;
    }
    echo "this number is $l <br>";
}

for($m = 0; $m < 10; $m++){
    if($m == 6){
        continue;
    }
    echo "this number is $m <br>";
}
    
echo "<br>";
$m = 1;
while($m < 10){
    if($m == 4){
        break;
    }
    echo $m. "<br>";
    $m++;
}
?>


