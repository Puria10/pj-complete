<?php
include("head.php");
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <link href="bootstrap.css" rel="stylesheet">
    <script>
        function validateform() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var phonenumber = document.getElementById("phonenumber").value;
            var email = document.getElementById("email").value;

            if (username == "" || password == "" || phonenumber == "" || email == "") {
                alert("تمام فیلدها باید تکمیل شوند.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>فرم ثبت نام</h3>
                    </div>
                    <div class="card-body">
                        <form action="signup.php" method="post" onsubmit="return validateform()">
                            <div class="mb-3">
                                <label for="username" class="form-label">نام کاربری:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">رمز عبور:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="phonenumber" class="form-label">شماره تلفن:</label>
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">ایمیل:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">ارسال</button>
                        </form>
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