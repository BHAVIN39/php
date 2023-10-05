<?php
    echo "hello bhavin";
?>
<h3>php hypertext preprocessor</h3>

<pre>
    echo statemnt
    print statement
</pre>

<?php
 echo "bhavin". "<br>"; 
 $name = "hello";
 echo "my name is ". $name. "<br>";
 ?>

 <?php
 print "hiiii". "<br>";
 $color = "red";
 print "my color ".$color. "<br>";

 $x = 15;
 $y = 20;
$z = $x + $y;
 print $z;
 ?>

 <pre>variable</pre>

 <?php
    $text = "hello world";
    $z = 5;

    echo $text. " ". $z. "<br>";
    print "bhavin ". $text. $z;
?>

<pre>
variable scope
    local
    global
    static
</pre>

<pre>global</pre>
<?php
$a = 10;
function myname(){

}
myname();
echo "<p>hello abcoding $a</p>";
?>

<pre>local</pre>
<?php
    function my(){
        $b = 15;
        echo "$b";
    }
    my();
?>

<pre>global to local</pre>

<?php
    $a = 10;
    $b = 20;

    function myname1(){
        global $a,$b;
        $c = $a + $b;
        echo $c. "<br>";
    }
    myname1();
?>

<pre>local to global</pre>

<?php
    function myname2(){
        $e = 40;
        $r = 50;
        $u = $e + $r;
        $GLOBALS['u']  = $GLOBALS['e'] + $GLOBALS['r'];
    }
    myname2();
    echo $u;
?>

<pre>static</pre>

<?php
    function test(){
        static $x1 = 5;
        echo $x1;
        $x1++;
    }
    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";
?>



                                                                                                                                                                                                                                                                                                                                                 