<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NonAcadamic
 *
 * @ORM\Table(name="non acadamic", indexes={@ORM\Index(name="achievement_id", columns={"achievement_id"})})
 * @ORM\Entity
 */
class NonAcadamic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="non_acadamic_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nonAcadamicId;

    /**
     * @var string
     *
     * @ORM\Column(name="case", type="string", length=255, nullable=true)
     */
    private $case;

    /**
     * @var integer
     *
     * @ORM\Column(name="place", type="integer", nullable=true)
     */
    private $place;

    /**
     * @var \Achievement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_id", referencedColumnName="achievement_id")
     * })
     */
    private $achievement;



    /**
     * Set nonAcadamicId
     *
     * @param integer $nonAcadamicId
     *
     * @return NonAcadamic
     */
    public function setNonAcadamicId($nonAcadamicId)
    {
        $this->nonAcadamicId = $nonAcadamicId;

        return $this;
    }

    /**
     * Get nonAcadamicId
     *
     * @return integer
     */
    public function getNonAcadamicId()
    {
        return $this->nonAcadamicId;
    }

    /**
     * Set case
     *
     * @param string $case
     *
     * @return NonAcadamic
     */
    public function setCase($case)
    {
        $this->case = $case;

        return $this;
    }

    /**
     * Get case
     *
     * @return string
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * Set place
     *
     * @param integer $place
     *
     * @return NonAcadamic
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set achievement
     *
     * @param \Back\ApplicationBundle\Entity\Achievement $achievement
     *
     * @return NonAcadamic
     */
    public function setAchievement(\Back\ApplicationBundle\Entity\Achievement $achievement)
    {
        $this->achievement = $achievement;

        return $this;
    }

    /**
     * Get achievement
     *
     * @return \Back\ApplicationBundle\Entity\Achievement
     */
    public function getAchievement()
    {
        return $this->achievement;
    }
}
