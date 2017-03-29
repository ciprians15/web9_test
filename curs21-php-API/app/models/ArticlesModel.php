<?php

require_once "DB.php";

class ArticlesModel extends DB
{
    function selectAll()
    {
    $sql = 'select * from articles';
   
    return $this->selectSql($sql);
  
    }  
    
    function insertItem($item)
    {
        $sql = 'insert into articles (title, content, category_id, user_id,main_image_url ) values(?, ?, ?, ?,?)';
          // var_dump($item);
        $stmt = $this->dbh->prepare($sql);
        $result=$stmt->execute(array($item['title'],
                             $item['content'],
                             $item['category_id'],
                             $item['user_id'],
                             $item['main_image_url']));
                             
                             var_dump($result);
        
         return $this->dbh->lastInsertId();
        
    }
    
    function updateItem($item)
    {
        $sql= 'update articles SET title = ?,content = ?,category_id = ? where id = ?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute(array($item['title'], 
                             $item['content'], 
                             $item['category_id'], 
                             $item['id']));
    
        return $stmt->rowCount();
    }
    
}