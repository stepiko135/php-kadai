<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-1</title>
</head>

<body>
    <h1>日本の首都は？</h1>
    <form action="index.php" method="POST">
        <input type="text" name="capital-name">
        <input type="submit" value="OK">
    </form>
    <?php
    if (isset($_POST["capital-name"])) {
        if ($_POST['capital-name'] === '東京') {
            echo '正解';
        } else {
            echo '不正解';
        };
    }
    ?>
</body>

</html>