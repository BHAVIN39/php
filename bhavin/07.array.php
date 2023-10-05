<pre>array</pre>

<?php

$name = array("bhavin","vaibhav","hardik");
echo "hiii $name[1]";

?>

<pre>create an array in php</pre>
<pre>
    index array
    associative array
    multidimentional array
</pre>
<pre>count function</pre>

<?php

$name1 = array("hardik","vaibhav","bhavin");
echo count($name1);

?>

<pre>index array</pre>
<?php

$name2 = array("hardik","vaibhav","bhavin","ronit");
echo "hello $name2[2] $name2[3]. <br>" ;

// loop index array

$name3 = array("hardik","vaibhav","bhavin","ronit");
$name4 = count($name3);
for($a = 0; $a < $name4; $a++){
    echo $name3[$a]. "<br>";
}

?>

<pre>associative array</pre>

<?php
$name5 = array("a" => "10","b" => "20");

// echo "hii $name5[a]";
foreach($name5 as $c => $d){
    echo $c. "===" .$d. "<br>";
}

?>

<pre>multidimentional array</pre>

<?php
$Multi = array(
         array("bmw ",10,20),
         array("audi ",30,40),
         array("scoda ",50,60),
         array("honda ",70,80),
);

echo $Multi[0][0]. "hello ". $Multi[0][1]. "hardik ". $Multi[0][2]. "<br>";
echo $Multi[1][0]. "hello ". $Multi[1][1]. "hardik ". $Multi[1][2]. "<br>";
echo $Multi[2][0]. "hello ". $Multi[2][1]. "hardik ". $Multi[2][2]. "<br>";
echo $Multi[3][0]. "hello ". $Multi[3][1]. "hardik ". $Multi[3][2];

echo "<br>";
$name = count($Multi);

for($a = 0; $a < $name; $a++){
    echo "<p><b>Row Number<b></P>";
    echo "<ul>";

    for($b = 0; $b < count($Multi[$a]); $b++){
        echo "<li>". $Multi[$a][$b]."</li>";
    }
    echo "</ul>";
}

?>