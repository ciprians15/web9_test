<?php

require "Articles.php";
$articles = new Articles();
$list=$articles->getAll();
$de_afisat='<span style="font-weight:bold; font-size:40px;">'.count($list).'</span>';
//echo $de_afisat.'<span>5</span>';



// var_dump($list);
?>


<table>
    <?php for($i=0;$i<count($list);$i++) {
     ?>
        <tr>
            <td><?php echo $list[$i]["title"];?></td>
            <td><?php echo $list[$i]["content"];?></td>
            <td><?php echo $list[$i]["date"];?></td>
            <td><a href="form.php?id=<?php echo $list[$i]["id"];?>">Edit</a></td>
        </tr>
    
    <?php 
    }
    ?>
</table>
