<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Community
 *
 * @ORM\Table(name="communities")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\CommunityRepository")
 */
class Community
{
    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="community_name", type="string", length=100, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="community_description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="APIRestBundle\Entity\Idea", mappedBy="communities", cascade={"persist"})
     *
     */
    private $ideas;

    /**
     * @ORM\OneToMany(targetEntity="APIRestBundle\Entity\CommunityUser", mappedBy="user")
     */
    private $users;


}
