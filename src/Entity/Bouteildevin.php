<?php

namespace App\Entity;

use App\Repository\BouteildevinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BouteildevinRepository::class)]
class Bouteildevin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bouteildevin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBouteildevin(): ?string
    {
        return $this->bouteildevin;
    }

    public function setBouteildevin(string $bouteildevin): static
    {
        $this->bouteildevin = $bouteildevin;

        return $this;
    }
}
