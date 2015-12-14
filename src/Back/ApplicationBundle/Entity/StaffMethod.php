<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StaffMethod
 *
 * @ORM\Table(name="staff_method", indexes={@ORM\Index(name="assign_3", columns={"teacher_id"})})
 * @ORM\Entity
 */
class StaffMethod
{
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
     * @var \Teacher
     *
     * @ORM\ManyToOne(targetEntity="Teacher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teacher_id", referencedColumnName="teacher_id")
     * })
     */
    private $teacher;



    /**
     * Set method
     *
     * @param \Back\ApplicationBundle\Entity\Method $method
     *
     * @return StaffMethod
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

    /**
     * Set teacher
     *
     * @param \Back\ApplicationBundle\Entity\Teacher $teacher
     *
     * @return StaffMethod
     */
    public function setTeacher(\Back\ApplicationBundle\Entity\Teacher $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \Back\ApplicationBundle\Entity\Teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
