<!doctype html>
<html lang="en">
<head>
    <title>movie list page</title>
</head>
<body>
<ul>
    <li>
        <a href="/">
            home page
        </a>
    </li>
    <li>
        <a href="/?action=movies">
            list of movies <<
        </a>
    </li>
</ul>

<hr>

<h1>List of movies (from DB!)</h1>

<?php
foreach ($books as $book):
?>
    id = <?= $book->getId() ?>
    <br>
    title = <?= $book->getTitle() ?>
    <br>
    price = <?= $book->getPrice() ?>
    <br>
    author = <?= $book->getAuthor() ?>
    <hr>
<?php
endforeach;
?>
</body>
</html>