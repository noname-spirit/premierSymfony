<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM; // le coeur de Doctrine => Mapper

#[ORM\Entity()]
class Pays
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column()]
    private ?int $pupolation = null;

    #[ORM\Column(length: 255)]
    private ?string $capital = null;

    #[ORM\Column()]
    private ?\DateTime $dt_creation = null;
}
