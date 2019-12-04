<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:index.controller.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link href="../css/stylesheet4.css" type="text/css" rel="stylesheet">

</head>
<body>
<div id="signup">
    <h1>Add a Book</h1>
    <hr>
<form action="../Controllers/create.controller.php" method="post" enctype="multipart/form-data">

        <label><h2>book Name</h2></label>
        <p>
            <input type="text" name="title" placeholder="Enter bookname">
        </p>
        <label><h2>Cover</h2></label>
        <p>
            <input type="file" name="Cover">
        </p>

        <label><h2>authorName</h2></label>
        <p>
        <select name="authorName">
        <?php foreach($authors as $auth): ?>
            <option value="<?= $auth['ID'] ?>"><?=$auth["authorName"] ?></option>
        <?php endforeach; ?>
        </select>
        </p>
        <label><h2>Overview</h2></label>
        <p>
            <textarea name="Overview" style="width:80%;margin: auto;height: 200px;"></textarea>
        </p>
        <input type="submit" name="btn" value="Send">

</form>
</div>
</body>
</html>
