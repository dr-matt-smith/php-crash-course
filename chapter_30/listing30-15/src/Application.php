<?php

namespace Mattsmithdev;

class Application
{
    private DefaultController $defaultController;
    private ProductController $productController;
    private UserController $userController;

    public function __construct()
    {
        $this->defaultController = new DefaultController();
        $this->productController = new ProductController();
        $this->userController = new UserController();
    }

    public function run(): void
    {
        $action = filter_input(INPUT_GET, 'action');
        $isPostSubmission = ($_SERVER['REQUEST_METHOD'] === 'POST');

        switch ($action)
        {
            case 'login':
                $this->userController->loginForm();
                break;

            case 'processLogin':
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');
                if (empty($username) || empty($password)) {
                    $this->defaultController->error(
                        'error - you must enter both a username and a password to login');
                } else {
                    $this->userController->processLogin($username, $password);
                }
                break;

            case 'products':
                $this->productController->list();
                break;

            case 'users':
                $this->userController->list();
                break;

            case 'show':
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                if (empty($id)) {
                    $this->defaultController->error('error - To show a product, an integer ID must be provided');
                } else {
                    $this->productController->show($id);
                }
                break;

            case 'deleteAll':
                if ($isPostSubmission) {
                    $this->productController->deleteAll();
                } else {
                    $this->defaultController->
                    error('error - not a POST request');
                }
                break;

            case 'delete':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                if ($isPostSubmission && !empty($id)) {
                    $this->productController->delete($id);
                } else {
                    $this->defaultController->error('error - to delete a product an integer id must be provided by a POST request');
                }
                break;

            case 'create':
                $this->productController->create();
                break;

            case 'processCreate':
                $description = filter_input(INPUT_POST, 'description');
                $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,
                    FILTER_FLAG_ALLOW_FRACTION);

                if ($isPostSubmission && !empty($description) && !empty($price)) {
                    $this->productController->processCreate($description, $price);
                } else {
                    $this->defaultController->error(
                        'error - new product needs a description and price (via a POST request)');
                }
                break;

            case 'edit':
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                if (empty($id)) {
                    $this->defaultController->error(
                        'error - To edit a product, an integer ID must be provided');
                } else {
                    $this->productController->edit($id);
                }
                break;

            case 'processEdit':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $description = filter_input(INPUT_POST, 'description');
                $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,
                    FILTER_FLAG_ALLOW_FRACTION);

                if ($isPostSubmission && !empty($id) && !empty($description)
                    && !empty($price)) {
                    $this->productController->processEdit($id, $description, $price);
                } else {
                    $this->defaultController->error(
                        'error - Missing data (or not POST method) when trying to update product');
                }
                break;


            default:
                $this->defaultController->homepage();
        }
    }

}