<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity
 */
class Student
{
    /**
     * @var integer
     *
     * @ORM\Column(name="student_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $studentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="name_in_full", type="string", length=63, nullable=false)
     */
    private $nameInFull;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="School", inversedBy="student")
     * @ORM\JoinTable(name="student_school",
     *   joinColumns={
     *     @ORM\JoinColumn(name="student_id", referencedColumnName="student_id")
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
     * Get studentId
     *
     * @return integer
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Student
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return Student
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
     * Set address
     *
     * @param string $address
     *
     * @return Student
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
     * Add school
     *
     * @param \Back\ApplicationBundle\Entity\School $school
     *
     * @return Student
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
