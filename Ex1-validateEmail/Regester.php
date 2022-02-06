<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST["email"];
    $errors = [];
    $pattern = '^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\[A-Za-z0-9]+)$';
    if (empty($email)) {
        $errors["email"] = "Ban chua nhap email";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Nhap lai email";
    }
    if (empty($errors)) {
        header("location:index.php");
    } else {
        echo $errors;
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>Nhap email</p>
    <input type="text" name="email" placeholder="Nhap dia chi email">
    <button>Regester</button>
</form>
</body>
</html>
