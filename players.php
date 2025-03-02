<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("head.php");
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بازیکنان</title>
    <link href="bootstrap.css" rel="stylesheet">
    <style>
        .player-card {
            border: 2px solid #f0ad4e;
            margin: 20px;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
        }

        .player-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .player-card h4 {
            margin-top: 10px;
            color: #343a40;
            font-weight: bold;
        }

        .player-card p {
            color: #6c757d;
        }

        .container {
            margin-top: 50px;
        }

        .player-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .player-card:hover {
            background-color: #e9ecef;
            transition: all 0.3s ease;
        }

        .best-players-title {
            color: white;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container">
        <h1 class="text-center best-players-title my-5">بهترین بازیکنان فوتبال</h1>

        <div class="player-list">
       
            <div class="card player-card col-md-3 mx-3">
                <img src="مسی.jpg" alt="Lionel Messi">
                <h4>لیونل مسی</h4>
                <p class="text-muted">ستاره آرژانتینی، برنده 7 توپ طلا.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="رومالدو.jpg" alt="Cristiano Ronaldo">
                <h4>کریستیانو رونالدو</h4>
                <p class="text-muted">ستاره پرتغالی، 5 توپ طلا.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="زیدان.jpg" alt="Zinedine Zidane">
                <h4>زین‌الدین زیدان</h4>
                <p class="text-muted">قهرمان جام جهانی و یورو.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="رونالدینیو.jpg" alt="Ronaldinho">
                <h4>رونالدینیو</h4>
                <p class="text-muted">جادوی فوتبال برزیلی.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="ام+باپه.webp" alt="Kylian Mbappe">
                <h4>کیلیان امباپه</h4>
                <p class="text-muted">ستاره جوان فرانسوی، قهرمان جام جهانی.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="اینیستا.jpg" alt="Andres Iniesta">
                <h4>آندرس اینیستا</h4>
                <p class="text-muted">بازیکن بارسلونا و قهرمان جام جهانی 2010.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="انری.jpg" alt="Thierry Henry">
                <h4>تئری آنری</h4>
                <p class="text-muted">شاهکار فرانسه، یکی از بهترین مهاجمان تاریخ.</p>
            </div>

            <div class="card player-card col-md-3 mx-3">
                <img src="unnamed.jpg" alt="Xavi Hernandez">
                <h4>ژاوی هرناندز</h4>
                <p class="text-muted">سازنده بازی تیم بارسلونا و اسپانیا.</p>
            </div>
        </div>
    </div>

    <?php
include("foot.html");
?>
</body>
</html>
