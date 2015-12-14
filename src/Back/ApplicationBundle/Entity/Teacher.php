<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 *
 * @ORM\Table(name="teacher")
 * @ORM\Entity
 */
class Teacher
{
    /**
     * @var integer
     *
     * @ORM\Column(name="teacher_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teacherId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="name_in_full", type="string", length=255, nullable=true)
     */
    private $nameInFull;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="School", inversedBy="teacher")
     * @ORM\JoinTable(name="teacher_school",
     *   joinColumns={
     *     @ORM\JoinColumn(name="teacher_id", referencedColumnName="teacher_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="school_id", referencedColumnName="school_id")
     *   }
     * )
     */
    private $school;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->school = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get teacherId
     *
     * @return integer
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Teacher
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
     * Set address
     *
     * @param string $address
     *
     * @return Teacher
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return Teacher
     */
    public function setNameInFull($nameInFull)
    {
        $this->nameInFull = $nameInFull;

        return $this;
    }

    /**
     * Get nameInFull
     *
     * @return string
     */
    public function getNameInFull()
    {
        return $this->nameInFull;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Teacher
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Add school
     *
     * @param \Back\ApplicationBundle\Entity\School $school
     *
     * @return Teacher
     */
    public function addSchool(\Back\ApplicationBundle\Entity\School $school)
    {
        $this->school[] = $school;

        return $this;
    }

    /**
     * Remove school
     *
     * @param \Back\ApplicationBundle\Entity\School $school
     */
    public function removeSchool(\Back\ApplicationBundle\Entity\School $school)
    {
        $this->school->removeElement($school);
    }

    /**
     * Get school
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSchool()
    {
        return $this->school;
    }
}
