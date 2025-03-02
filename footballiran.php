<!DOCTYPE html>
<html lang="fa">
<head>
<?php
include("head.php");
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فوتبال ایران</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #fff; 
        }

        main {
            padding: 30px;
        }

        #main_left {
            text-align: center;
            margin-top: 40px;
        }

        #img1 {
            width: 250px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        #img1:hover {
            transform: scale(1.1);
        }

        p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
            color: #fff; 
        }

        .container {
            max-width: 1200px;
            margin: auto;
            position: relative;
        }

        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1; 
        }

        @media (max-width: 768px) {
            #img1 {
                width: 180px;
            }

            p {
                font-size: 16px;
            }

            main {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <p>لیگ برتر خلیج فارس یا لیگ برتر فوتبال ایران مسابقات لیگ حرفه‌ای و بالاترین سطح باشگاهی لیگ فوتبال ایران است که پس از جام آزادگان آغاز به کار کرد و در حال حاضر با حضور ۱۶ تیم برگزار می‌شود. نخستین دورهٔ این رقابت‌ها در تاریخ ۱۱ آبان ۱۳۸۰ با حضور ۱۴ تیم برگزار شد.</p>

                <p>در این لیگ طی بیست و دو دوره گذشته، تیم‌های پرسپولیس (هشت بار)، سپاهان (پنج بار)، استقلال (چهار بار)، فولاد خوزستان (دو بار) و پاس تهران، سایپا و استقلال خوزستان (هر کدام یک بار) به مقام قهرمانی رسیده‌اند.</p>

                <p>در رده‌بندی اعلام شده از سوی فدراسیون بین‌المللی تاریخ و آمار فوتبال در سال ۲۰۱۲ این لیگ، به عنوان «سی و ششمین لیگ قدرتمند جهان» و «چهارمین لیگ قدرتمند آسیا» انتخاب شده‌است. افزون بر این در رده‌بندی اعلام شده توسط این فدراسیون، لیگ برتر ایران رده چهل و هفتم جهان و چهارم آسیا را در قرن ۲۱ میلادی (۲۰۰۱ تا ۲۰۱۲) کسب کرده‌است.</p>

                <div id="main_left">
                    <img id="img1" src="IPL_Logo.svg" alt="لوگوی لیگ برتر فوتبال ایران">
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <?php include("foot.html"); ?>

</body>
</html>
