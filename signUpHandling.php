<?php
// 処理はここでする

// まずはセッションをスタートする
session_start();

// 必要になるファイルとかをここに入れる
require_once("class/Db.php");

// 簡単な処理をする
// セキュリティーとかは気にせずに済ます

if ("POST" === $_SERVER['REQUEST_METHOD']) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `user` (`username`, `password`, `name`) VALUES (:username, :password, :name)";
    // クエリーを準備する
    
    $placeholder = [
        // 
        'username' => $username,
        'password' => $password,
        'name' => $name
    ];

    // プレースホルダーに入力した値を入れる

    $query = $pdo->prepare($sql);
    $query->execute($placeholder);

    // DBに書き込む

    header('location:login.php');
    
    // 成功したらindexページに飛ばす
}

?>