<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="domaines")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\DomaineRepository")
 */
class Domaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="domaine_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine_libelle", type="string", length=255)
     */
    private $libelle;


}
