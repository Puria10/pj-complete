<?php
$connect = mysqli_connect("localhost", "root", "", "footballnews");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? htmlspecialchars(trim($_POST['username'])) : '';
    $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '';
    $phonenumber = isset($_POST['phonenumber']) ? htmlspecialchars(trim($_POST['phonenumber'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';

    if (empty($username) || empty($password) || empty($phonenumber) || empty($email)) {
        echo "<p class='alert alert-danger'>تمام فیلدها باید پر شوند!</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='alert alert-danger'>فرمت ایمیل اشتباه است!</p>";
    } else {
        if ($connect) {
            $query = "INSERT INTO `user`(`username`, `password`, `phonenumber`, `email`) 
                      VALUES ('$username', '$password', '$phonenumber', '$email')";
            if (mysqli_query($connect, $query)) {
                echo "<h2>ثبت نام با موفقیت انجام شد</h2>";
                echo "<p>نام کاربری: $username</p>";
                echo "<p>رمز عبور: $password</p>";
                echo "<p>شماره تلفن: $phonenumber</p>";
                echo "<p>ایمیل: $email</p>";
            } else {
                echo "<p class='alert alert-danger'>خطا در ثبت اطلاعات: " . mysqli_error($connect) . "</p>";
            }
            mysqli_close($connect);
        } else {
            echo "<p class='alert alert-danger'>اتصال به پایگاه داده برقرار نشد!</p>";
        }
    }
}
?>
