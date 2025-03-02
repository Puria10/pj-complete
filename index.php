<!DOCTYPE html>
<html lang="fa">
<head>
<?php
include("head.php");
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خبر داغ</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .news-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        .news-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 1 1 45%;
            padding: 20px;
            transition: transform 0.3s ease;
        }
        .news-card:hover {
            transform: translateY(-10px);
        }
        .news-card h4 {
            font-size: 1.5em;
            color: #007bff;
            margin-bottom: 10px;
        }
        .news-card p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
        }

        .news-image {
            flex: 1 1 45%;
            padding: 20px;
        }
        .news-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <main class="container my-5">
        <div class="news-section">
            <div class="news-card">
                <h4 class="text-primary">خبر داغ</h4>
                <p>
                    تیم‌های رئال‌مادرید و بارسلونا در دیدار ال‌کلاسیکوی رفت به مصاف هم رفتند که آبی‌اناری‌ها با نتیجه غیرمنتظره ۴-۰ این بازی را بردند...
                </p>
                <a href="#" class="btn-primary">بیشتر بخوانید</a>
            </div>

            <div class="news-image">
                <img src="football.jpg" class="img-fluid rounded" alt="Football News">
            </div>
        </div>
    </main>

    <?php include("foot.html"); ?>

</body>
</html>
