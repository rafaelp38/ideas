<?php

namespace APIRestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Ideas
*
* @ORM\Table(name="ideas")
* @ORM\Entity(repositoryClass="APIRestBundle\Repository\IdeaRepository")
*/
class Idea
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="idea_id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="idea_title", type="string", length=100)
	*/
	private $title;

	/**
	 * @var text
	 *
	 * @ORM\Column(name="idea_text", type="text", nullable=true)
	*/
	private $text;

	/**
	 * @var date
	 *
	 * @ORM\Column(name="idea_date_depot", type="date", nullable=true)
	*/

	private $dateDepot;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="idea_file_pdf", type="string", length=25, nullable=true)
	*/
	private $file_pdf;

	/**
	 * @var int
	 *
	 * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\Domaine", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="domaine_id", referencedColumnName="domaine_id")
    */
	private $domaine;

	/**
	 * @var int
	 *
	 * @ORM\ManyToOne(targetEntity="APIRestBundle\Entity\User", cascade={"persist","remove"})
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
     * Set title
     *
     * @param string $title
     * @return Idea
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Idea
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set dateDepot
     *
     * @param \DateTime $dateDepot
     * @return Idea
     */
    public function setDateDepot($dateDepot)
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Get dateDepot
     *
     * @return \DateTime 
     */
    public function getDateDepot()
    {
        return $this->dateDepot;
    }

    /**
     * Set file_pdf
     *
     * @param string $filePdf
     * @return Idea
     */
    public function setFilePdf($filePdf)
    {
        $this->file_pdf = $filePdf;

        return $this;
    }

    /**
     * Get file_pdf
     *
     * @return string 
     */
    public function getFilePdf()
    {
        return $this->file_pdf;
    }

    /**
     * Set domaine
     *
     * @param \APIRestBundle\Entity\Domaine $domaine
     * @return Idea
     */
    public function setDomaine(\APIRestBundle\Entity\Domaine $domaine = null)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return \APIRestBundle\Entity\Domaine 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set user
     *
     * @param \APIRestBundle\Entity\User $user
     * @return Idea
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
