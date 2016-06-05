<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="APIRestBundle\Repository\ImageRepository")
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="image_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="image_alt", type="string", length=255)
     */
    private $alt;

    /**
     * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\Idea", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false, name="idea_id", referencedColumnName="idea_id")
    */
    private $idea;



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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set idea
     *
     * @param \APIRestBundle\Entity\Idea $idea
     * @return Image
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
}
