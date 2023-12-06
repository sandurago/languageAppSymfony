<?php

namespace App\Entity;

use App\Repository\ConjugationPresentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(inversedBy: 'conjugationPresents')]
    private ?User $User = null;

    #[ORM\OneToMany(mappedBy: 'verb_id', targetEntity: UserAnswersPresent::class, orphanRemoval: true)]
    private Collection $userAnswers;

    public function __construct()
    {
        $this->userAnswers = new ArrayCollection();
    }

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

/*     public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): static
    {
        $this->User = $User;

        return $this;
    } */

    /**
     * @return Collection<int, UserAnswersPresent>
     */
    /* public function getUserAnswers(): Collection
    {
        return $this->userAnswers;
    }

    public function addUserAnswer(UserAnswersPresent $userAnswer): static
    {
        if (!$this->userAnswers->contains($userAnswer)) {
            $this->userAnswers->add($userAnswer);
            $userAnswer->setVerbId($this);
        }

        return $this;
    } */

    /* public function removeUserAnswer(UserAnswersPresent $userAnswer): static
    {
        if ($this->userAnswers->removeElement($userAnswer)) {
            // set the owning side to null (unless already changed)
            if ($userAnswer->getVerbId() === $this) {
                $userAnswer->setVerbId(null);
            }
        }

        return $this;
    } */
}
