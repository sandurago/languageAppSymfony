<?php

namespace App\Entity;

use App\Repository\ConjugationPresentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConjugationPresentRepository::class)]
class ConjugationPresent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $translation = null;

    #[ORM\Column(length: 255)]
    private ?string $example = null;

    #[ORM\Column(length: 255)]
    private ?string $je = null;

    #[ORM\Column(length: 255)]
    private ?string $tu = null;

    #[ORM\Column(length: 255)]
    private ?string $ilelle = null;

    #[ORM\Column(length: 255)]
    private ?string $nous = null;

    #[ORM\Column(length: 255)]
    private ?string $vous = null;

    #[ORM\Column(length: 255)]
    private ?string $ilselles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    public function setTranslation(string $translation): static
    {
        $this->translation = $translation;

        return $this;
    }

    public function getExample(): ?string
    {
        return $this->example;
    }

    public function setExample(string $example): static
    {
        $this->example = $example;

        return $this;
    }

    public function getJe(): ?string
    {
        return $this->je;
    }

    public function setJe(string $je): static
    {
        $this->je = $je;

        return $this;
    }

    public function getTu(): ?string
    {
        return $this->tu;
    }

    public function setTu(string $tu): static
    {
        $this->tu = $tu;

        return $this;
    }

    public function getIlelle(): ?string
    {
        return $this->ilelle;
    }

    public function setIlelle(string $ilelle): static
    {
        $this->ilelle = $ilelle;

        return $this;
    }

    public function getNous(): ?string
    {
        return $this->nous;
    }

    public function setNous(string $nous): static
    {
        $this->nous = $nous;

        return $this;
    }

    public function getVous(): ?string
    {
        return $this->vous;
    }

    public function setVous(string $vous): static
    {
        $this->vous = $vous;

        return $this;
    }

    public function getIlselles(): ?string
    {
        return $this->ilselles;
    }

    public function setIlselles(string $ilselles): static
    {
        $this->ilselles = $ilselles;

        return $this;
    }
}
