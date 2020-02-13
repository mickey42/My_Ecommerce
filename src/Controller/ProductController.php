<?php

namespace App\Controller;

use App\Entity\SousCategorie;
use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
   

    //  /**
    //  * @Route("/sous_cat/{id}", name="sous_cat_show")
    //  */
    // public function showProduit($id){
    //     $repo = $this->getDoctrine()
    //     ->getRepository(Produit::class);
        
        
    //     $produit = $repo->findBy(array('souscategorieId'=>$id));
    //     $souscat = $repo->findBy(array('souscategorie'=>$id));
    //     var_dump($souscat);

    //     return $this->render('products/products.html.twig', [
    //         'produit' => $produit,
    //         'souscat' => $souscat,


    //     ]);
    // }

    /**
     * @Route("/sous_cat/{id}", name="sous_cat_show")
     */
    public function showProduit($id){
        $repo = $this->getDoctrine()
        ->getRepository(SousCategorie::class);
        
        
        
        $souscat = $repo->find($id);
        $produit = $souscat->getProduits();


        return $this->render('products/products.html.twig', [
            'produits' => $produit,
            'souscat' => $souscat,

        ]);
    }

     /**
     * @Route("/produit/{id}", name="produits_show")
     */
    public function showCategorie($id){
        $repo = $this->getDoctrine()
        ->getRepository(Produit::class);
        $produit = $repo->find($id);
        $avis = $produit->getAvis();

        return $this->render('products/index.html.twig', [
            'produit' => $produit,
            'avis' => $avis,
        ]);
    }

    // public function showAvis($id){
    //     $repo = $this->getDoctrine()->getRepository(Avis::class);
    //     $avis = $repo->find($id);

    //     return $this->render('products/products.html.twig', [
    //         'avis' => $avis,
    //     ]);
    // }
}
