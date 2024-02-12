<?php

namespace App\Entity;

use App\Repository\TrucRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrucRepository::class)]
class Truc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $naime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->naime;
    }

    public function setName(string $naime): static
    {
        $this->naime = $naime;

        return $this;
    }
}
