<?php 

function printArray($array)
{
 echo "<pre>";
print_r($array);
echo "</pre>";   
}


//$names = array();
var_dump($names);

$names = [];
var_dump($names);

$names = ["Ana"];
var_dump($names);

$names = ["Ana","Paul"];
var_dump($names);

//Add new value to existing array
$names[] = "Maria";
echo "<pre>";
//print_r afiseaza doar variabila fara tipul de data.
print_r($names);
echo "</pre>";

printArray($names);

$names[1] = "Mihai";
printArray($names);

unset($names[1]);
printArray($names);

$names[] = "Vio";
printArray($names);

$names[1] = "Mihai";
printArray($names);


$search = "Vio";

for($i = 0; $i < count($names); $i++)
{
    // echo $names[$i];
    if($names[$i] === $search)
    {
        echo "succes, " .$search. " was found!";
    }
}


//Array asociativ

// $person = [0 => "Ana", 1 => "Mihai", 2 = > "Vio"];
$person = ["name" => "Ana", "age" => 10, "job" => "elev"];
echo "<br>";
echo $person["age"];
printArray($person);

foreach ($person as $key => $value)
{
    echo "Key = " .$key. " value = " .$value. "<br>";
}

$person1 = ["name" => "Ana", "age" => 10, "job" => "elev"];
$person2 = ["name" => "Mihai", "age" => 20, "job" => "trainer"];
$person3 = ["name" => "Vio", "age" => 30, "job" => "trainer"];

$persons = [$person1, $person2, $person3];
printArray($persons);

$persons[0]["name"]= array("fname" => "Ana", "lname" => "Pop");
printArray($persons);
echo $persons[0]["name"]["lname"];


?>