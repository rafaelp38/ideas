<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteComment.php
 *
 * @ORM\Table(name="votes_comments")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\VoteCommentRepository")
 */
class VoteComment
{
    /**
     * @var int
     *
     * @ORM\Column(name="vote_comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="vote_comment_positif", type="boolean")
     */
    private $positif;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\Comment", inversedBy="votes")
     * @ORM\JoinColumn(nullable=false, name="comment_id", referencedColumnName="comment_id")
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\User")
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
     * @return VoteComment
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
     * Set comment
     *
     * @param \APIRestBundle\Entity\Comment $comment
     * @return VoteComment
     */
    public function setComment(\APIRestBundle\Entity\Comment $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \APIRestBundle\Entity\Comment 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set user
     *
     * @param \APIRestBundle\Entity\User $user
     * @return VoteComment
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
