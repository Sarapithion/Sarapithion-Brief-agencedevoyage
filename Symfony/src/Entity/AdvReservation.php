<?php

namespace App\Entity;

use App\Repository\AdvReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AdvReservationRepository::class)]
class AdvReservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]    
    #[Groups(['api_reservation_index'])]
    private ?string $Message = null;

    #[ORM\ManyToOne(inversedBy: 'advReservation')]
    private ?AdvVoyage $advVoyage = null;

    #[ORM\ManyToOne(inversedBy: 'advReservation')]
    private ?AdvUser $advUser = null;

    #[ORM\ManyToOne(inversedBy: 'advReservations')]
    private ?advStatut $advStatut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): static
    {
        $this->Message = $Message;

        return $this;
    }

    public function getAdvVoyage(): ?AdvVoyage
    {
        return $this->advVoyage;
    }

    public function setAdvVoyage(?AdvVoyage $advVoyage): static
    {
        $this->advVoyage = $advVoyage;

        return $this;
    }

    public function getAdvUser(): ?AdvUser
    {
        return $this->advUser;
    }

    public function setAdvUser(?AdvUser $advUser): static
    {
        $this->advUser = $advUser;

        return $this;
    }

    public function getAdvStatut(): ?advStatut
    {
        return $this->advStatut;
    }

    public function setAdvStatut(?advStatut $advStatut): static
    {
        $this->advStatut = $advStatut;

        return $this;
    }
}
