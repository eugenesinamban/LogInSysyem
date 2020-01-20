<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>ようこそ, <?php echo $_SESSION['auth']['name'] ?>!</h1>
    <h2><a href="logOut.php">ログアウト</a></h2>
</body>
</html>