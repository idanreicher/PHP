<?php
  class User
  {
      private $db;

      public function __construct()
      {
          $this->db = new Database;
      }

      // register user
      public function registerUser($data)
      {
          $this->db->query('INSERT INTO users (name , email, password) VALUES (:name, :email, :password )');
          $this->db->bind(':name', $data['name']);
          $this->db->bind(':email', $data['email']);
          $this->db->bind(':password', $data['password']);

          if ($this->db->execute()) {
              return true;
          } else {
              return false;
          }
      }

      // Find user by email
      public function findUserByEmail($email, $login = false)
      {
          $this->db->query('SELECT * FROM users WHERE email = :email');
          $this->db->bind(':email', $email);

          $row = $this->db->single();
          
          if ($login) {
              return $row;
          }

          // Check row
          if ($this->db->rowCount() > 0) {
              return true;
          } else {
              return false;
          }
      }

      // Find user by id
      public function getUserById($id)
      {
          $this->db->query('SELECT * FROM users WHERE id = :id');
          $this->db->bind(':id', $Id);

          return $this->db->single();
      }

      public function login($email, $password)
      {
          $user_data = $this->findUserByEmail($email, true);
          
          $user_varified = (password_verify($password, $user_data->password)) ? $user_data : $user_data = false;
        
          return $user_varified;
      }
  }
