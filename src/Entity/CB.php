<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CBRepository")
 */
class CB
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
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroCb;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $crypto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateValidite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getNumeroCb(): ?string
    {
        return $this->numeroCb;
    }

    public function setNumeroCb(string $numeroCb): self
    {
        $this->numeroCb = $numeroCb;

        return $this;
    }

    public function getCrypto(): ?string
    {
        return $this->crypto;
    }

    public function setCrypto(string $crypto): self
    {
        $this->crypto = $crypto;

        return $this;
    }

    public function getDateValidite(): ?string
    {
        return $this->dateValidite;
    }

    public function setDateValidite(string $dateValidite): self
    {
        $this->dateValidite = $dateValidite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
