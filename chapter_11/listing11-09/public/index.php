<!doctype html><html><head><title>Movie Rent Form 1</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body class="container">
<h1>Rent movie</h1>
<form method="POST" action="process.php?movieId=80441">
    <p><label for="number">Credit card number:</label>
        <input name="number" id="number"></p>
    <p><label for="date">
            Expiry date:</label>
        <input name="date" id="date"></p>
    <p><label for="ccv">
            CCV code:</label>
        <input name="ccv" id="ccv"></p>
    <p>
        <input type="submit" name="watchNow"
               value="Pay and start watching now" class="btn btn-success">
        <input type="submit" name="watchLater"
               value="Pay and watch later" class="btn btn-success">
    </p>
</form>
</body>
</html>
