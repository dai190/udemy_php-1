<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
    <?php
    $age = '23';
    $age = mb_convert_kana($age, 'n', 'utf-8');
    if(is_numeric($age)){
        echo($age. "歳");
    }else {
        echo("年齢が数字ではありません");
    }
    ?>
</pre>
</main>
</body>
</html>
