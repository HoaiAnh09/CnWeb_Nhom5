<?php
require_once "Database.php";

class News {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT news.*, categories.name AS category_name FROM news JOIN categories ON news.category_id = categories.id");
        return $stmt->fetchAll();
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}