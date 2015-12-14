<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocationDurationInfo
 *
 * @ORM\Table(name="location_duration_info", indexes={@ORM\Index(name="has", columns={"child_id"})})
 * @ORM\Entity
 */
class LocationDurationInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="location_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="grama_div", type="string", length=255, nullable=true)
     */
    private $gramaDiv;

    /**
     * @var string
     *
     * @ORM\Column(name="polling_div", type="string", length=255, nullable=true)
     */
    private $pollingDiv;

    /**
     * @var string
     *
     * @ORM\Column(name="polling_district", type="string", length=255, nullable=true)
     */
    private $pollingDistrict;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirm", type="boolean", nullable=true)
     */
    private $confirm;

    /**
     * @var \Child
     *
     * @ORM\ManyToOne(targetEntity="Child")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="child_id", referencedColumnName="child_id")
     * })
     */
    private $child;



    /**
     * Get locationId
     *
     * @return integer
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     *
     * @return LocationDurationInfo
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
     * Set gramaDiv
     *
     * @param string $gramaDiv
     *
     * @return LocationDurationInfo
     */
    public function setGramaDiv($gramaDiv)
    {
        $this->gramaDiv = $gramaDiv;

        return $this;
    }

    /**
     * Get gramaDiv
     *
     * @return string
     */
    public function getGramaDiv()
    {
        return $this->gramaDiv;
    }

    /**
     * Set pollingDiv
     *
     * @param string $pollingDiv
     *
     * @return LocationDurationInfo
     */
    public function setPollingDiv($pollingDiv)
    {
        $this->pollingDiv = $pollingDiv;

        return $this;
    }

    /**
     * Get pollingDiv
     *
     * @return string
     */
    public function getPollingDiv()
    {
        return $this->pollingDiv;
    }

    /**
     * Set pollingDistrict
     *
     * @param string $pollingDistrict
     *
     * @return LocationDurationInfo
     */
    public function setPollingDistrict($pollingDistrict)
    {
        $this->pollingDistrict = $pollingDistrict;

        return $this;
    }

    /**
     * Get pollingDistrict
     *
     * @return string
     */
    public function getPollingDistrict()
    {
        return $this->pollingDistrict;
    }

    /**
     * Set confirm
     *
     * @param boolean $confirm
     *
     * @return LocationDurationInfo
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;

        return $this;
    }

    /**
     * Get confirm
     *
     * @return boolean
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set child
     *
     * @param \Back\ApplicationBundle\Entity\Child $child
     *
     * @return LocationDurationInfo
     */
    public function setChild(\Back\ApplicationBundle\Entity\Child $child = null)
    {
        $this->child = $child;

        return $this;
    }

    /**
     * Get child
     *
     * @return \Back\ApplicationBundle\Entity\Child
     */
    public function getChild()
    {
        return $this->child;
    }
}
