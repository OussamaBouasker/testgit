<?php

namespace App\Entity;

use App\Repository\YosrRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YosrRepository::class)]
class Yosr
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $y = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getY(): ?string
    {
        return $this->y;
    }

    public function setY(string $y): static
    {
        $this->y = $y;

        return $this;
    }
}
