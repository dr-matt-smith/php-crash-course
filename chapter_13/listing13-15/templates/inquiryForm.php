<!doctype html><html><head><title>MGW: Contact Details</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head><body class="container">
<ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="/">home</a></li>
    <li class="nav-item"><a class="nav-link"
                            href="/index.php?action=contact">contact details</a></li>
    <li class="nav-item"><a class="nav-link active"
                            href="/index.php?action=inquiryForm">submit an inquiry</a></li>
</ul>

<h1>MGW Sales Inquiry</h1>
<form method="POST" action="/index.php?action=processForm">
    <div class="form-group">
        <label for="customerName">Your name</label>
        <input class="form-control" name="customerName" id="customerName">
    </div>

    <div class="form-group">
        <label for="customerEmail">Email address</label>
        <input type="email" class="form-control" name="customerEmail"
               id="customerEmail">
        <small class="form-text text-muted">
            We'll never share your email with anyone else.
        </small>
    </div>

    <div class="form-group">
        <label for="inquiry">Your inquiry</label>
        <textarea class="form-control" name="inquiry" id="inquiry" rows="3"></textarea>
    </div>

    <input type="submit" value="Submit inquiry" class="btn btn-success">
</form>
