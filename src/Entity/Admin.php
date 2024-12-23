<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Admin extends Utilisateur
{
    public function getId(): ?int
    {
        return parent::getId(); // Utilisation de la méthode getId() de la classe Utilisateur
    }
}
