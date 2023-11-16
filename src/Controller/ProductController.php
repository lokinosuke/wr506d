<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_product')]
    /**
     * @Route("/products", name="list_products")
     */
    public function listProducts(): Response
    {

        return $this->render('product/list.html.twig', [
            'title' => 'Liste des produits',
        ]);
    }

    #[Route('/product/{id}', name: 'view_product')]
    /**
     * @Route("/product/{id}", name="view_product")
     */
    public function viewProduct(Request $request, $id): Response
    {
        return $this->render('product/view.html.twig', [
            'title' => 'Affichage du produit ' . $id,
        ]);
    }
}

