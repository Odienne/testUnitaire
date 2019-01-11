<?php

namespace App\Controller;

use App\Form\InvoiceType;
use App\Invoice\Invoice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController extends AbstractController
{
    public function index(Request $request)
    {
        $invoice = new Invoice();
        $form = $this->createForm(InvoiceType::class, $invoice);
        $form->handleRequest($request);

        if ($request->getMethod() === 'POST' && $form->isValid()) {
            return $this->render('show.html.twig', ['invoice' => $invoice]);
        }

        return $this->render('form.html.twig', ['form' => $form->createView()]);
    }
}
