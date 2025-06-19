<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Guide
{
    /** @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer") */
    private $id;

    /** @ORM\Column(type="string") */
    private $prenom;

    /** @ORM\Column(type="string") */
    private $nom;

    /** @ORM\Column(type="string", nullable=true) */
    private $photo;

    /** @ORM\Column(type="string") */
    private $statut;
    
    /** @ORM\Column(type="string") */
    private $paysAffectation;
}
