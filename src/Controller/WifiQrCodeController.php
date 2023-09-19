<?php

namespace App\Controller;

use App\Form\WifiParamsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WifiQrCodeController extends AbstractController
{
    #[Route('/', name: 'app_home',methods:['GET','POST'])]
    public function create(Request $request): Response
        {
            $form = $this->createForm(WifiParamsType::class);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $wifiParams = $form->getData();

                dd($wifiParams);
            }


        return $this->render('wifi_qrcode/create.html.twig', compact('form'));

        }

    #[Route('/qrcode', name: 'app_qrcode_show',methods:['GET'])]
    public function show(): Response
    {
            return $this->render('wifi_qrcode/show.html.twig');
    }
}
