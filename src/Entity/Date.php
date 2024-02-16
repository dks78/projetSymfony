<?php

namespace App\Entity;

use App\Repository\DateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DateRepository::class)]
class Date
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NumberDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberDate(): ?string
    {
        return $this->NumberDate;
    }

    public function setNumberDate(string $NumberDate): static
    {
        $this->NumberDate = $NumberDate;

        return $this;
    }
}
