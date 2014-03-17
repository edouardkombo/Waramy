<?php

namespace Waramy\ContractBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quotation
 */
class Quotation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $contractId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $notesBefore;

    /**
     * @var string
     */
    private $notesAfter;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var boolean
     */
    private $valid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contractId
     *
     * @param integer $contractId
     * @return Quotation
     */
    public function setContractId($contractId)
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Get contractId
     *
     * @return integer 
     */
    public function getContractId()
    {
        return $this->contractId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Quotation
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Quotation
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Quotation
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Quotation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set notesBefore
     *
     * @param string $notesBefore
     * @return Quotation
     */
    public function setNotesBefore($notesBefore)
    {
        $this->notesBefore = $notesBefore;

        return $this;
    }

    /**
     * Get notesBefore
     *
     * @return string 
     */
    public function getNotesBefore()
    {
        return $this->notesBefore;
    }

    /**
     * Set notesAfter
     *
     * @param string $notesAfter
     * @return Quotation
     */
    public function setNotesAfter($notesAfter)
    {
        $this->notesAfter = $notesAfter;

        return $this;
    }

    /**
     * Get notesAfter
     *
     * @return string 
     */
    public function getNotesAfter()
    {
        return $this->notesAfter;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Quotation
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Quotation
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Quotation
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Quotation
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return Quotation
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean 
     */
    public function getValid()
    {
        return $this->valid;
    }
}
