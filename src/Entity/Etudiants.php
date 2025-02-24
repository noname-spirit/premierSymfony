<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM; // le coeur de Doctrine => Mapper
use phpDocumentor\Reflection\Types\Boolean;


#[ORM\Entity()]
class Etudiants
{

    #[ORM\Id]
    #[ORM\GeneratedValue()]


    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?int $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $age = null;

    #[ORM\Column()]
    private ?\DateTime $dt_naissance = null;

    #[ORM\Column()]
    private ?Bool $is_admin = null;
}
