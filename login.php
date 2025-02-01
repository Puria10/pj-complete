<?php  
include("head.html");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به سیستم</title>
    <link href="bootstrap.css" rel="stylesheet">
    <script>
        function validateform() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username == "" || password == "") {
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
                        <h3>فرم ورود</h3>
                    </div>
                    <div class="card-body">
                        <form action="login_process.php" method="post" onsubmit="return validateform()">
                            <div class="mb-3">
                                <label for="username" class="form-label">نام کاربری:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">رمز عبور:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100">ورود</button>
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