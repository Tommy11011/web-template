<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if ($valid_user) {
        header("Location: index.html");
    } else {
        echo "ایمیل یا رمز عبور اشتباه است.";
    }
}
?>
