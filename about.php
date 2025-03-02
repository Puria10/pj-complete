<?php
include("head.php");
$title = "درباره ما";
$companyName = " نمونه";
$aboutUsText = "";
$mission = "";
$vision = "";
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
   
        body {
            font-family: "Tahoma", sans-serif;
            direction: rtl; 
            text-align: right;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .about-us, .mission, .vision {
            background-color: white;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .about-us h2, .mission h3, .vision h3 {
            color: #333;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $companyName; ?></h1>
    </header>

    <section class="about-us">
        <h2>درباره ما</h2>
        <p><?php echo $aboutUsText; ?></p>
    </section>

    <section class="mission">
        <h3>ماموریت ما</h3>
        <p><?php echo $mission; ?></p>
    </section>

    <section class="vision">
        <h3>دیدگاه ما</h3>
        <p><?php echo $vision; ?></p>
    </section>

</body>
</html>

<?php
include("foot.html");
?>