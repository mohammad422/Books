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
    <link href="../css/stylesheet3.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div id="base">
    <a href="index.controller.php"><h1>Book Store</h1></a>
    <!-- the image and the name oh the book -->
    <div id="div1">
        <div id="div1_1">

            <img src="../images/cover/<?= $book['Cover'] ?>" alt='NotFound' title='olivettwist'>

        </div>
        <div id="div2_1">

            <h2> <?= $book['title'] ?> </h2>
            <p>Date: 29/05/2019</p>
            <p>Price: 30000 </p>
            <a href='#div2_3'><i class='fas fa-arrow-alt-circle-down'> <?= $book['authorName'] ?> </i> </a>

        </div>
    </div>
    <!-- statement about the book -->
    <div id="div2">
        <p>
            The story of Oliver Twist - orphaned, and set upon by evil and adversity from his first breath - shocked
            readers when it was published. After running away from the workhouse and pompous beadle Mr Bumble, Oliver
            finds himself lured into a den of thieves peopled by vivid and
            memorable characters - the Artful Dodger, vicious burglar Bill Sikes, his dog Bull's Eye, and prostitute
            Nancy, all watched over by cunning master-thief Fagin.
            Combining elements of Gothic Romance, the Newgate Novel and popular melodrama, Dickens created an entirely
            new kind of fiction, scathing in its indictment of a cruel society, and pervaded by an unforgettable sense
            of threat and mystery.

            This Penguin Classics edition of Oliver Twist is the first critical edition to faithfully reproduce the text
            as its earliest readers would have encountered it from its serialisation in Bentley's Miscellany, and
            includes an introduction by Philip Horne, a glossary of Victorian thieves' slang,
            a chronology of Dickens's life, a map of contemporary London and all of George Cruikshank's original
            illustrations.

            For more than seventy years, Penguin has been the leading publisher of classic literature in the
            English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the
            best works throughout history and across genres and disciplines. Readers trust the series to provide
            authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors,
            as well as up-to-date translations by award-winning translators.<br>
            Oliver Twist is born into a life of poverty and misfortune, raised in a workhouse in the fictional town of
            Mudfog, located 70 miles (110 km) north of London.He is orphaned by his father's mysterious absence and his
            mother Agnes' death in childbirth, welcomed only in the workhouse and robbed of her gold name locket. Oliver
            is meagerly provided
            for under the terms of the Poor Law and spends the first nine years of his life living at a baby farm in the
            'care' of a woman named Mrs. Mann.
            Oliver is brought up with little food and few comforts. Around the time of Oliver's ninth birthday, Mr.
            Bumble, the parish beadle, removes Oliver from the baby farm and puts him to work picking and weaving oakum
            at the main workhouse. Oliver, who toils with very little food,
            remains in the workhouse for six months. One day, the desperately hungry boys decide to draw lots; the loser
            must ask for another portion of gruel. This task falls to Oliver himself, who at the next meal comes forward
            trembling, bowl in hand, and begs Mr. Bumble for gruel with his famous request: "Please, sir, I want some
            more".
        </p>
    </div>
    <!-- image and name of authorه -->
    <div id="div3">
        <div id="div1_3">

            <p> <?= $book['authorName'] ?> </p>

            <p>Date</p>
            <a href="#base"><i class="fas fa-arrow-alt-circle-up">Top</i></a>
        </div>
        <div id="div2_3">

            <img src="../images/Author/<?= $book['Picture'] ?>" alt='NotFound' title='Dickens'>

        </div>
    </div>
</div>
</body>
</html>
