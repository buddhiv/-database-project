<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Child
 *
 * @ORM\Table(name="child", indexes={@ORM\Index(name="having", columns={"applicant_id"}), @ORM\Index(name="applying_on", columns={"method_id"})})
 * @ORM\Entity
 */
class Child
{
    /**
     * @var integer
     *
     * @ORM\Column(name="child_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $childId;

    /**
     * @var string
     *
     * @ORM\Column(name="name_in_full", type="string", length=255, nullable=true)
     */
    private $nameInFull;

    /**
     * @var string
     *
     * @ORM\Column(name="name_with_initials", type="string", length=255, nullable=true)
     */
    private $nameWithInitials;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="religion", type="string", length=31, nullable=true)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=7, nullable=true)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="medium", type="string", length=15, nullable=false)
     */
    private $medium;

    /**
     * @var integer
     *
     * @ORM\Column(name="Location_infolocation_info_id", type="integer", nullable=false)
     */
    private $locationInfolocationInfoId;

    /**
     * @var \Method
     *
     * @ORM\ManyToOne(targetEntity="Method")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="method_id", referencedColumnName="method_id")
     * })
     */
    private $method;

    /**
     * @var \Applicant
     *
     * @ORM\ManyToOne(targetEntity="Applicant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="applicant_id", referencedColumnName="applicant_id")
     * })
     */
    private $applicant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="School", mappedBy="child")
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
     * Get childId
     *
     * @return integer
     */
    public function getChildId()
    {
        return $this->childId;
    }

    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return Child
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
     * Set nameWithInitials
     *
     * @param string $nameWithInitials
     *
     * @return Child
     */
    public function setNameWithInitials($nameWithInitials)
    {
        $this->nameWithInitials = $nameWithInitials;

        return $this;
    }

    /**
     * Get nameWithInitials
     *
     * @return string
     */
    public function getNameWithInitials()
    {
        return $this->nameWithInitials;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return Child
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set religion
     *
     * @param string $religion
     *
     * @return Child
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Child
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Child
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
     * Set medium
     *
     * @param string $medium
     *
     * @return Child
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Get medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Set locationInfolocationInfoId
     *
     * @param integer $locationInfolocationInfoId
     *
     * @return Child
     */
    public function setLocationInfolocationInfoId($locationInfolocationInfoId)
    {
        $this->locationInfolocationInfoId = $locationInfolocationInfoId;

        return $this;
    }

    /**
     * Get locationInfolocationInfoId
     *
     * @return integer
     */
    public function getLocationInfolocationInfoId()
    {
        return $this->locationInfolocationInfoId;
    }

    /**
     * Set method
     *
     * @param \Back\ApplicationBundle\Entity\Method $method
     *
     * @return Child
     */
    public function setMethod(\Back\ApplicationBundle\Entity\Method $method = null)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return \Back\ApplicationBundle\Entity\Method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set applicant
     *
     * @param \Back\ApplicationBundle\Entity\Applicant $applicant
     *
     * @return Child
     */
    public function setApplicant(\Back\ApplicationBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \Back\ApplicationBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Add school
     *
     * @param \Back\ApplicationBundle\Entity\School $school
     *
     * @return Child
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
