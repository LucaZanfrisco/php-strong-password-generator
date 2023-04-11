<?php
// Inclusione dei vari file PHP
require __DIR__ ."/functions.php";
include __DIR__ ."/session.php";

$error = '';
// MAIN
if(!empty($_GET["length"])){
    $len = $_GET['length'];
    $password = generaPassword($len);
    $_SESSION["password"] = $password;
    
    if($password !== 'Error'){
        header("Location: ./password.php");
        $error = '';
    } else {
        $error = 'Lughezza massima 24';
    }
    
}
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
        <?php echo $error ?>
    </div>
    
</body>

</html>