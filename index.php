<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-2</title>
</head>

<body>
    <?php
    $questions = [
        "問題" => "日本の首都は？",
    ];
    $questionsKeys = array_keys($questions);

    $answers = [
        "回答1" => "大阪",
        "回答2" => "北海道",
        "回答3" => "箱根",
        "回答4" => "東京",
    ];

    echo "<h1>{$questionsKeys[0]} {$questions["問題"]} </h1>";
    foreach ($answers as $key => $answer) {
        echo "{$key} {$answer}<br>";
    }
    ?>
</body>

</html>