<?php
//スーパーグローバル変数９種類
//連想配列

if (!empty($_GET["input_name"])) {
    var_dump($_GET["input_name"]);
}

if (!empty($_GET["dishes"])) {
    var_dump($_GET["dishes"]);
}

echo '<pre>';
if (!empty($_GET)) {
    var_dump($_GET);
}
echo '</pre>';


echo '<pre>';
if (!empty($_POST)) {
    var_dump($_POST);
}
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form method="GET" action="form.php">
        名前
        <input type="text" name="input_name">
        <br>
        <input type="checkbox" name="dishes[]" value="カレー">カレー
        <input type="checkbox" name="dishes[]" value="チヂミ">チヂミ
        <input type="checkbox" name="dishes[]" value="牛丼">牛丼

        <input type="submit" value="submit">
    </form>

    <form method="POST" action="form.php">
        <select name="books">
            <option value="--">本を選択</option>
            <option value="novel">小説</option>
            <option value="comic">漫画</option>
            <option value="magazine">雑誌</option>
        </select>

        <input type="submit" value="submit">
    </form>
</body>

</html>