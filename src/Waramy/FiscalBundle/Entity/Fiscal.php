<?php

namespace Waramy\FiscalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiscal
 */
class Fiscal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cin;


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
     * Set cin
     *
     * @param string $cin
     * @return Fiscal
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }
}
