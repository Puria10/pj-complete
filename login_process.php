<?php
$connect = mysqli_connect("localhost", "root", "", "footballnews");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? htmlspecialchars(trim($_POST['username'])) : '';
    $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '';

    if (empty($username) || empty($password)) {
        echo "<p class='alert alert-danger'>تمام فیلدها باید پر شوند!</p>";
    } else {
        if ($connect) {
            $query = $connect->prepare("SELECT `username`, `password` FROM `user` WHERE `username` = ?");
            $query->bind_param("s", $username);
            $query->execute();
            $result = $query->get_result();
            
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                
                if ($password === $user['password']) {
                    echo "<h2>ورود با موفقیت انجام شد</h2>";
                    echo "<p>نام کاربری: $username</p>";
                } else {
                    echo "<p class='alert alert-danger'>رمز عبور اشتباه است!</p>";
                }
            } else {
                echo "<p class='alert alert-danger'>نام کاربری یافت نشد!</p>";
            }
            $query->close();
            mysqli_close($connect);
        } else {
            echo "<p class='alert alert-danger'>اتصال به پایگاه داده برقرار نشد!</p>";
        }
    }
}
?>
