<?php
class User {
    private $id;
    private $username;
    private $password;

    public function __construct($id, $username, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    // Getter methods go here

    public static function getUserById($userId) {
        // Database logic to retrieve user by ID
        // Example: SELECT * FROM users WHERE id = :userId
    }

    public static function getUserByUsername($username) {
        // Database logic to retrieve user by username
        // Example: SELECT * FROM users WHERE username = :username
    }

    public static function createUser($username, $password) {
        // Database logic to create a new user
        // Example: INSERT INTO users (username, password) VALUES (:username, :password)
    }

    public static function authenticateUser($username, $password) {
        // Database logic to authenticate user
        // Example: SELECT * FROM users WHERE username = :username AND password = :password
    }
}
?>
