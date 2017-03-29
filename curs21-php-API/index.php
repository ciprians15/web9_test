<?php
// /articles -> list articles
// /articles/add -> add article

    session_start();
    
    require "app/configs/config.php";
    require "app/configs/routes.php";
    
    const BLOG = '/curs21-PHP-API';
    
    if (!empty($_SERVER['REDIRECT_URL'])) 
    {
        $url = $_SERVER['REDIRECT_URL'];
        $page = str_replace(BLOG,'',$url);
        
        if (array_key_exists($page, $routes)) 
        {
            $class = $routes[$page]["class"]; // "Articles"
            $method = $routes[$page]["method"]; // "getAll"
            
            $methodReq= $_SERVER["REQUEST_METHOD"];
            switch($methodReq)
            {
                case"POST":
                    $content = file_get_contents("php://input");
                    $data = json_decode($content, true);
                    if ($data) 
                    {
                    $_POST = $data;
                    }
                    break;
                case"PUT":
                case"DELETE":
                    $content = file_get_contents("php://input");
                    $data = json_decode($content, true);
                    //If I have $data, execute $data, else execute parse_str($content).
                    if($data)
                    {
                        $REQUEST=$data;
                    }
                    else
                    {
                        parse_str($content,$REQUEST);
                    }
                    break;
            }
            print_r($_POST);
            exit;
            
            
            require "app/controllers/".$class.".php";
            $controller = new $class();
            $response = $controller->$method();
            
            //RESPONSE FOR JS
            header("Content-Type: application/json");
            echo json_encode($response);
            
            // print_r($response);
        } 
        else 
        {
            http_response_code(404);
            echo "Page not found.";        
        }
    } 
    else 
    {
        http_response_code(403);
        echo "Access Forbidden.";
    }
    

    // require "app/controllers/Articles.php";
    // $articles = new Articles();
    // // LIST ARTICLES
    // $list = $articles->getAll();
    // print_r($list);
    
    // // ADD ARTICLE
    // $create = $articles->createItem();
    // echo "CREATE ARTICLE " . $create;
    
    // require "app/controllers/Comments.php";
    // $comments = new Comments();
    // $list = $comments->getAll();
    // print_r($list);
    
    