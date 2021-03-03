<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-4</title>
</head>

<body>
    <form action="" method="post">
        <select name="janken">
            <option value="グー">グー</option>
            <option value="チョキ">チョキ</option>
            <option value="パー">パー</option>
        </select>
        <br>
        <input type="submit" value="じゃんけん！">
    </form>
    <?php
    function janken($user)
    {
        $choice = ["グー", "チョキ", "パー"];
        $com = $choice[rand(0, 2)];
        $user = $user;

        echo '自分:' . $user .'<br>';
        echo '相手:' . $com .'<br>';
        if ($user === $com) {
            echo "あいこ";
        } elseif ($user === "グー" && $com === "チョキ") {
            echo "あなたの勝ち！";
        } elseif ($user === "グー" && $com === "パー") {
            echo "あなたの敗北です。。。";
        } elseif ($user === "チョキ" && $com === "グー") {
            echo "あなたの敗北です。。。";
        } elseif ($user === "チョキ" && $com === "パー") {
            echo "あなたの勝ち！";
        } elseif ($user === "パー" && $com === "グー") {
            echo "あなたの勝ち！";
        } elseif ($user === "パー" && $com === "チョキ") {
            echo "あなたの敗北です。。。";
        }
    };

    if (isset($_POST['janken'])) {
        janken($_POST['janken']);
    }
    ?>
</body>

</html>