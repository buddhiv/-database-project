<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applicant
 *
 * @ORM\Table(name="applicant")
 * @ORM\Entity
 */
class Applicant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="applicant_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applicantId;

    /**
     * @var string
     *
     * @ORM\Column(name="name_in_full", type="string", length=255, nullable=false)
     */
    private $nameInFull;

    /**
     * @var string
     *
     * @ORM\Column(name="name_with_initials", type="string", length=255, nullable=false)
     */
    private $nameWithInitials;

    /**
     * @var string
     *
     * @ORM\Column(name="nic", type="string", length=15, nullable=false)
     */
    private $nic;

    /**
     * @var string
     *
     * @ORM\Column(name="religion", type="string", length=31, nullable=false)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sri_lankan", type="boolean", nullable=false)
     */
    private $isSriLankan;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=31, nullable=false)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="divisional_sec_area", type="string", length=63, nullable=false)
     */
    private $divisionalSecArea;

    /**
     * @var string
     *
     * @ORM\Column(name="grama_niladari_divi", type="string", length=63, nullable=false)
     */
    private $gramaNiladariDivi;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=15, nullable=true)
     */
    private $telephone;



    /**
     * Get applicantId
     *
     * @return integer
     */
    public function getApplicantId()
    {
        return $this->applicantId;
    }

    /**
     * Set nameInFull
     *
     * @param string $nameInFull
     *
     * @return Applicant
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
     * @return Applicant
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
     * Set nic
     *
     * @param string $nic
     *
     * @return Applicant
     */
    public function setNic($nic)
    {
        $this->nic = $nic;

        return $this;
    }

    /**
     * Get nic
     *
     * @return string
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Set religion
     *
     * @param string $religion
     *
     * @return Applicant
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
     * Set address
     *
     * @param string $address
     *
     * @return Applicant
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
     * Set isSriLankan
     *
     * @param boolean $isSriLankan
     *
     * @return Applicant
     */
    public function setIsSriLankan($isSriLankan)
    {
        $this->isSriLankan = $isSriLankan;

        return $this;
    }

    /**
     * Get isSriLankan
     *
     * @return boolean
     */
    public function getIsSriLankan()
    {
        return $this->isSriLankan;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return Applicant
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
     * @return Applicant
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
     * Set gramaNiladariDivi
     *
     * @param string $gramaNiladariDivi
     *
     * @return Applicant
     */
    public function setGramaNiladariDivi($gramaNiladariDivi)
    {
        $this->gramaNiladariDivi = $gramaNiladariDivi;

        return $this;
    }

    /**
     * Get gramaNiladariDivi
     *
     * @return string
     */
    public function getGramaNiladariDivi()
    {
        return $this->gramaNiladariDivi;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Applicant
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
}
