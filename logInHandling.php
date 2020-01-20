<?php 
// まずはセッションスタート
session_start();

// 必要なファイルとかを入れる
require_once("class/Db.php");

if ("POST" === $_SERVER["REQUEST_METHOD"]) {

    // ログイン処理が行う
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // クエリーの準備
    $sql = "SELECT * FROM `user` WHERE (`username` = :username)";

    // プレースホルダーの準備
    $placeholder = [
        
        'username' => $username

    ];

    // データベースからユーザーの情報を得る
    $query = $pdo->prepare($sql);
    $query->execute($placeholder);
    $user = $query->fetch();

    // ユーザーがない場合、パスワードは違う場合、エラーがでます
    if (!$user || $user['password'] !== $password) {

        echo "該当するユーザーはありませんでした。";

    }

    // 成功した場合はindexページに飛ばす
    // ユーザーのIDとお名前を保存することを忘れないように
    $_SESSION['auth']['id'] = $user['id'];
    $_SESSION['auth']['name'] = $user['name'];
    header("location:index.php");

}


?>