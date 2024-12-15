<?php
include("head.html");
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST['username'];
    $age = $_POST['age'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];

    echo "<h2>Login Successful</h2>";
    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
    echo "<p>Age: " . htmlspecialchars($age) . "</p>";
    echo "<p>Phone Number: " . htmlspecialchars($phonenumber) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        function validateform() {
            var username = document.getElementById("username").value;
            var age = document.getElementById("age").value;
            var phonenumber = document.getElementById("phonenumber").value;
            var email = document.getElementById("email").value;

            if (username == "" || age == "" || phonenumber == "" || email == "") {
                alert("All fields are not completed");
                return false;
            }

            alert("You have been signed up");
            return true;
        }
    </script>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post" onsubmit="return validateform()">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="phonenumber">Phone Number:</label><br>
        <input type="text" id="phonenumber" name="phonenumber" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Confirm</button>
    </form>
</body>
</html>

<?php
include("foot.html");
?>
