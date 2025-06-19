<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Utilisateur
{
    /** @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer") */
    private $id;

    /** @ORM\Column(type="string") */
    private $prenom;

    /** @ORM\Column(type="string") */
    private $nom;

    /** @ORM\Column(type="string", unique=true) */
    private $email;

    /** @ORM\Column(type="string") */
    private $role;

    /** @ORM\Column(type="string") */
    private $motDePasse;
}
