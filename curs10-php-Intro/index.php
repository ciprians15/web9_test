
//nested for loop that creates a chess board

<table border="1">
    <?php for ($i = 1; $i <= 4; $i++) { ?>
       <tr>
           <?php for ($j = 1; $j <= 4; $j++) { ?>
               <td>value</td>
           <?php } ?>
       </tr>     
    <?php } ?>
</table>


<?php

$table = '<table border="1" width="400 px">';
for($i=1; $i < 9; $i++)
{
    $table.= "<tr>";
    for($j=1; $j < 9; $j++)
    {
      $total = $i + $j;
      if($total % 2 == 0)
        {
        $table.= "<td></td>";    
        }
      else
        {
        $table.= '<td style="background-color:black">value</td>';    
        }  
    }
    $table.= "</tr>";
}
    $table.= "</table>";
    
    echo $table;
echo "<br>";
?>



<?php 
//PHP functions 

function buildTable($nrL = 4, $nrC = 4)
{
    //echo "My first function";
    $table = '<table border="1" width="400 px">';
for($i=1; $i <= $nrL; $i++)
{
    $table.= "<tr>";
    for($j=1; $j <= $nrC; $j++)
    {
      $total = $i + $j;
      if($total % 2 == 0)
        {
        $table.= "<td></td>";    
        }
      else
        {
        $table.= '<td style="background-color:black">value</td>';    
        }  
    }
    $table.= "</tr>";
}
    $table.= "</table>";
    
    echo $table;
    echo "<br>";
}

buildTable();
echo "<br>";
buildTable();
echo "<br>";
buildTable();
echo "<br>";
buildTable(3,3);



//another function

function returnResult()
{
   // echo "return message";
   return "return message";
}

$message = returnResult();
echo $message;

//Variables scope;

$x=1;
define("X",2);

function varScope()
{
    //variabilele nu au scop global in interiorul functiilor.
    //dar pot deveni globale cu ajutorul cuvantului predefinit global.
    //constantele au scop global si pot fi folosite in interiorul functiilor.
    global $x;
    echo $x;
    echo "<br>";
    echo X;
}
echo "<br>";
varScope();


?>