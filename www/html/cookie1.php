<?php require_once './selfphp/Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>クッキー情報</title>
</head>
<body>
<form method="POST" action="cookie2.php">
<label for="email">メールアドレス:</label>
<input id="email" type="text" name="email" size="15" value="<?= e($_COOKIE['email'] ?? '') ?>" />
<input type="submit" value="送信" />
</form>
</body>
</html>
