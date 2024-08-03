<!doctype html>
<html>
<head>
    <title>Shopping site: <?= $pageTitle ?></title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet"
          href="/css/products.css">
</head>

<body class="container ">

<nav>
    <ul>
        <li>
            <a href="/">
                List of Products
            </a>
        </li>
        <li>
            <a href="/?action=cart">
                Shopping Cart
            </a>
        </li>
    </ul>
</nav>

<h1><?= $pageTitle ?></h1>