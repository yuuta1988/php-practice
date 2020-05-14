<?php
require_once './vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$service = getenv('DB_SERVICE');
$name = getenv('DB_NAME');
$usr = getenv('DB_USER');
$passwd = getenv('DB_PASSWORD');

$dsn = "mysql:host=$service;dbname=$name;charset=utf8mb4";
try {
    $db = new PDO($dsn, $usr, $passwd);
    $sql = "SELECT * FROM member";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    print "接続エラー:{$e->getMessage()}";
} finally {
    $db = null;
}
