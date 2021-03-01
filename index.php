<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-2</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="name" autofocus>
<input type="submit" value="送信">
</form>
</body>
</html>
<?php
    $fruits = ['apple', 'orange', 'strawberry'];
    if(isset($_POST['name'])) {
        $keyword = $_POST['name'];
        if (in_array($keyword, $fruits)) {
            echo $keyword . 'は、配列に含まれています。';
        } else {
            echo $keyword . 'は、配列に含まれていません。';
        }
    }
?>