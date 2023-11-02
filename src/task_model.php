<?php
class Task {
    private $id;
    private $userId;
    private $title;

    public function __construct($id, $userId, $title) {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
    }

    // Getter methods go here

    public static function getTasksByUserId($userId) {
        // Database logic to retrieve tasks by user ID
        // Example: SELECT * FROM tasks WHERE user_id = :userId
    }
}
?>
