<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nickname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: ConjugationPresent::class)]
    private Collection $conjugationPresents;

    #[ORM\OneToMany(mappedBy: 'user_id', targetEntity: UserAnswersPresent::class, orphanRemoval: true)]
    private Collection $userAnswersPresents;

    public function __construct()
    {
        $this->conjugationPresents = new ArrayCollection();
        $this->userAnswersPresents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): static
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, ConjugationPresent>
     */
    public function getConjugationPresents(): Collection
    {
        return $this->conjugationPresents;
    }

    public function addConjugationPresent(ConjugationPresent $conjugationPresent): static
    {
        if (!$this->conjugationPresents->contains($conjugationPresent)) {
            $this->conjugationPresents->add($conjugationPresent);
            $conjugationPresent->setUser($this);
        }

        return $this;
    }

    public function removeConjugationPresent(ConjugationPresent $conjugationPresent): static
    {
        if ($this->conjugationPresents->removeElement($conjugationPresent)) {
            // set the owning side to null (unless already changed)
            if ($conjugationPresent->getUser() === $this) {
                $conjugationPresent->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserAnswersPresent>
     */
    public function getUserAnswersPresents(): Collection
    {
        return $this->userAnswersPresents;
    }

    public function addUserAnswersPresent(UserAnswersPresent $userAnswersPresent): static
    {
        if (!$this->userAnswersPresents->contains($userAnswersPresent)) {
            $this->userAnswersPresents->add($userAnswersPresent);
            $userAnswersPresent->setUserId($this);
        }

        return $this;
    }

    public function removeUserAnswersPresent(UserAnswersPresent $userAnswersPresent): static
    {
        if ($this->userAnswersPresents->removeElement($userAnswersPresent)) {
            // set the owning side to null (unless already changed)
            if ($userAnswersPresent->getUserId() === $this) {
                $userAnswersPresent->setUserId(null);
            }
        }

        return $this;
    }
}
