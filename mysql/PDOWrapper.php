<?php

class PDOWrapper
{
    const MODE_FETCH = 1;
    const MODE_FETCH_ALL = 2;

    private PDO $pdo;
    public function __construct() {
        $this->pdo = new PDO('mysql:host=course-mysql;dbname=course', 'course_user', 'qwerty');
    }
    public function execute(string $sql, ?array $params = null, int $mode = self::MODE_FETCH) {
        $result = $this->pdo->prepare($sql);
        $result->execute($params);

        if ($mode == self::MODE_FETCH) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        if ($mode == self::MODE_FETCH_ALL) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}