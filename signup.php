<?php
include("head.php");
?>
<?php


$connect = mysqli_connect("localhost", "root", "", "footballnews");

$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $phonenumber = htmlspecialchars(trim($_POST['phonenumber']));
    $email = htmlspecialchars(trim($_POST['email']));

    if (empty($username) || empty($password) || empty($phonenumber) || empty($email)) {
        $errorMessage = "<div class='alert alert-danger'>تمام فیلدها باید پر شوند!</div>";
    } else {
        
        $query = "INSERT INTO `user`(`username`, `password`, `phonenumber`, `email`) 
                  VALUES ('$username', '$password', '$phonenumber', '$email')";

        if (mysqli_query($connect, $query)) {
            $successMessage = "<div class='alert alert-success'>ثبت نام با موفقیت انجام شد! خوش آمدید، <strong>$username</strong></div>";
        } else {
            $errorMessage = "<div class='alert alert-danger'>خطا در ثبت اطلاعات: " . mysqli_error($connect) . "</div>";
        }
    }

    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتیجه ثبت نام</title>
    <link href="bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>نتیجه ثبت نام</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            echo $successMessage;
                            echo $errorMessage;
                        ?>
                        <a href="index.php" class="btn btn-primary w-100">بازگشت به صفحه اصلی</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include("foot.html");
?>
















