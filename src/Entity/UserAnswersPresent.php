<?php

namespace App\Entity;

use App\Repository\UserAnswersPresentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserAnswersPresentRepository::class)]
class UserAnswersPresent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $je = null;

    #[ORM\Column(length: 50)]
    private ?string $tu = null;

    #[ORM\Column(length: 50)]
    private ?string $ilelle = null;

    #[ORM\Column(length: 50)]
    private ?string $nous = null;

    #[ORM\Column(length: 50)]
    private ?string $vous = null;

    #[ORM\Column(length: 50)]
    private ?string $ilselles = null;

    #[ORM\ManyToOne(inversedBy: 'userAnswersPresents')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user_id = null;

    #[ORM\ManyToOne(inversedBy: 'userAnswers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ConjugationPresent $verb_id = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getVerbId(): ?ConjugationPresent
    {
        return $this->verb_id;
    }

    public function setVerbId(?ConjugationPresent $verb_id): static
    {
        $this->verb_id = $verb_id;

        return $this;
    }
}
