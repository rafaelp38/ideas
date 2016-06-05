<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_current_date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\Idea", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false, name="idea_id", referencedColumnName="idea_id")
     */
    private $idea;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false, name="user_id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="APIRestBundle\Entity\VoteIdea", mappedBy="idea")
     */
    private $votes;


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
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
