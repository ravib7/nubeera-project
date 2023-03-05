<?php
session_start();
unset($_SESSION[""]);
unset($_SESSION[""]);
header("Location: ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <input type="time">
    <input type="date" value="<?php echo $name; ?>">
        <input type="submit">
    </form>
</body>
</html>