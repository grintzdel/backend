<?php

namespace App\Entity;

use App\Repository\FibreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FibreRepository::class)]
class Fibre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dep_code = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepCode(): ?string
    {
        return $this->dep_code;
    }

    public function setDepCode(string $dep_code): static
    {
        $this->dep_code = $dep_code;

        return $this;
    }
}
