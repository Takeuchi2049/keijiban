<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="uft8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesso00;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

<img src="4eachblog_logo.jpg">

<header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>

</header>

<main>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>

        <div class="form">
        <form method="post" action="insert.php">
            <p class="form1">入力フォーム</p>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" name="handlename" size="30">
            </div>
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" name="title" size="30">
            </div>
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="70" rows="7" name="comments"></textarea>
            </div>
            <div>
                <input type="submit" class="submit" value="送信する">
            </div>
        </form>
        </div>

    <?php
    while ($row = $stmt->fetch()) {

       echo "<div class='something'>";
       echo  "<p>".$row['title']."</p>";
       echo  "<div class='comments'>";
       echo  $row['comments'];
        echo  "<div class='handlename'>posted by ".$row['handlename']."</div>";
        echo  "</div>";
        echo  "</div>";
    }
    ?>    
       
    </div>

    <div class="right">
        <h2>人気の記事</h2>
            <ul>
              <li>PHPオススメ本</li>
              <li>PHP MyAdminの使い方</li>
              <li>今人気のエディタ</li>
              <li>HTMLの基礎</li>
            </ul>  
        <h2>オススメリンク</h2>
            <ul>  
              <li>インターノウス株式会社</li>
              <li>XAMPPのダウンロード</li>
              <li>Eclipseのダウンロード</li>
              <li>Bracketsのダウンロード</li>
            </ul>
        <h2>カテゴリ</h2>
            <ul>
              <li>HTML</li>
              <li>PHP</li>
              <li>MySQL</li>
              <li>JavaScript</li>
            </ul>      
    </div>
</main>

<footer>
    copyright © internous | 4each blog which provides A to Z about programing
</footer>

</body>