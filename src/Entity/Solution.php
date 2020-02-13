<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SolutionRepository")
 */
class Solution
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
    private $savId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remboursement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remplacement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $aviSav;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSavId(): ?int
    {
        return $this->savId;
    }

    public function setSavId(int $savId): self
    {
        $this->savId = $savId;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getRemboursement(): ?string
    {
        return $this->remboursement;
    }

    public function setRemboursement(string $remboursement): self
    {
        $this->remboursement = $remboursement;

        return $this;
    }

    public function getRemplacement(): ?string
    {
        return $this->remplacement;
    }

    public function setRemplacement(string $remplacement): self
    {
        $this->remplacement = $remplacement;

        return $this;
    }

    public function getAviSav(): ?string
    {
        return $this->aviSav;
    }

    public function setAviSav(string $aviSav): self
    {
        $this->aviSav = $aviSav;

        return $this;
    }
}
