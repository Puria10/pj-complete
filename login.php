<?php
include("head.html");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? htmlspecialchars(trim($_POST['username'])) : '';
    $age = isset($_POST['age']) ? (int) $_POST['age'] : '';
    $phonenumber = isset($_POST['phonenumber']) ? htmlspecialchars(trim($_POST['phonenumber'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';

    if (empty($username) || empty($age) || empty($phonenumber) || empty($email)) {
        echo "<p class='alert alert-danger'>All fields are required!</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='alert alert-danger'>Invalid email format!</p>";
    } else {
        echo "<h2>Login Successful</h2>";
        echo "<p>Username: $username</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Phone Number: $phonenumber</p>";
        echo "<p>Email: $email</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="bootstrap.css" rel="stylesheet">
    <script>
        function validateform() {
            var username = document.getElementById("username").value;
            var age = document.getElementById("age").value;
            var phonenumber = document.getElementById("phonenumber").value;
            var email = document.getElementById("email").value;

            if (username == "" || age == "" || phonenumber == "" || email == "") {
                alert("All fields must be completed.");
                return false;
            }

            alert("You have been signed up.");
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
                        <h3>Login Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post" onsubmit="return validateform()">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age:</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="phonenumber" class="form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit</button>
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
