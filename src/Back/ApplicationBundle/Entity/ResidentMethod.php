<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResidentMethod
 *
 * @ORM\Table(name="resident_method")
 * @ORM\Entity
 */
class ResidentMethod
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resident_id", type="integer", nullable=false)
     */
    private $residentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_of_years_spent", type="integer", nullable=true)
     */
    private $numOfYearsSpent;

    /**
     * @var string
     *
     * @ORM\Column(name="ownership", type="string", length=127, nullable=false)
     */
    private $ownership;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_of_closes_schools", type="integer", nullable=true)
     */
    private $numOfClosesSchools;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirm", type="boolean", nullable=true)
     */
    private $confirm;

    /**
     * @var \Method
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Method")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="method_id", referencedColumnName="method_id")
     * })
     */
    private $method;



    /**
     * Set residentId
     *
     * @param integer $residentId
     *
     * @return ResidentMethod
     */
    public function setResidentId($residentId)
    {
        $this->residentId = $residentId;

        return $this;
    }

    /**
     * Get residentId
     *
     * @return integer
     */
    public function getResidentId()
    {
        return $this->residentId;
    }

    /**
     * Set numOfYearsSpent
     *
     * @param integer $numOfYearsSpent
     *
     * @return ResidentMethod
     */
    public function setNumOfYearsSpent($numOfYearsSpent)
    {
        $this->numOfYearsSpent = $numOfYearsSpent;

        return $this;
    }

    /**
     * Get numOfYearsSpent
     *
     * @return integer
     */
    public function getNumOfYearsSpent()
    {
        return $this->numOfYearsSpent;
    }

    /**
     * Set ownership
     *
     * @param string $ownership
     *
     * @return ResidentMethod
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

    /**
     * Get ownership
     *
     * @return string
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Set numOfClosesSchools
     *
     * @param integer $numOfClosesSchools
     *
     * @return ResidentMethod
     */
    public function setNumOfClosesSchools($numOfClosesSchools)
    {
        $this->numOfClosesSchools = $numOfClosesSchools;

        return $this;
    }

    /**
     * Get numOfClosesSchools
     *
     * @return integer
     */
    public function getNumOfClosesSchools()
    {
        return $this->numOfClosesSchools;
    }

    /**
     * Set confirm
     *
     * @param boolean $confirm
     *
     * @return ResidentMethod
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
     * Set method
     *
     * @param \Back\ApplicationBundle\Entity\Method $method
     *
     * @return ResidentMethod
     */
    public function setMethod(\Back\ApplicationBundle\Entity\Method $method)
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
}
