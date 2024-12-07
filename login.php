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

    echo"<h2>login successfull</h2>";
    /*echo"<p>username :". htmlspecialchars(string : $username)."</p>";
    echo"<p>age :". htmlspecialchars(string : $age)."</p>";
    echo"<p>phonenumber :". htmlspecialchars(string : $phonenumber)."</p>";
    echo"<p>email :". htmlspecialchars(string : $email)."</p>";*/
}
?>


<htnl>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script>
        function validateform() {
            var username = document.getElementByid("username").value;
            var age = document.getElementByid("age").value;
            var phonenumber = document.getElementByid("phonenumber").value;
            var email = document.getElementByid("email").value;

            if (username =="" ||age ==""||phonenumber==""||email=="" ) {
                alert("all fields are not completed")
                return false ;
            }

            alert(" you have been signed up")
            return true ;
        }
    </script>
</head>
<body>
    <h1>login</h1>
    <form action="login.php" method="post" onsubmit="return validateform()">
        <label for="username">username :</label><br>
        <input type="text" id = "username" name = "username" required><br><br>

        <label for="age">age :</label><br>
        <input type="text" id = "age" name = "age" required><br><br>

        <label for="phonenumber">phonenumber :</label><br>
        <input type="text" id = "phonenumber" name = "phonenumber" required><br><br>

        <label for="email">email :</label><br>
        <input type="text" id = "email" name = "email" required><br><br>

        <button type ="submit">confirm</button>
    </form>
</body>
</html>
<?php
include("foot.html");
?>