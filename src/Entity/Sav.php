<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SavRepository")
 */
class Sav
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
     * @ORM\Column(type="integer")
     */
    private $commandeId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $problemeTitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $problemeDesc;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

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

    public function getCommandeId(): ?int
    {
        return $this->commandeId;
    }

    public function setCommandeId(int $commandeId): self
    {
        $this->commandeId = $commandeId;

        return $this;
    }

    public function getProblemeTitre(): ?string
    {
        return $this->problemeTitre;
    }

    public function setProblemeTitre(string $problemeTitre): self
    {
        $this->problemeTitre = $problemeTitre;

        return $this;
    }

    public function getProblemeDesc(): ?string
    {
        return $this->problemeDesc;
    }

    public function setProblemeDesc(string $problemeDesc): self
    {
        $this->problemeDesc = $problemeDesc;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
