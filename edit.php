<?php
try {
    $mySql = new PDO('mysql:host=localhost:3306;dbname=kadai', 'root', 'root');

    $stmt = $mySql->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <h2>編集ページ</h2>
    <form action="updated.php" method="POST">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <label for="name">名前</label>
        <input type="text" name="name" id="name" value="<?= $post['name'] ?>" autofocus><br>
        <label for="content">投稿内容</label><br>
        <textarea name="content" id="contnet" cols="30" rows="10"><?= $post['content'] ?></textarea><br>
        <input type="submit" value="送信">
        <button type="button" onclick="location.href='index.php'">戻る</button>
    </form>
</body>

</html>