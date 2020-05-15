<?php
require_once '../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$service = getenv('DB_SERVICE');
$name = getenv('DB_NAME');
$usr = getenv('DB_USER');
$passwd = getenv('DB_PASSWORD');

function getDb() {
    $dsn = "mysql:host=$service;dbname=$name;charset=utf8mb4";
    try {
        $db = new PDO($dsn, $usr, $passwd);
        $db->setAttribute(POD::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        return $db;
    } catch (PDOException $e) {
        print "接続エラー:{$e->getMessage()}";
    } finally {
        $db = null;
    }
}
