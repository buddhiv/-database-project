<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acadamic
 *
 * @ORM\Table(name="acadamic")
 * @ORM\Entity
 */
class Acadamic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="acadamic_id", type="integer", nullable=false)
     */
    private $acadamicId;

    /**
     * @var string
     *
     * @ORM\Column(name="exam", type="string", length=255, nullable=true)
     */
    private $exam;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=31, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=7, nullable=false)
     */
    private $result;

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
     * Set acadamicId
     *
     * @param integer $acadamicId
     *
     * @return Acadamic
     */
    public function setAcadamicId($acadamicId)
    {
        $this->acadamicId = $acadamicId;

        return $this;
    }

    /**
     * Get acadamicId
     *
     * @return integer
     */
    public function getAcadamicId()
    {
        return $this->acadamicId;
    }

    /**
     * Set exam
     *
     * @param string $exam
     *
     * @return Acadamic
     */
    public function setExam($exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return string
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Acadamic
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return Acadamic
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set achievement
     *
     * @param \Back\ApplicationBundle\Entity\Achievement $achievement
     *
     * @return Acadamic
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
