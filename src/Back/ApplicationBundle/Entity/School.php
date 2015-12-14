<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity
 */
class School
{
    /**
     * @var integer
     *
     * @ORM\Column(name="school_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schoolId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=31, nullable=true)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="divisional_sec_area", type="string", length=63, nullable=true)
     */
    private $divisionalSecArea;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=15, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=31, nullable=false)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_rural", type="integer", nullable=true)
     */
    private $isRural;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Child", inversedBy="school")
     * @ORM\JoinTable(name="school_child",
     *   joinColumns={
     *     @ORM\JoinColumn(name="school_id", referencedColumnName="school_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="child_id", referencedColumnName="child_id")
     *   }
     * )
     */
    private $child;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Student", mappedBy="school")
     */
    private $student;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Teacher", mappedBy="school")
     */
    private $teacher;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->child = new \Doctrine\Common\Collections\ArrayCollection();
        $this->student = new \Doctrine\Common\Collections\ArrayCollection();
        $this->teacher = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get schoolId
     *
     * @return integer
     */
    public function getSchoolId()
    {
        return $this->schoolId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return School
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return School
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
     * Set district
     *
     * @param string $district
     *
     * @return School
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set divisionalSecArea
     *
     * @param string $divisionalSecArea
     *
     * @return School
     */
    public function setDivisionalSecArea($divisionalSecArea)
    {
        $this->divisionalSecArea = $divisionalSecArea;

        return $this;
    }

    /**
     * Get divisionalSecArea
     *
     * @return string
     */
    public function getDivisionalSecArea()
    {
        return $this->divisionalSecArea;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return School
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return School
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set isRural
     *
     * @param integer $isRural
     *
     * @return School
     */
    public function setIsRural($isRural)
    {
        $this->isRural = $isRural;

        return $this;
    }

    /**
     * Get isRural
     *
     * @return integer
     */
    public function getIsRural()
    {
        return $this->isRural;
    }

    /**
     * Add child
     *
     * @param \Back\ApplicationBundle\Entity\Child $child
     *
     * @return School
     */
    public function addChild(\Back\ApplicationBundle\Entity\Child $child)
    {
        $this->child[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \Back\ApplicationBundle\Entity\Child $child
     */
    public function removeChild(\Back\ApplicationBundle\Entity\Child $child)
    {
        $this->child->removeElement($child);
    }

    /**
     * Get child
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Add student
     *
     * @param \Back\ApplicationBundle\Entity\Student $student
     *
     * @return School
     */
    public function addStudent(\Back\ApplicationBundle\Entity\Student $student)
    {
        $this->student[] = $student;

        return $this;
    }

    /**
     * Remove student
     *
     * @param \Back\ApplicationBundle\Entity\Student $student
     */
    public function removeStudent(\Back\ApplicationBundle\Entity\Student $student)
    {
        $this->student->removeElement($student);
    }

    /**
     * Get student
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Add teacher
     *
     * @param \Back\ApplicationBundle\Entity\Teacher $teacher
     *
     * @return School
     */
    public function addTeacher(\Back\ApplicationBundle\Entity\Teacher $teacher)
    {
        $this->teacher[] = $teacher;

        return $this;
    }

    /**
     * Remove teacher
     *
     * @param \Back\ApplicationBundle\Entity\Teacher $teacher
     */
    public function removeTeacher(\Back\ApplicationBundle\Entity\Teacher $teacher)
    {
        $this->teacher->removeElement($teacher);
    }

    /**
     * Get teacher
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
