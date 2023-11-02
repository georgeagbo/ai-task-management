<?php
class Task {
    public static function getTasksByUserId($userId) {
        // Assuming tasks are stored in a database
        // You should implement your database logic here
        // This is just a basic example
        $database = new Database();
        return $database->getTasksByUserId($userId);
    }
}
?>
