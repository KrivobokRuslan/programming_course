<?php
include '../functions.php';
class Pdowrapper {
    private PDO $pdo;
    public function __construct() {
        $this->pdo = new PDO('mysql:host=course-mysql;dbname=course', 'course_user', 'qwerty');
    }
    public function execute(string $sql, ?array $params = null) {

        $result = $this->pdo->prepare($sql);
        $result->execute($params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

$pdo = new Pdowrapper();
//$pdo->execute("SELECT * FROM user WHERE username = :myaccount", [':myaccount'=> $_POST['username']]);
$examination = $pdo->execute("SELECT * FROM user");
dd($examination);

//$pdo = new PDO('mysql:host=course-mysql;dbname=course', 'course_user', 'qwerty');
//$username = $_POST['username'];
//$result = $pdo->prepare("SELECT * FROM user WHERE username = :myaccount");
//$result->execute([':myaccount'=> $username]);
//
//$examination = $result->fetch(PDO::FETCH_ASSOC);
////dd($examination);

if(empty($examination)) {
    echo 'user not found';
}

if($examination['password'] == md5($_POST['password'])) {
    echo 'welcome ' . $examination['email'];
}
else {
    echo 'wrong password';
}