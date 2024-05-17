<?php

namespace App\Entity;

use App\Repository\AdvVoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdvVoyageRepository::class)]
class AdvVoyage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Duree = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_depart = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_fin = null;

    #[ORM\Column(length: 255)]
    private ?string $Url_image = null;

    #[ORM\Column(length: 255)]
    private ?string $Resume = null;

    #[ORM\Column]
    private ?int $Nombre_pers_min = null;

    #[ORM\Column]
    private ?int $Nombre_pers_max = null;

    #[ORM\Column]
    private ?int $Prix = null;

    /**
     * @var Collection<int, AdvPays>
     */
    #[ORM\ManyToMany(targetEntity: AdvPays::class, inversedBy: 'AdvVoyages')]
    private Collection $AdvPays;

    /**
     * @var Collection<int, AdvCategorie>
     */
    #[ORM\ManyToMany(targetEntity: AdvCategorie::class, inversedBy: 'AdvVoyages')]
    private Collection $advCategorie;

    #[ORM\ManyToOne]
    private ?advUser $advUser = null;

    /**
     * @var Collection<int, advReservation>
     */
    #[ORM\OneToMany(targetEntity: advReservation::class, mappedBy: 'AdvVoyage')]
    private Collection $advReservation;

    public function __construct()
    {
        $this->AdvPays = new ArrayCollection();
        $this->advCategorie = new ArrayCollection();
        $this->advReservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?int
    {
        return $this->Duree;
    }

    public function setDuree(int $Duree): static
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->Date_depart;
    }

    public function setDateDepart(\DateTimeInterface $Date_depart): static
    {
        $this->Date_depart = $Date_depart;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->Date_fin;
    }

    public function setDateFin(\DateTimeInterface $Date_fin): static
    {
        $this->Date_fin = $Date_fin;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->Url_image;
    }

    public function setUrlImage(string $Url_image): static
    {
        $this->Url_image = $Url_image;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->Resume;
    }

    public function setRésumé(string $Resume): static
    {
        $this->Resume = $Resume;

        return $this;
    }

    public function getNombrePersMin(): ?int
    {
        return $this->Nombre_pers_min;
    }

    public function setNombrePersMin(int $Nombre_pers_min): static
    {
        $this->Nombre_pers_min = $Nombre_pers_min;

        return $this;
    }

    public function getNombrePersMax(): ?int
    {
        return $this->Nombre_pers_max;
    }

    public function setNombrePersMax(int $Nombre_pers_max): static
    {
        $this->Nombre_pers_max = $Nombre_pers_max;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    /**
     * @return Collection<int, AdvPays>
     */
    public function getAdvPays(): Collection
    {
        return $this->AdvPays;
    }

    public function addAdvPay(AdvPays $advPay): static
    {
        if (!$this->AdvPays->contains($advPay)) {
            $this->AdvPays->add($advPay);
        }

        return $this;
    }

    public function removeAdvPay(AdvPays $advPay): static
    {
        $this->AdvPays->removeElement($advPay);

        return $this;
    }

    /**
     * @return Collection<int, AdvCategorie>
     */
    public function getAdvCategorie(): Collection
    {
        return $this->advCategorie;
    }

    public function addAdvCategorie(advCategorie $advCategorie): static
    {
        if (!$this->advCategorie->contains($advCategorie)) {
            $this->advCategorie->add($advCategorie);
        }

        return $this;
    }

    public function removeAdvCategorie(advCategorie $advCategorie): static
    {
        $this->advCategorie->removeElement($advCategorie);

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

    /**
     * @return Collection<int, AdvReservation>
     */
    public function getAdvReservation(): Collection
    {
        return $this->advReservation;
    }

    public function addAdvReservation(advReservation $advReservation): static
    {
        if (!$this->advReservation->contains($advReservation)) {
            $this->advReservation->add($advReservation);
            $advReservation->setAdvVoyage($this);
        }

        return $this;
    }

    public function removeAdvReservation(advReservation $advReservation): static
    {
        if ($this->advReservation->removeElement($advReservation)) {
            // set the owning side to null (unless already changed)
            if ($advReservation->getAdvVoyage() === $this) {
                $advReservation->setAdvVoyage(null);
            }
        }

        return $this;
    }
}
