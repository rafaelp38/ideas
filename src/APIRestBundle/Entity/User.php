<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="user_prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var \Date
     *
     * @ORM\Column(name="user_naissance", type="date", nullable=true)
     */
    private $naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=255)
     */
    private $password;


    
}
