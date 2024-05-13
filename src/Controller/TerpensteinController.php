<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TerpensteinController
{
    #[Route('/terpenstein/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            "<html><body>Lucky number: $number</body></html>"
        );
    }
}