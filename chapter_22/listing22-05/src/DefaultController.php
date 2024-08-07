<?php

namespace Mattsmithdev;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class DefaultController
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader);
    }

    public function homepage(): void
    {
        $template = 'homepage.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function contactUs(): void
    {
        $template = 'contactUs.html.twig';
        $args = [];

        $html = $this->twig->render($template, $args);
        print $html;
    }

}
