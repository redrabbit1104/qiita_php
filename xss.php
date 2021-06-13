<?php
function sp_chars($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$page_flag = 0;

if (!empty($_POST["btn_submit"])) {
    $page_flag = 1;
}

if (!empty($_POST["btn_confirm"])) {
    $page_flag = 2;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xss</title>
</head>

<body>
    <?php if ($page_flag === 0) : ?>
        入力画面
        <form method="POST" action="xss.php">
            名前
            <input type="text" name="input_name">
            <br>

            <input type="submit" name="btn_submit" value="submit">
        </form>
    <?php endif; ?>

    <?php if ($page_flag === 1) : ?>

        確認画面
        <form method="POST" action="xss.php">
            名前
            <?php echo sp_chars($_POST["input_name"]); ?>
            <br>

            <input type="submit" name="btn_confirm" value="confirm">
            <input type="hidden" name="input_name" value="<?php echo sp_chars($_POST['your_name']); ?>">
        </form>
    <?php endif; ?>

    <?php if ($page_flag === 2) : ?>
        送信完了。
    <?php endif; ?>


</body>

</html>