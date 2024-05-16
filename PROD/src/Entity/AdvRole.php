<?php

namespace App\Entity;

use App\Repository\AdvRoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdvRoleRepository::class)]
class AdvRole
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    /**
     * @var Collection<int, AdvUser>
     */
    #[ORM\OneToMany(targetEntity: AdvUser::class, mappedBy: 'AdvRole')]
    private Collection $advUsers;

    public function __construct()
    {
        $this->advUsers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * @return Collection<int, AdvUser>
     */
    public function getAdvUsers(): Collection
    {
        return $this->advUsers;
    }

    public function addAdvUser(AdvUser $advUser): static
    {
        if (!$this->advUsers->contains($advUser)) {
            $this->advUsers->add($advUser);
            $advUser->setAdvRole($this);
        }

        return $this;
    }

    public function removeAdvUser(AdvUser $advUser): static
    {
        if ($this->advUsers->removeElement($advUser)) {
            // set the owning side to null (unless already changed)
            if ($advUser->getAdvRole() === $this) {
                $advUser->setAdvRole(null);
            }
        }

        return $this;
    }
}
