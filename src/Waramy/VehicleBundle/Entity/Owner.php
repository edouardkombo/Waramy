<?php

namespace Waramy\VehicleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owner
 */
class Owner
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $vehicleId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $since;

    /**
     * @var \DateTime
     */
    private $until;

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
     * Set vehicleId
     *
     * @param integer $vehicleId
     * @return Owner
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
     * Set userId
     *
     * @param integer $userId
     * @return Owner
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set since
     *
     * @param \DateTime $since
     * @return Owner
     */
    public function setSince($since)
    {
        $this->since = $since;

        return $this;
    }

    /**
     * Get since
     *
     * @return \DateTime 
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * Set until
     *
     * @param \DateTime $until
     * @return Owner
     */
    public function setUntil($until)
    {
        $this->until = $until;

        return $this;
    }

    /**
     * Get until
     *
     * @return \DateTime 
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return Owner
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
