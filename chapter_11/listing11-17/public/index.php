<!doctype html><html><head><title>Single Selection list</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body class="container">
<h1>Flower selection</h1>
<form method="GET" action="process.php">
    <div class="row">
        <div class="col-lg-3 text-end py-2">
            <input type="submit" value="Select a flower" class="btn btn-primary">
        </div>
        <div class="col-lg-3 text-end py-2">
            <select name="flower" class="custom-select">
                <option value="poppy">Poppy</option>
                <option value="daisy">Daisy</option>
                <option value="tulip">Tulip</option>
            </select>
        </div>
    </div>
</form>
</body>
</html>
