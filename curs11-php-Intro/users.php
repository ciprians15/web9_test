<?php

//Recover get request values
printArray($_GET);
echo $_GET["search"];

printArray($_POST);

function printArray($array)
{
 echo "<pre>";
print_r($array);
echo "</pre>";   
}

$persons = [
            ["name" => "Ana", "age" => 10, "job" => "elev"],
            ["name" => "Mihai", "age" => 20, "job" => "trainer"],
            ["name" => "Vio", "age" => 30, "job" => "trainer"]
            ];
    
printArray($persons);

foreach($persons as $value)
{
 echo "Name = " . $value["name"] . " ,age = " . $value["age"] . " ,job = " . $value['job']. "<br>";  
}



?>