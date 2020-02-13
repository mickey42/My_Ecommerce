<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\PanierProduit;
use App\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class PanierController extends AbstractController
{
    /**
     * @Route("/panie", name="panier")
     */
    public function index()
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
    /**
     * @Route("/panier", name="show_panier")
     */
    public function showPanier(){
        if(isset($_COOKIE['Panier'])){
            $repo = $this->getDoctrine()->getRepository(Produit::class);
            $re =  '/(\d+)/';;
            
            preg_match_all($re, $_COOKIE['Panier'], $cookie, PREG_SET_ORDER, 0);
            
            $panie = [];
            $quantite = [];
            for($i=0; $i<count($cookie); $i++){
                $produit = $repo->find($cookie[$i][0]);
                $panie['produit'][$i]=$produit;
                $quantite[$cookie[$i][0]]= isset($cookie[$i+1][0]) ? $cookie[$i+1][0] : 1;
                
                $promo = $produit->getPromo();
                $panie['promo'][$i]=$promo;
               
                $i++;
            }
            return $this->render('panier/panier.html.twig', [
                'panie'=> $panie,
                'quantite'=> $quantite,
            ]);
        }
        else{
            return $this->render('ecommerce/caroussel.html.twig', [
            ]);
        }

    }

    /**
     * @Route("/addPanier/{id}", name="addPanier")
     */
    public function addPanier($id, Request $request)
    {
        $quantite = $request->get('number');
        $re = $this->getDoctrine()->getRepository(Produit::class);
        $produit = $re->find($id);

        $addVal = "produitid=$id, quantite=$quantite";
        if(!isset($_COOKIE['Panier'])){
            $cookie = new Cookie('Panier', $addVal); 
        }else{
            
            $valCookie = $_COOKIE['Panier'].$addVal;
            $cookie = new Cookie('Panier', $valCookie);
        }

        $response = new Response(); 
        $response->headers->setCookie($cookie); 
        $response->send();

        return $this->render('panier/index.html.twig', [
                     'produit' => $produit,
                     'quantite' => $quantite,
                 ]);
    }

    // /**
    //  * @Route("/commande, name="commande")
    //  */
    // public function commandePanier(Request $request){

    // }

}

