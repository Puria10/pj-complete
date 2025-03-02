<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اخبار فوتبالی</title>
    <link rel="stylesheet" href="head1.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<header class="header">
    <div class="container">
        <h1 id="sitetitle">اخبار فوتبالی</h1>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">صفحه اصلی</a></li>
                <li><a href="footballiran.php">فوتبال ایران</a></li>
                <li><a href="leagueslout.php">لیگ های خارجی</a></li>
                <li><a href="transfers.php">نقل و انتقالات</a></li>
                <li><a href="players.php">بازیکنان</a></li>
                <li><a href="form.php">ثبت نام</a></li>
                <li><a href="news.php">مدیریت</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="logout.php">خروج</a></li>
                <?php else: ?>
                    <li><a href="login.php">ورود</a></li>
                <?php endif; ?>
                <li><a href="about.php">درباره ی ما</a></li>
            </ul>
        </nav>
    </div>
</header>

</body>
</html>
