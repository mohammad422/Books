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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/stylesheet2.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div id="base">
    <h1>Book Store</h1>
    <!-- title details and  author of the book -->
    <?php foreach (@$books as $book): ?>
        <div class='row'>
            <!-- image and title book-->
            <div class='col div1'>
                <a href="../Controllers/index.controller.php?ID=<?= $book['ID'];?>"><img src="../images/cover/<?= $book['Cover'] ?>" alt='NotFound' title='olivertwist'>
                    <h3><?= $book["title"] ?></h3></a>
            </div>
            <!-- statement-->
            <div class='col div2'>
                <p> <?= $book["Overview"] ?> </p>
            </div>
            <!--  image and the name of author-->
            <div class='col div3'><a href='index.controller.php?ID=<?= $book['ID'];?>#div2_3'><img src="../images/Author/<?= $book["Picture"] ?> " alt='NotFound' title='Dickens'>
                    <h3> <?= $book["authorName"] ?> </h3></a></div>
        </div>
    <?php endforeach; ?>
    <div id="top">
        <a href="#base"><i class="fas fa-arrow-alt-circle-up"></i>Top</a>
    </div>
</div>
</body>
</html>