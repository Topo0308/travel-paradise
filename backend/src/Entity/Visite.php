<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Visite
{
    /** @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer") */
    private $id;
    
    /** @ORM\Column(type="string") */ private $lieu;
    /** @ORM\Column(type="string") */ private $pays;
    /** @ORM\Column(type="string", nullable=true) */ private $photo;
    /** @ORM\Column(type="datetime") */ private $debut;
    /** @ORM\Column(type="datetime") */ private $fin;
    /** @ORM\ManyToOne(targetEntity=Guide::class) */ private $guide;
    /** @ORM\Column(type="json") */ private $visiteurs = [];
}
