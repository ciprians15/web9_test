<?php
    require "app/models/CommentsModel.php";
    
    class Comments {
        function getAll() {
            $commentsModel = new CommentsModel();
            return $commentsModel->selectAll();
        }
        
        function createItem() {
            $commentsModel = new CommentsModel();
            return $commentsModel->insertItem();    
        }
    }