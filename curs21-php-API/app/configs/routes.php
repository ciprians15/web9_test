<?php
    $routes['/articles'] = array("class"=>"Articles", "method"=>"getAll");
    $routes['/articles/add'] = array("class"=>"Articles", "method"=>"createItem");
    $routes['/articles/edit'] = array("class"=>"Articles", "method"=>"editItem");
    $routes['/articles/delete'] = array("class"=>"Articles", "method"=>"deleteItem");
    $routes['/comments'] = array("class"=>"Comments", "method"=>"getAll");
    $routes['/comments/add'] = array("class"=>"Comments", "method"=>"createItem");
    $routes['/login'] = array("class"=>"Account", "method"=>"login");
    $routes['/logout'] = array("class"=>"Account", "method"=>"logout");   
