<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommunityUser
 *
 * @ORM\Table(name="communities_users")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\CommunityUserRepository")
 */
class CommunityUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="community_user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="community_user_is_admin", type="boolean")
     */
    private $isAdmin;


    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\Community", inversedBy="users")
     * @ORM\JoinColumn(nullable=false, name="community_id", referencedColumnName="community_id")
     */
    private $community;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\User", inversedBy="communities")
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
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return CommunityUser
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set community
     *
     * @param \APIRestBundle\Entity\Community $community
     * @return CommunityUser
     */
    public function setCommunity(\APIRestBundle\Entity\Community $community)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return \APIRestBundle\Entity\Community 
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Set user
     *
     * @param \APIRestBundle\Entity\User $user
     * @return CommunityUser
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
