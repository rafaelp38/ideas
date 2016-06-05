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



}
