<?php

namespace Mattsmithdev;

class ProductController extends Controller
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        parent::__construct();
        $this->productRepository = new ProductRepository();
    }

    public function list(): void
    {
        $products = $this->productRepository->findAll();
        $id = $this->getIdFromSession();

        $template = 'product/list.html.twig';
        $args = [
            'products' => $products,
            'id' => $id
        ];
        print $this->twig->render($template, $args);
    }

    private function getIdFromSession(): ?int
    {
        $id = NULL;
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];

            // Remove it now that it's been retrieved
            unset($_SESSION['id']);
        }

        return $id;
    }

    public function show(int $id): void
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            $defaultController = new DefaultController();
            $defaultController->error('error - No product found with ID = ' . $id);
        } else {
            $template = 'product/show.html.twig';
            $args = [
                'product' => $product
            ];
            print $this->twig->render($template, $args);
        }
    }

    public function deleteAll(): void
    {
        $this->productRepository->deleteAll();

        $this->list();
    }

    public function delete(int $id): void
    {
        $this->productRepository->delete($id);

        $this->list();
    }

    public function create(): void
    {
        $template = 'product/create.html.twig';
        $args = [];
        print $this->twig->render($template, $args);
    }

    public function processCreate(string $description, float $price): void
    {
        $this->productRepository->insert($description, $price);

        $newProductId =
            $this->productRepository->insert($description, $price);

        $this->list($newProductId);
    }

    public function edit(int $id): void
    {
        $product = $this->productRepository->find($id);

        $template = 'product/edit.html.twig';
        $args = [
            'product' => $product
        ];
        print $this->twig->render($template, $args);
    }

    public function processEdit(int $id, string $description,
                                float $price): void
    {
        $this->productRepository->update($id, $description, $price);

        $this->list($id);
    }

}