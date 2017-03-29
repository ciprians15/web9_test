<?php
 // Activate php errors & warnings
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $title="";
    $content="";
    $date="";
    
if(isset($_POST["id"])&&isset($_POST["title"])&&isset($_POST["content"])&&isset($_POST["date"]) )
{
  require "Articles.php";
    $articles = new Articles();
    $result=$articles->addArticle($_POST["id"],$_POST["title"],$_POST["content"],$_POST["date"]);
    echo 'Adaugat!';
    
}
