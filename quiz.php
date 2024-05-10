<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // メール送信
    $to = "your_email@example.com"; // 送信先メールアドレス
    $subject = "クイズの解答"; // メール件名

    // メール本文の作成
    $name = $_POST["name"];
    $answer = $_POST["answer"];
    $message = "名前: $name\n解答: $answer";

    // メール送信
    if (mail($to, $subject, $message)) {
        echo "<p>解答が送信されました。</p>";
    } else {
        echo "<p>メールの送信に失敗しました。</p>";
    }
}
?>
