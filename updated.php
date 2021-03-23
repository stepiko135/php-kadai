    <?php
    try {
        $mySql = new PDO('mysql:host=localhost:3306;dbname=kadai', 'root', 'root');

        $stmt = $mySql->prepare("UPDATE posts SET name = :name, content = :content WHERE id = :id");
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':content', $_POST['content']);
        $stmt->execute();
    } catch (Exception $e) {
        echo "エラーが発生しました。: {$e->getMessage()}";
    }
    ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>

<body>
    <h2>編集が完了しました。</h2>
    <button type="button" onclick="location.href='index.php'">投稿一覧へ戻る</button>
    <br>
    <br>
</body>

</html>