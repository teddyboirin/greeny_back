<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\DefisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"defis:read"}},
 *
 *     denormalizationContext={"groups"={"defis:write"}},

 *     itemOperations={
 *          "get"={
 *              "normalization_context"={"groups"={"defis:read", "defis:item:get"}}},
 *          "put",
 *          "patch",
 *          "delete"
 *     },
 *
 *     collectionOperations={
 *     "post",
 *     "get"
 *     }
 * )
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
     * @Groups({"defis:read", "defis:write", "user=read"})
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"defis:read", "defis:write"})
     */
    private $points;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"defis:read", "defis:write"})
     */
    private $recurrence;

    /**
     * @ORM\Column(type="text")
     * @Groups({"defis:read", "defis:write"})
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"defis:read", "defis:write"})
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"defis:read", "defis:write"})
     */
    private $niveau;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="defis" , cascade={"persist"})
     * @Groups({"defis:read", "defis:write"})
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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
        $this->categorie = $categorie;

        return $this;
    }


    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

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
            $user->addDefi($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeDefi($this);
        }

        return $this;
    }
}
