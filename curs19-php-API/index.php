<?php

//APP CONFIGS
require "app/configs/config.php";

//DB MODEL FOR ARTICLES
require "app/models/Articles.php";

$articles = new Articles();
$list = $articles->getAll();

print_r($list);