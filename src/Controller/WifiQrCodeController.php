<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WifiQrCodeController extends AbstractController
{
    #[Route('/', name: 'app_home',methods:['GET'])]
    public function create(): Response
        {
        return $this->render('wifi_qrcode/create.html.twig');

        }

    #[Route('/qrcode', name: 'app_qrcode_show',methods:['GET'])]
    public function show(): Response
    {
            return $this->render('wifi_qrcode/show.html.twig');
    }
}
