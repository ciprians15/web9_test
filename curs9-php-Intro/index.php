<h1>PHP intro</h1>

<?php echo "WEB9"; ?>

<?php
$name="Ciprian";
$number=10;
$price=9.99;
$adevarat=TRUE;
$fals=FALSE;

//var_dump() - functie predefinita care ofera tipul variabilei si valoarea;

var_dump($name);
echo "<br>";
var_dump($number);
echo "<br>";
var_dump($adevarat);
echo "<br>";
var_dump($fals);
echo "<br>";
var_dump($price);
echo "<br>";

echo $name . " are " . $number . " ani. ";
echo $name .= " je";
echo "<br>";
echo $sum = $number + $price;
echo "<br>";
echo $number++;
echo "<br>";
echo ++$number;
echo "<br>";



define("WEB9","INTRO PHP");
echo WEB9;
echo "<br>";

//if/elseif/else;

$hour = date("H");
echo "Current hour" . $hour;


if($hour < 10)
{
    echo "Buna dimineata";
}
elseif ($hour <= 18)
{
    echo "Buna ziua";
}
else
{
    echo "Buna seara";
}


$day = date("D");
if($day === "SAT" || $day === "SUN")
{
    echo "Party! Weekend";
}
else
{
    echo "Go to work!";
}


//switch;

$color = "red";

switch ($color)
{
    case "red":
        echo "Current color is ". $color;
    break;
    case "yellow":
        echo "Current color is ". $color;
    break;
    case "blue":
        echo "Current color is ". $color;
    break;
}

// pentru valori exacte se foloseste switch, pentru interval se foloseste if else.

?>

<?php

//for
echo "<br>";
for($i = 0; $i < 10; $i++)
{
    echo "Current index = " . $i . "<br>";
}

//fibonacci sequence 0 1 1 2 3 5 8;
$a = 0;
$b = 1;
echo $a." , ";
echo $b." , ";
for ($i = 0;$i < 10; $i++ )
{
$sum = $b + $a ;
echo $sum." , ";
$a = $b ;
$b = $sum ;
}
echo "<br>";

//fibonacci sequence 2
    $a = 1;
    $b = 1;
    //$c = $a + $b;
    for ($c = 1; $c < 100; $c = $a+$b) {
        echo "FN = " . $c . " ";
        $a = $b;
        $b = $c;
    }


?>