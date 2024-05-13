<?php

namespace App\Controller\SubController;

use Symfony\Component\HttpFoundation\Response;

class AltController {
    public function __invoke(): Response
    {
        return new Response('<html><body><strong>W00t! Secondary nested custom controller goodness!</body></html>');
    }
}