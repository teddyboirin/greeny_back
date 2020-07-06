<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $points;

    /**
     * @ORM\ManyToMany(targetEntity=Defis::class, inversedBy="users")
     */
    private $accomplished;

    /**
     * @ORM\ManyToMany(targetEntity=Defis::class, mappedBy="waiting")
     */
    private $defis;

    public function __construct()
    {
        $this->accomplished = new ArrayCollection();
        $this->defis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPoints(): ?string
    {
        return $this->points;
    }

    public function setPoints(string $points): self
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return Collection|Defis[]
     */
    public function getAccomplished(): Collection
    {
        return $this->accomplished;
    }

    public function addAccomplished(Defis $accomplished): self
    {
        if (!$this->accomplished->contains($accomplished)) {
            $this->accomplished[] = $accomplished;
        }

        return $this;
    }

    public function removeAccomplished(Defis $accomplished): self
    {
        if ($this->accomplished->contains($accomplished)) {
            $this->accomplished->removeElement($accomplished);
        }

        return $this;
    }

    /**
     * @return Collection|Defis[]
     */
    public function getDefis(): Collection
    {
        return $this->defis;
    }

    public function addDefi(Defis $defi): self
    {
        if (!$this->defis->contains($defi)) {
            $this->defis[] = $defi;
            $defi->addWaiting($this);
        }

        return $this;
    }

    public function removeDefi(Defis $defi): self
    {
        if ($this->defis->contains($defi)) {
            $this->defis->removeElement($defi);
            $defi->removeWaiting($this);
        }

        return $this;
    }
}
