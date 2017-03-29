<?php
require_once "DB.php";

class CommentsModel extends DB 
{
function selectAll()
    {
    $sql = 'select * from comments';
    return $this->selectSql($sql);
    }  
}