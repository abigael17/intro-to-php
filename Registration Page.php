<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration page</title>
</head>
<body>
Good evening<?php
      echo $_POST["name"];
?><br>
your Email address is:<?php
echo $_POST["email"];

?><br>
your mobile number <?php
echo $_POST["phone"];
?><br>
your password is<?php
echo $_POST["password"];

?>
// get has a space limit
// if you are inputing  sensitive information you use post instead










</body>
</html>
