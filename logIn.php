<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインページ</title>
</head>
<body>
    <h1>ようこそ</h1>
    <form action="loginHandling.php" method="post">
        <input type="text" name="username" placeholder="ユーザー名を入力してください"><br>
        <input type="password" name="password" placeholder="パスワードを入力してください"><br>
        <input type="submit">
    </form>
    <h2>
    <a href="signUp.php">新規登録</a>
    </h2>
</body>
</html>