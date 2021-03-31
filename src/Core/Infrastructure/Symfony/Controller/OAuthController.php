<?php

declare(strict_types=1);

namespace Core\Infrastructure\Symfony\Controller;

use Symfony\Component\Routing\Annotation\Route;

class OAuthController
{
    /**
     * @Route("/", name="base")
     */
    public function hello(): string
    {
        return 'slt world';
    }

    /**
     * @Route("/callback", name="callback")
     */
    public function callback(): string
    {
        return 'slt world callback';
    }
}