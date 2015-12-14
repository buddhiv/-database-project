<?php

namespace Back\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marks
 *
 * @ORM\Table(name="marks", indexes={@ORM\Index(name="graded_with", columns={"child_id"})})
 * @ORM\Entity
 */
class Marks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mark_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $markId;

    /**
     * @var integer
     *
     * @ORM\Column(name="case", type="integer", nullable=true)
     */
    private $case;

    /**
     * @var integer
     *
     * @ORM\Column(name="marks", type="integer", nullable=true)
     */
    private $marks;

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
     * Get markId
     *
     * @return integer
     */
    public function getMarkId()
    {
        return $this->markId;
    }

    /**
     * Set case
     *
     * @param integer $case
     *
     * @return Marks
     */
    public function setCase($case)
    {
        $this->case = $case;

        return $this;
    }

    /**
     * Get case
     *
     * @return integer
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * Set marks
     *
     * @param integer $marks
     *
     * @return Marks
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;

        return $this;
    }

    /**
     * Get marks
     *
     * @return integer
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Set child
     *
     * @param \Back\ApplicationBundle\Entity\Child $child
     *
     * @return Marks
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
