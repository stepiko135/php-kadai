<?php
$mySql = new PDO('mysql:host=localhost:3306;dbname=kadai', 'root', 'root');

$stmt = $mySql->prepare("SELECT * FROM posts");
$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>

<body>
    <h1>掲示板</h1>
    <h2>新規投稿</h2>
    <form action="posted.php" method="POST">
        <label>name:
            <input type="text" name="name" autofocus>
        </label>
        <br>
        <label for="content">投稿内容:</label><br>
        <textarea id="content" name="content" cols="30" rows="10"></textarea><br>
        <input type="submit" value="投稿">
    </form>
    <br>
    <h2>投稿内容一覧</h2>
    <?php $count = 1 ?>
    <?php foreach ($posts as $post) : ?>
        <div style="border: double 5px cyan">
            <?= "No: " . $count . "<br>" ?>
            <?= "名前: " . $post['name'] . "<br>" ?>
            <?= "投稿内容: " . $post['content'] . "<br>" ?>
            <form action="deleted.php" method="POST">
                <input type="hidden" name="method" value="DELETE">
                <?= '<input type="hidden" name="id" value=' . $post['id'] . '>' ?>
                <input type="submit" value="削除">
            </form>
        </div>
        <br>
    <?php $count++ ?>
    <?php endforeach; ?>
</body>

</html>