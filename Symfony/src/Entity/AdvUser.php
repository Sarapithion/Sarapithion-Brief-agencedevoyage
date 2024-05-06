<?php

namespace App\Entity;

use App\Repository\AdvUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdvUserRepository::class)]
class AdvUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prénom = null;

    #[ORM\Column(length: 255)]
    private ?string $Mail = null;

    #[ORM\Column(length: 15)]
    private ?string $Téléphone = null;

    #[ORM\Column(length: 255)]
    private ?string $Mdp = null;

    /**
     * @var Collection<int, advReservation>
     */
    #[ORM\OneToMany(targetEntity: advReservation::class, mappedBy: 'advUser')]
    private Collection $advReservation;

    #[ORM\ManyToOne(inversedBy: 'advUsers')]
    private ?advRole $advRole = null;

    public function __construct()
    {
        $this->advReservation = new ArrayCollection();
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

    public function getPrénom(): ?string
    {
        return $this->Prénom;
    }

    public function setPrénom(string $Prénom): static
    {
        $this->Prénom = $Prénom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): static
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getTéléphone(): ?string
    {
        return $this->Téléphone;
    }

    public function setTéléphone(string $Téléphone): static
    {
        $this->Téléphone = $Téléphone;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->Mdp;
    }

    public function setMdp(string $Mdp): static
    {
        $this->Mdp = $Mdp;

        return $this;
    }

    /**
     * @return Collection<int, advReservation>
     */
    public function getAdvReservation(): Collection
    {
        return $this->advReservation;
    }

    public function addAdvReservation(advReservation $advReservation): static
    {
        if (!$this->advReservation->contains($advReservation)) {
            $this->advReservation->add($advReservation);
            $advReservation->setAdvUser($this);
        }

        return $this;
    }

    public function removeAdvReservation(advReservation $advReservation): static
    {
        if ($this->advReservation->removeElement($advReservation)) {
            // set the owning side to null (unless already changed)
            if ($advReservation->getAdvUser() === $this) {
                $advReservation->setAdvUser(null);
            }
        }

        return $this;
    }

    public function getAdvRole(): ?advRole
    {
        return $this->advRole;
    }

    public function setAdvRole(?advRole $advRole): static
    {
        $this->advRole = $advRole;

        return $this;
    }
}
