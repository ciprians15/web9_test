<?php  
  // Activate php errors & warnings
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  
  //DB config
  $host   = getenv('IP');
  $user   = getenv('C9_USER');
  $pass   = '';
  $dbName = 'blog';
  
  const PASS_SALT = '$1$12ab!';
  
  

$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';
