
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
<form action="<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
Gender:<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other<br>
<input type="submit">
</form>





</body>
</html>