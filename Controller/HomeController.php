<?php

require_once "models/News.php"; 
require_once "models/Category.php"; 

class HomeController {
    public function index() {
        $news = News::getAll();
        $categories = Category::getAll();
        
        include "views/home/index.php";
    }

   