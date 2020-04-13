<?php
class Post{
        
    public function __construct(){
       
        DB::getInstance();
        DB::setCharsetEncoding();
    }
        
    public function getPosts(){
        
        DB::query("SELECT * FROM posts");

        $results = DB::resultSet();

        return $results;
    }
}