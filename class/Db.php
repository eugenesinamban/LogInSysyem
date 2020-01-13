<?php 
// mysqliよりセキュリティーがいいPDOで接続する

$host = 'localhost';
$db = 'loginsystem'; // ここは好きなDB名を作る
$user = 'root'; // phpmyadminは基本このユーザー名
$pass = '';
$charset = 'utf8mb4'; // 日本語対応できる文字の設定

$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // 設定完成

// ここでPDOの設定をする
// 参考サイト
// https://phpdelusions.net/pdo

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // ここで接続します
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // 失敗したらexceptionが出ます
    // exception = エラー
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



?>