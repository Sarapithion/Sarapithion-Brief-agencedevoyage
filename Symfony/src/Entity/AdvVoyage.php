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
    private ?int $Durée = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_départ = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_fin = null;

    #[ORM\Column(length: 255)]
    private ?string $Url_image = null;

    #[ORM\Column(length: 255)]
    private ?string $Résumé = null;

    #[ORM\Column]
    private ?int $Nombre_pers_min = null;

    #[ORM\Column]
    private ?int $Nombre_pers_max = null;

    #[ORM\Column]
    private ?int $Prix = null;

    /**
     * @var Collection<int, AdvPays>
     */
    #[ORM\ManyToMany(targetEntity: AdvPays::class, inversedBy: 'advVoyages')]
    private Collection $AdvPays;

    /**
     * @var Collection<int, advCategorie>
     */
    #[ORM\ManyToMany(targetEntity: advCategorie::class, inversedBy: 'advVoyages')]
    private Collection $advCategorie;

    #[ORM\ManyToOne]
    private ?advUser $advUser = null;

    /**
     * @var Collection<int, advReservation>
     */
    #[ORM\OneToMany(targetEntity: advReservation::class, mappedBy: 'advVoyage')]
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

    public function getDurée(): ?int
    {
        return $this->Durée;
    }

    public function setDurée(int $Durée): static
    {
        $this->Durée = $Durée;

        return $this;
    }

    public function getDateDépart(): ?\DateTimeInterface
    {
        return $this->Date_départ;
    }

    public function setDateDépart(\DateTimeInterface $Date_départ): static
    {
        $this->Date_départ = $Date_départ;

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

    public function getRésumé(): ?string
    {
        return $this->Résumé;
    }

    public function setRésumé(string $Résumé): static
    {
        $this->Résumé = $Résumé;

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
     * @return Collection<int, advCategorie>
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

    public function getAdvUser(): ?advUser
    {
        return $this->advUser;
    }

    public function setAdvUser(?advUser $advUser): static
    {
        $this->advUser = $advUser;

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
