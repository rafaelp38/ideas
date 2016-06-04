<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteIdea
 *
 * @ORM\Table(name="votes_ideas")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\VoteIdeaRepository")
 */
class VoteIdea
{
    /**
     * @var int
     *
     * @ORM\Column(name="vote_idea_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="vote_idea_positif", type="boolean", length=255)
     */
    private $positif;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Idea")
     * @ORM\JoinColumn(nullable=false)
    */
    private $idea;

    /**
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
    */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set positif
     *
     * @param boolean $positif
     * @return VoteIdea
     */
    public function setPositif($positif)
    {
        $this->positif = $positif;

        return $this;
    }

    /**
     * Get positif
     *
     * @return boolean 
     */
    public function getPositif()
    {
        return $this->positif;
    }

    /**
     * Set idea
     *
     * @param \OC\PlatformBundle\Entity\Idea $idea
     * @return VoteIdea
     */
    public function setIdea(\OC\PlatformBundle\Entity\Idea $idea)
    {
        $this->idea = $idea;

        return $this;
    }

    /**
     * Get idea
     *
     * @return \OC\PlatformBundle\Entity\Idea 
     */
    public function getIdea()
    {
        return $this->idea;
    }

    /**
     * Set user
     *
     * @param \OC\PlatformBundle\Entity\User $user
     * @return VoteIdea
     */
    public function setUser(\OC\PlatformBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \OC\PlatformBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
