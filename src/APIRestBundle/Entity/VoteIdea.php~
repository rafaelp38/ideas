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

}
