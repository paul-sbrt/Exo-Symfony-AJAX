<?php

namespace App\Entity;

use App\Repository\CoktailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoktailRepository::class)]
class Coktail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'coktails')]
    private ?Fruit $fruits = null;

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

    public function getFruits(): ?Fruit
    {
        return $this->fruits;
    }

    public function setFruits(?Fruit $fruits): static
    {
        $this->fruits = $fruits;

        return $this;
    }
}
