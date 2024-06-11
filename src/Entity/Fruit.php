<?php

namespace App\Entity;

use App\Repository\FruitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FruitRepository::class)]
class Fruit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Coktail>
     */
    #[ORM\OneToMany(targetEntity: Coktail::class, mappedBy: 'fruits')]
    private Collection $coktails;

    #[ORM\ManyToOne(inversedBy: 'fruits')]
    private ?Couleur $couleurs = null;

    public function __construct()
    {
        $this->coktails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Coktail>
     */
    public function getCoktails(): Collection
    {
        return $this->coktails;
    }

    public function addCoktail(Coktail $coktail): static
    {
        if (!$this->coktails->contains($coktail)) {
            $this->coktails->add($coktail);
            $coktail->setFruits($this);
        }

        return $this;
    }

    public function removeCoktail(Coktail $coktail): static
    {
        if ($this->coktails->removeElement($coktail)) {
            // set the owning side to null (unless already changed)
            if ($coktail->getFruits() === $this) {
                $coktail->setFruits(null);
            }
        }

        return $this;
    }

    public function getCouleurs(): ?Couleur
    {
        return $this->couleurs;
    }

    public function setCouleurs(?Couleur $couleurs): static
    {
        $this->couleurs = $couleurs;

        return $this;
    }
}
