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

<h1>Inquiry received</h1>
<p>Thank you for your inquiry - we aim to respond within 2 working days.</p>
<p>Data received:

<div class="form-group">
    <label for="customerName">Your name</label>
    <input class="form-control" name="customerName" value="<?= $customerName ?>"
           id="customerName" disabled>
</div>

<div class="form-group">
    <label for="customerEmail">Email address</label>
    <input type="email" class="form-control" name="customerEmail"
           id="customerEmail" value="<?= $customerEmail ?>" disabled >
    <small class="form-text text-muted">
        We'll never share your email with anyone else.
    </small>
</div>

<div class="form-group">
    <label for="inquiry">Your inquiry</label>
    <textarea class="form-control" name="inquiry" rows="3" id="inquiry"
              disabled> <?= $inquiry ?></textarea>
</div>
