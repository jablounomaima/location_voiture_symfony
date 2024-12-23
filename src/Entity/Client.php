<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Client extends Utilisateur
{
    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $tlf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    public function getTlf(): ?int
    {
        return $this->tlf;
    }

    public function setTlf(?int $tlf): self
    {
        $this->tlf = $tlf;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }
}
