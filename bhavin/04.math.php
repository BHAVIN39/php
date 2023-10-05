<h1>pi function</h1>

<?php
    echo(pi());

    // min() and max()
    // abs()
    echo "<br>";

    $a = -15;
    echo abs($a);
    echo "<br>";

    echo sqrt(36);
    echo "<br>";
    echo round(5.3);
    echo "<br>";
    echo rand(10,10000);
    echo "<br>";
?>

<h2>contant</h2>

<?php
    // define("abcoding","hello bhavin");
    // echo abcoding;
    // echo "<br>";

    // define("cars", [
    //     'audi',
    //     'toyota',
    //     'scoda'
    // ]);
    // echo cars[0]," ",cars[2];
    // echo "<br>"

    define("hardik","kanani");

    function demo(){
        echo "<br>";
        echo hardik;
    }
    demo();
?>

<h2>operators</h2>
<pre>
    arithmatic
    assignment
    comparision
    increment and decrement
    logicaly
    string
    array
    object
    condition assignment
</pre>

<!-- arithmatic -->
    <?php
        $b = 50;
        $c = 3;
        echo $b % $c;
        echo "<br>";
    ?>

    <!-- assignment -->
    <?php
        $d = 20;
        $d += 15;
        echo $d;
        echo "<br>";
    ?>

    <!-- comparision -->
    <?php
        $e = 10;
        $f = 10;

        var_dump($e == $f);
        var_dump($e === $f);
        var_dump($e != $f);
        echo "<br>";
    ?>

    <!-- increment and decrement -->
    <?php
        $g = 13;
        // echo ++$g;
        echo --$g;
        echo "<br>";
    ?>

    <!-- logicaly -->
    <?php
        $h = 15;
        $i = 20;

        if($h == 1 or $i == 20){
            echo "hollo bhavin";
        }
    ?>

