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

}
