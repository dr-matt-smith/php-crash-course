<?php

namespace Mattsmithdev;

class Application
{
    private BookController $bookController;

    public function __construct()
    {
        $this->bookController = new BookController();
    }
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        switch ($action) {
            case 'books':
            default:
                $this->bookController->list();
        }
    }


}