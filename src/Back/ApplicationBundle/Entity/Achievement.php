<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achievement
 *
 * @ORM\Table(name="achievement", indexes={@ORM\Index(name="has_2", columns={"student_id", "school_id"})})
 * @ORM\Entity
 */
class Achievement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="achievement_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $achievementId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var \StudentSchool
     *
     * @ORM\ManyToOne(targetEntity="StudentSchool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="student_id"),
     *   @ORM\JoinColumn(name="school_id", referencedColumnName="school_id")
     * })
     */
    private $student;



    /**
     * Get achievementId
     *
     * @return integer
     */
    public function getAchievementId()
    {
        return $this->achievementId;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return Achievement
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set student
     *
     * @param \Back\ApplicationBundle\Entity\StudentSchool $student
     *
     * @return Achievement
     */
    public function setStudent(\Back\ApplicationBundle\Entity\StudentSchool $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \Back\ApplicationBundle\Entity\StudentSchool
     */
    public function getStudent()
    {
        return $this->student;
    }
}
