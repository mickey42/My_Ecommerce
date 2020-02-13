<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\SousCategorie;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $souscategorieId;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SousCategorie", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $souscategorie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Avis", mappedBy="produit")
     */
    private $avis;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PanierProduit", mappedBy="produits")
     */
    private $panierProduit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Promo", mappedBy="produit")
     */
    private $promo;



    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->panierProduit = new ArrayCollection();
        $this->promo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getSousCategorieId(): ?int
    {
        return $this->souscategorieId;
    }

    public function setSousCategorieId(int $souscategorieId): self
    {
        $this->souscategorieId = $souscategorieId;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getSousCategorie(): ?SousCategorie
    {
        return $this->souscategorie;
    }

    public function setSousCategorie(?SousCategorie $souscategorie): self
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * @return Collection|Avis[]
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis[] = $avi;
            $avi->setProduit($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->contains($avi)) {
            $this->avis->removeElement($avi);
            // set the owning side to null (unless already changed)
            if ($avi->getProduit() === $this) {
                $avi->setProduit(null);
            }
        }

        return $this;
    }
    public function __toString() {
        return $this->avis;
    }

    /**
     * @return Collection|PanierProduit[]
     */
    public function getPanierProduit(): Collection
    {
        return $this->panierProduit;
    }

    public function addPanierProduit(PanierProduit $panierProduit): self
    {
        if (!$this->panierProduit->contains($panierProduit)) {
            $this->panierProduit[] = $panierProduit;
            $panierProduit->setProduits($this);
        }

        return $this;
    }

    public function removePanierProduit(PanierProduit $panierProduit): self
    {
        if ($this->panierProduit->contains($panierProduit)) {
            $this->panierProduit->removeElement($panierProduit);
            // set the owning side to null (unless already changed)
            if ($panierProduit->getProduits() === $this) {
                $panierProduit->setProduits(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Promo[]
     */
    public function getPromo(): Collection
    {
        return $this->promo;
    }

    public function addPromo(Promo $promo): self
    {
        if (!$this->promo->contains($promo)) {
            $this->promo[] = $promo;
            $promo->setProduit($this);
        }

        return $this;
    }

    public function removePromo(Promo $promo): self
    {
        if ($this->promo->contains($promo)) {
            $this->promo->removeElement($promo);
            // set the owning side to null (unless already changed)
            if ($promo->getProduit() === $this) {
                $promo->setProduit(null);
            }
        }

        return $this;
    }

    
    // public function __toString()
    // {
    //     try {
    //         return (string) $this->avis; // If it is possible, return a string value from object.
    //      } catch (Exception $e) {
    //         return get_class($this).'@'.spl_object_hash($this); // If it is not possible, return a preset string to identify instance of object, e.g.
    //      }
    // }
}
