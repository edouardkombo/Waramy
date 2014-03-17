<?php

namespace Waramy\AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 */
class Country
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $continent;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $surfaceArea;

    /**
     * @var integer
     */
    private $indepYear;

    /**
     * @var integer
     */
    private $population;

    /**
     * @var string
     */
    private $lifeExpectancy;

    /**
     * @var string
     */
    private $gnp;

    /**
     * @var string
     */
    private $gnpOld;

    /**
     * @var string
     */
    private $localName;

    /**
     * @var string
     */
    private $governmentForm;

    /**
     * @var string
     */
    private $headOfState;

    /**
     * @var integer
     */
    private $capital;

    /**
     * @var string
     */
    private $code2;


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
     * Set code
     *
     * @param string $code
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Country
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
     * Set continent
     *
     * @param string $continent
     * @return Country
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Get continent
     *
     * @return string 
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Country
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set surfaceArea
     *
     * @param string $surfaceArea
     * @return Country
     */
    public function setSurfaceArea($surfaceArea)
    {
        $this->surfaceArea = $surfaceArea;

        return $this;
    }

    /**
     * Get surfaceArea
     *
     * @return string 
     */
    public function getSurfaceArea()
    {
        return $this->surfaceArea;
    }

    /**
     * Set indepYear
     *
     * @param integer $indepYear
     * @return Country
     */
    public function setIndepYear($indepYear)
    {
        $this->indepYear = $indepYear;

        return $this;
    }

    /**
     * Get indepYear
     *
     * @return integer 
     */
    public function getIndepYear()
    {
        return $this->indepYear;
    }

    /**
     * Set population
     *
     * @param integer $population
     * @return Country
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get population
     *
     * @return integer 
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set lifeExpectancy
     *
     * @param string $lifeExpectancy
     * @return Country
     */
    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;

        return $this;
    }

    /**
     * Get lifeExpectancy
     *
     * @return string 
     */
    public function getLifeExpectancy()
    {
        return $this->lifeExpectancy;
    }

    /**
     * Set gnp
     *
     * @param string $gnp
     * @return Country
     */
    public function setGnp($gnp)
    {
        $this->gnp = $gnp;

        return $this;
    }

    /**
     * Get gnp
     *
     * @return string 
     */
    public function getGnp()
    {
        return $this->gnp;
    }

    /**
     * Set gnpOld
     *
     * @param string $gnpOld
     * @return Country
     */
    public function setGnpOld($gnpOld)
    {
        $this->gnpOld = $gnpOld;

        return $this;
    }

    /**
     * Get gnpOld
     *
     * @return string 
     */
    public function getGnpOld()
    {
        return $this->gnpOld;
    }

    /**
     * Set localName
     *
     * @param string $localName
     * @return Country
     */
    public function setLocalName($localName)
    {
        $this->localName = $localName;

        return $this;
    }

    /**
     * Get localName
     *
     * @return string 
     */
    public function getLocalName()
    {
        return $this->localName;
    }

    /**
     * Set governmentForm
     *
     * @param string $governmentForm
     * @return Country
     */
    public function setGovernmentForm($governmentForm)
    {
        $this->governmentForm = $governmentForm;

        return $this;
    }

    /**
     * Get governmentForm
     *
     * @return string 
     */
    public function getGovernmentForm()
    {
        return $this->governmentForm;
    }

    /**
     * Set headOfState
     *
     * @param string $headOfState
     * @return Country
     */
    public function setHeadOfState($headOfState)
    {
        $this->headOfState = $headOfState;

        return $this;
    }

    /**
     * Get headOfState
     *
     * @return string 
     */
    public function getHeadOfState()
    {
        return $this->headOfState;
    }

    /**
     * Set capital
     *
     * @param integer $capital
     * @return Country
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return integer 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set code2
     *
     * @param string $code2
     * @return Country
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;

        return $this;
    }

    /**
     * Get code2
     *
     * @return string 
     */
    public function getCode2()
    {
        return $this->code2;
    }
}
