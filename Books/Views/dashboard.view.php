<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:index.controller.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2><?= $firstname ?></h2>
<h2><?= $lastname ?></h2>
<h2><?= $_SESSION["username"]?></h2>
</body>
</html>
