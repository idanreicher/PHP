<?php
class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

        
    public function getPosts()
    {
        $this->db->query("SELECT posts.title, posts.body,  DATE_FORMAT(posts.created_at, '%m/%d/%Y') as created_at,
                            users.name as author_name,
                            posts.id as postID,  
                            users.id as userID  
                            FROM posts 
                            INNER JOIN users
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC;
                            ");

        $results = $this->db->resultSet();

        return $results;
    }


    public function addPost($data)
    {
        $this->db->query("INSERT INTO posts (title, body, user_id)
                          VALUES (:title, :body, :user_id)
                        ");

        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':user_id', $data['user_id']);

        return $this->db->execute() ? true : false;
    }

    public function updatePost($data)
    {
        $this->db->query("UPDATE posts 
                          SET title = :title, body = :body
                          WHERE id = :id");

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
       

        return $this->db->execute() ? true : false;
    }

    public function show($id)
    {
        $this->db->query("SELECT * FROM posts WHERE id = :id");

        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function getPostById($id)
    {
        $this->db->query("SELECT posts.id, posts.title, posts.body,  
        DATE_FORMAT(posts.created_at, '%m/%d/%Y') as created_at, users.name as author,
        users.id as user_id
        FROM posts
        INNER JOIN users ON posts.user_id = users.id
        WHERE posts.id = :id
        ");

        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function editPost($id)
    {
        $this->db->query("INSERT INTO posts (title, body, user_id)
                          VALUES (:title, :body, :user_id)
                          WHERE 
                        ");

        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':user_id', $data['user_id']);

        return $this->db->execute() ? true : false;
    }

    public function deletePost($id)
    {
        $this->db->query("DELETE FROM posts WHERE id = :id");

        $this->db->bind(':id', $id);

        return $this->db->execute() ? true : false;
    }  

}
