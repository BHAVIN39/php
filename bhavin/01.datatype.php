<pre>
    data type
     1.string
     2.integer
     3.float
     4.boolean
     5.array
     6.object
     7.null
</pre>
 
<pre>string</pre>
<?php
$a1 = "hello"; 
$a2 = "bhavin";
echo $a1. " ". $a2. "<br>";  
 var_dump($a1);
?>    

<pre>integer</pre>
<?php
    $a3 = 1122;
    var_dump($a3);
?>

<pre>float</pre>
<?php
    $a4 = 11.30;
    var_dump($a4);
?>

<pre>boolean</pre>
<?php
    $a5 = 100;
    $a6 = 20;
    $a7 = $a5 < $a6;
    echo $a7;
    var_dump($a7);
?>

<pre>null</pre>
<?php
$a8 = null;
var_dump($a8);
?>

<pre>array</pre>
<?php
    $a7 = array("bhavin","godhani");
    var_dump($a7);
?>

<pre>object</pre>
<?php
    class name{
        public $c;
        public $d;

        public function __construct($c,$d){
            $this->aa = $c;
            $this->bb = $d;
        }
        public function mess(){
            return "my name is ". $this->aa. $this->bb;
        }
    }
    $myname4 = new name("godhani ","bhavin");
    echo $myname4 ->mess();
    echo "<br>";
    $myname4 = new name("vaibhav ","goyani");
    echo $myname4 -> mess();
    echo "<br>";
    $myname4 = new name("hardik ","kanani");
    echo $myname4 -> mess();
?>




