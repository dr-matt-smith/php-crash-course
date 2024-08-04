<?php
require_once __DIR__ . '/../src/functions.php';

$action = filter_input(INPUT_GET, 'action');

switch ($action) {
    case 'contact':
        contact();
        break;

    case 'login':
        $isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
        if ($isSubmitted) {
            // POST method so process submitted login data
            processLogin();
        } else {
            // GET method to display login form
            loginForm();
        }
        break;

    default:
        home();
}