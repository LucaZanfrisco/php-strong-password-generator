<?php
// Inclusione dei vari file PHP
require __DIR__ ."/functions.php";

// MAIN
$len = $_GET["length"];
$password = generaPassword($len);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <form action="index.php" method="GET" class="generator">
        <label for="pass-len">Lunghezza Password</label>
        <input type="number" name="length" id="pass-len" value="" required>
        <button type="submit">Genera</button>
    </form>
    <div>
         Password: <span class="password"><?php echo $password ?></span>
    </div>
</body>

</html>