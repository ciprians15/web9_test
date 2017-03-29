<?php

  // Activate php errors & warnings
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $title="";
    $content="";
    $date="";
    
if(isset($_GET["id"]))
{
    require "Articles.php";
    $articles = new Articles();
    $article = $articles->getArticleById($_GET["id"]);
    $title = isset($article["title"]) ? $article["title"] : "";
    var_dump($article);
}

?>

<form method="POST" action="add.php">
  <div>
    <input type="text" name="id" value="<?php echo $article["id"];?>"/>
  </div>
  <div>
    <input type="text" name="title" value="<?php echo $article["title"];?>"/>
  </div>
  <div>
    <textarea name="content"> <?php echo $article['content'];?></textarea>
  </div>
  <div>
    <input type="text" name="date" value="<?php echo $article["date"];?>"/>
  <div>
    <input type="submit" value="Save"/>
</form>