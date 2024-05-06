<?php

namespace App\Entity;

use App\Repository\AdvStatutRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdvStatutRepository::class)]
class AdvStatut
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    /**
     * @var Collection<int, AdvReservation>
     */
    #[ORM\OneToMany(targetEntity: AdvReservation::class, mappedBy: 'advStatut')]
    private Collection $advReservations;

    public function __construct()
    {
        $this->advReservations = new ArrayCollection();
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
     * @return Collection<int, AdvReservation>
     */
    public function getAdvReservations(): Collection
    {
        return $this->advReservations;
    }

    public function addAdvReservation(AdvReservation $advReservation): static
    {
        if (!$this->advReservations->contains($advReservation)) {
            $this->advReservations->add($advReservation);
            $advReservation->setAdvStatut($this);
        }

        return $this;
    }

    public function removeAdvReservation(AdvReservation $advReservation): static
    {
        if ($this->advReservations->removeElement($advReservation)) {
            // set the owning side to null (unless already changed)
            if ($advReservation->getAdvStatut() === $this) {
                $advReservation->setAdvStatut(null);
            }
        }

        return $this;
    }
}
