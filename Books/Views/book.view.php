<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link href="../css/stylesheet.css" type="text/css" rel="stylesheet">

</head>
<body style=" ">

    <ul class="topnav">
        <li><a class="active" href="#">BookStore</a></li>
        <?php if (!isset($_SESSION["username"])) : ?>
            <li><a href="../Controllers/login.controller.php">Log In</a></li>
        <?php else: ?>
            <li><a href="../Controllers/login.controller.php">Log Out</a></li>
        <?php endif; ?>
        <?php if (!isset($_SESSION["username"])) : ?>
            <li><a href="../Controllers/signup.controller.php">Sign Up</a></li>
        <?php endif; ?>
        <?php if (isset($_SESSION["username"])) : ?>
            <li><a href="../Controllers/create.controller.php">Add Book</a></li>
            <li class="right"><a href="../Controllers/dashboard.controller.php"><?= $firstname . " " . $lastname ?></a></li>
        <?php endif; ?>

    </ul>
    <div style="margin-left: 10%; margin-bottom: 10px; margin-top: 10px;">
        <form method="post" action="../Controllers/index.controller.php">
            <input type="text" name="value" style="padding: 5px;width:20%" placeholder="search book by title or authorName">
            <select name="field" style="padding: 5px;">
                <option value="tbl_books.title">Title </option>
                <option value="tbl_authors.authorName">AUTHOR</option>
            </select>
            <input type="submit" name="btn" value="Search" style="padding: 5px;">
        </form>
    </div>

    <div id="base">
        <form action="../Controllers/index.controller.php" method="post">
            <?php foreach ($allbooks as $key => $book): ?>
                <div class="container">
                    <img src="../images/cover/<?= $book['Cover'] ?>">
                    <p>
                        <span><?= $book['title'] ?></span>
                        <input type="checkbox" name="selectedBook[]" value="<?= $book["ID"] ?>">
                    </p>
                    <div class="overlay">
                        <?php if (isset($_SESSION["username"])) : ?>
                            <button id="btn1" class="btn"><a
                                        href="../Controllers/editbook.controller.php?Book=<?= $book['ID'] ?>">EDIT</a>
                            </button>
                            <button id="btn2" class="btn"><a
                                        href="../Controllers/delete.controller.php?Book=<?= $book['ID'] ?>">DELETE</a>
                            </button>
                        <?php endif; ?>
                        <button id="btn3" class="btn"><a
                                    href="../Controllers/index.controller.php?ID=<?= $book['ID'] ?>">DETAILS</a>
                        </button>
                    </div>
                </div>

            <?php endforeach; ?>

            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </div>

</body>
</html>
