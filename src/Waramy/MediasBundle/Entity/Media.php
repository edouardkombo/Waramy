<?php

namespace Waramy\MediasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 */
class Media
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $legend;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var boolean
     */
    private $main;

    /**
     * @var integer
     */
    private $ownerId;

    /**
     * @var integer
     */
    private $contractId;

    /**
     * @var integer
     */
    private $inventory;
    
    /**
     * @var \DateTime
     */
    private $createdAt;
    
    /**
     * @var \DateTime
     */
    private $updatedAt;    


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
     * Set url
     *
     * @param string $url
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set legend
     *
     * @param string $legend
     * @return Media
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * Get legend
     *
     * @return string 
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set main
     *
     * @param boolean $main
     * @return Media
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return boolean 
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     * @return Media
     */
    public function setTypeId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->ownerId;
    }

    /**
     * Set contractId
     *
     * @param integer $contractId
     * @return Media
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
     * Set inventory
     *
     * @param integer $inventory
     * @return Media
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory
     *
     * @return integer 
     */
    public function getInventory()
    {
        return $this->inventory;
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
    }    
}
