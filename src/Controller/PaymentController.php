<?php

// src/Controller/PaymentController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PaymentInformationType;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends AbstractController
{
    /**
     * @Route("/payment", name="payment")
     */
    public function payment(Request $request)
    {
        $form = $this->createForm(PaymentInformationType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // process the form data
        }

        return $this->render('payment/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
