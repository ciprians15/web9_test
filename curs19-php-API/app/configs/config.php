<?php  
  // Activate php errors & warnings
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  
  //DB config
  define("DBHOST", getenv('IP'));
  define("DBUSER", getenv('C9_USER'));
  define("DBPASS", '');
  define("DBNAME", 'blog');
  
  const PASS_SALT = '$1$12ab!';
  
  