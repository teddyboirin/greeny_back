<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\DefisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"categorie": "exact"})
 * @ORM\Entity(repositoryClass=DefisRepository::class)
 */
class Defis
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
     * @ORM\Column(type="integer")
     */
    private $points;

    /**
     * @ORM\Column(type="boolean")
     */
    private $recurrence;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="accomplished")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="defis")
     */
    private $waiting;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->waiting = new ArrayCollection();
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

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getRecurrence(): ?bool
    {
        return $this->recurrence;
    }

    public function setRecurrence(bool $recurrence): self
    {
        $this->recurrence = $recurrence;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->catégorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addAccomplished($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeAccomplished($this);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getWaiting(): Collection
    {
        return $this->waiting;
    }

    public function addWaiting(User $waiting): self
    {
        if (!$this->waiting->contains($waiting)) {
            $this->waiting[] = $waiting;
        }

        return $this;
    }

    public function removeWaiting(User $waiting): self
    {
        if ($this->waiting->contains($waiting)) {
            $this->waiting->removeElement($waiting);
        }

        return $this;
    }
}
