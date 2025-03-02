<!DOCTYPE html>
<html lang="fa">

<head>
<?php
include("head.php");
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیگ های خارجی</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'IRANSansWeb', sans-serif;
            background-color: #f5f8fa;
            color: #333;
        }

        .card-header {
            background: linear-gradient(45deg, #ff6f61, #ff9a8b, #6a5acd);
            color: white;
            font-size: 1.8em;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
            letter-spacing: 2px;
        }

        .card-header h3 {
            margin: 0;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .list-group-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 15px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .list-group-item:hover {
            transform: scale(1.03);
            background-color: #f7f9fc;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .badge {
            background-color: #28a745;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .badge:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .card-header {
                font-size: 1.5em;
            }

            .list-group-item {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-primary">
                    <div class="card-header text-center">
                        <h3>لیگ های خارجی معتبر</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">در حال حاضر لیگ‌های بسیاری وجود دارند، اما این لیگ‌ها معتبرترین لیگ‌های فعلی هستند:</p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                1 - لیگ انگلیس یا جزیره
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                2 - اسپانیا
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                3 - آلمان
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                4 - ایتالیا
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                5 - فرانسه
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                6 - هلند
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                7 - پرتقال
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                8 - ترکیه
                                <span class="badge bg-success rounded-pill">معتبر</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("foot.html"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
