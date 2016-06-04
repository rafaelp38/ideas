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


}
