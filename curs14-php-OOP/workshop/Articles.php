<?php

class Article
{
    public $id="",$title="",$content="",$date=""; 
}

class Articles
{
    public $articole;
    
    function __construct() {
    $a1= new Article();
    $a2= new Article();
    $articole=array($a1,$a2);
        
    }
    
    
    function getAll()
    {
        $articles=[];
        $handle = fopen("articles.txt", "r");
        if ($handle) 
        {
            while (($line = fgets($handle)) !== false) 
            {
                $article = explode("|", trim($line));
                $articles[] = [
                    "id" => $article[0],
                    "title" => $article[1],
                    "content" => $article[2],
                    "date" => $article[3]
                    ];
            }
            fclose($handle);
        } 
        return $articles;
    }
    
    function getArticleById($id)
    {
        $article=[];
        $handle = fopen("articles.txt", "r");
        if ($handle) 
        {
            while (($line = fgets($handle)) !== false) 
            {
                $art = explode("|", trim($line));
                if( $id === $art[0])
                {
                    $article["id"]= $art[0];
                    $article["title"]= $art[1];
                    $article["content"]= $art[2];
                    $article["date"]= $art[3];
                    break;
                }
            }
            fclose($handle);
        } 
        return $article;
    }
    
    function addArticle($id,$title,$content,$date)
    {
        $myfile = fopen("testfile.txt", "a");
        if ($myfile) 
        {
        fwrite($myfile,$id.'|'.$title.'|'.$content.'|'.$date.PHP_EOL);
        fclose($myfile); 
        return true;
        
        }
        else die("Error opening file for writing!");
        
        
        
    }
    
    function updateArticle()
    {
        
    }
    
    function deleteArticle()
    {
        
    }
}