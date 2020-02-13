<?php

namespace App\Controller;

use App\Entity\Promo;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EcommerceController extends AbstractController
{
    /**
     * @Route("/", name="ecommerce")
     */
    public function index()
    {
        $repo = $this->getDoctrine()
        ->getRepository(SousCategorie::class);
        $souscat = $repo->findAll();
        $produit = $souscat[0]->getProduits();

        $repot = $this->getDoctrine()
        ->getRepository(Promo::class);
        $promo = $repot->findAll();
        // $repot = $this->getDoctrine()
        // ->getRepository(Promo::class);
        // $promos = $repot->findAll();

        
        // foreach($produits as $prod){
        //     foreach($promos as $promo){
        //         if ($prod['id'] == $promo['produit_id']){
        //             $produit[$prod['id']] = $prod;
        //         }
        //     }
        // }

        

        return $this->render('ecommerce/caroussel.html.twig', [
            'produits' => $produit,
            'souscat' => $souscat,
            'promo' => $promo,

        ]);
        
    }
}
