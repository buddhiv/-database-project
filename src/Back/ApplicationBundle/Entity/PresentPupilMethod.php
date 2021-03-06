<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresentPupilMethod
 *
 * @ORM\Table(name="present_pupil_method", indexes={@ORM\Index(name="assign_1", columns={"student_id"})})
 * @ORM\Entity
 */
class PresentPupilMethod
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
     * @var \Student
     *
     * @ORM\ManyToOne(targetEntity="Student")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="student_id", referencedColumnName="student_id")
     * })
     */
    private $student;



    /**
     * Set method
     *
     * @param \Back\ApplicationBundle\Entity\Method $method
     *
     * @return PresentPupilMethod
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
     * Set student
     *
     * @param \Back\ApplicationBundle\Entity\Student $student
     *
     * @return PresentPupilMethod
     */
    public function setStudent(\Back\ApplicationBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \Back\ApplicationBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }
}
