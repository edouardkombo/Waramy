<?php

namespace Waramy\ContractBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 */
class Contract
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $garageId;

    /**
     * @var integer
     */
    private $vehicleId;

    /**
     * @var string
     */
    private $inventoryBefore;

    /**
     * @var string
     */
    private $inventoryAfter;

    /**
     * @var string
     */
    private $problemsAfter;

    /**
     * @var string
     */
    private $milesBefore;

    /**
     * @var string
     */
    private $milesAfter;

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
     * Set garageId
     *
     * @param integer $garageId
     * @return Contract
     */
    public function setGarageId($garageId)
    {
        $this->garageId = $garageId;

        return $this;
    }

    /**
     * Get garageId
     *
     * @return integer 
     */
    public function getGarageId()
    {
        return $this->garageId;
    }

    /**
     * Set vehicleId
     *
     * @param integer $vehicleId
     * @return Contract
     */
    public function setVehicleId($vehicleId)
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }

    /**
     * Get vehicleId
     *
     * @return integer 
     */
    public function getVehicleId()
    {
        return $this->vehicleId;
    }

    /**
     * Set inventoryBefore
     *
     * @param string $inventoryBefore
     * @return Contract
     */
    public function setInventoryBefore($inventoryBefore)
    {
        $this->inventoryBefore = $inventoryBefore;

        return $this;
    }

    /**
     * Get inventoryBefore
     *
     * @return string 
     */
    public function getInventoryBefore()
    {
        return $this->inventoryBefore;
    }

    /**
     * Set inventoryAfter
     *
     * @param string $inventoryAfter
     * @return Contract
     */
    public function setInventoryAfter($inventoryAfter)
    {
        $this->inventoryAfter = $inventoryAfter;

        return $this;
    }

    /**
     * Get inventoryAfter
     *
     * @return string 
     */
    public function getInventoryAfter()
    {
        return $this->inventoryAfter;
    }

    /**
     * Set problemsAfter
     *
     * @param string $problemsAfter
     * @return Contract
     */
    public function setProblemsAfter($problemsAfter)
    {
        $this->problemsAfter = $problemsAfter;

        return $this;
    }

    /**
     * Get problemsAfter
     *
     * @return string 
     */
    public function getProblemsAfter()
    {
        return $this->problemsAfter;
    }

    /**
     * Set milesBefore
     *
     * @param string $milesBefore
     * @return Contract
     */
    public function setMilesBefore($milesBefore)
    {
        $this->milesBefore = $milesBefore;

        return $this;
    }

    /**
     * Get milesBefore
     *
     * @return string 
     */
    public function getMilesBefore()
    {
        return $this->milesBefore;
    }

    /**
     * Set milesAfter
     *
     * @param string $milesAfter
     * @return Contract
     */
    public function setMilesAfter($milesAfter)
    {
        $this->milesAfter = $milesAfter;

        return $this;
    }

    /**
     * Get milesAfter
     *
     * @return string 
     */
    public function getMilesAfter()
    {
        return $this->milesAfter;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return Contract
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Insurance
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
     * @return Insurance
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
