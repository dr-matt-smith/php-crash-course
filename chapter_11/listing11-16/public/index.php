<!doctype html><html><head><title>Checkboxes array</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body class="container">
<h1>Extra pizza toppings</h1>
<form method="GET" action="process.php">
    <p><label>
            <input type="checkbox" name="toppings[]" value="olives"> Olives
        </label></p>
    <p><label>
            <input type="checkbox" name="toppings[]" value="pepper"> Pepper
        </label></p>
    <p><label>
            <input type="checkbox" name="toppings[]" value="garlic"> Garlic salt
        </label></p>
    <p><input type="submit" class="btn btn-primary"></p>
</form>
</body>
</html>
