<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>健康診断</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="title">健康診断の資料請求</div>
<p>あなたにおすすめの健康診断を見つけます！</p>
    <form action="write.php" method="post">
        性別<br>
        <input type="radio" name="gender" value="女性です">女性
        <input type="radio" name="gender" value="男性です">男性<br>
        年齢<br>
        <input type="radio" name="age" value="20代~30代です">20代~30代
        <input type="radio" name="age" value="40代~50代">40代~50代
        <input type="radio" name="age" value="60代以降">60代以降<br>
        予算<br>
        <input type="radio" name="budget" value="お金をかけたくない">お金をかけたくない
        <input type="radio" name="budget" value="3万以下">3万以下
        <input type="radio" name="budget" value="3万以上">3万以上<br>
        <button type="submit">送信</button>
    </form>
</body>
</html>
