<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ConferenceController extends AbstractController
{
    /**
     *@Route("/hello/{name}", name="homepage")
     */
    public function index(string $name = '')
    {
        $greet = '';
        if ($name) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
                <html>
                    <body>
                    $greet
                        <img src="/images/under-construction.gif" />
                    </body>
                </html>
                EOF);
    }

    /**
     * @Route("/conference", name="conference")
     */
    public function conference()
    {
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);
    }
}
