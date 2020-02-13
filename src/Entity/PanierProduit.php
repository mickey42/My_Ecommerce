<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierProduitRepository")
 */
class PanierProduit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $produitId;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Quantite;

    /**
     * @ORM\Column(type="datetime")
     */
    public $Date;

    /**
     * @ORM\Column(type="integer")
     */
    private $PanierId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Panier", inversedBy="panierProduits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $panier;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Produit", inversedBy="panierProduit", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="panierProduit")
     */
    private $produits;

//     public function __construct()
// {
//     $this->Date = new \DateTime('now');
// }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduitId(): ?int
    {
        return $this->produitId;
    }

    public function setProduitId(int $produitId): self
    {
        $this->produitId = $produitId;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getPanierId(): ?int
    {
        return $this->PanierId;
    }

    public function setPanierId(int $PanierId): self
    {
        $this->PanierId = $PanierId;

        return $this;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getProduits(): ?Produit
    {
        return $this->produits;
    }

    public function setProduits(?Produit $produits): self
    {
        $this->produits = $produits;

        return $this;
    }
}
