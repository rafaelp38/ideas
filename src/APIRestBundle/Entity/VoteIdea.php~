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
     * @ORM\Column(name="vote_idea_positif", type="boolean")
     */
    private $positif;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\Idea", inversedBy="ideas")
     * @ORM\JoinColumn(nullable=false, name="idea_id", referencedColumnName="idea_id")
    */
    private $idea;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\User", inversedBy="votes")
     * @ORM\JoinColumn(nullable=false, name="user_id", referencedColumnName="user_id")
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
     * @param \APIRestBundle\Entity\Idea $idea
     * @return VoteIdea
     */
    public function setIdea(\APIRestBundle\Entity\Idea $idea)
    {
        $this->idea = $idea;

        return $this;
    }

    /**
     * Get idea
     *
     * @return \APIRestBundle\Entity\Idea 
     */
    public function getIdea()
    {
        return $this->idea;
    }

    /**
     * Set user
     *
     * @param \APIRestBundle\Entity\User $user
     * @return VoteIdea
     */
    public function setUser(\APIRestBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \APIRestBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
