<?php
include __DIR__ ."/session.php";

$password = $_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div>
         Password: <span class="password"><?php echo $password ?></span>
    </div>
    <form action="reset.php" method="post" class="reset">
        <button type="submit">Reset</button>
    </form>
</body>
</html>