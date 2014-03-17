<?php

namespace Waramy\AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountryLanguage
 */
class CountryLanguage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $language;

    /**
     * @var boolean
     */
    private $isOfficial;

    /**
     * @var string
     */
    private $percentage;


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
     * Set countryCode
     *
     * @param string $countryCode
     * @return CountryLanguage
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return CountryLanguage
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set isOfficial
     *
     * @param boolean $isOfficial
     * @return CountryLanguage
     */
    public function setIsOfficial($isOfficial)
    {
        $this->isOfficial = $isOfficial;

        return $this;
    }

    /**
     * Get isOfficial
     *
     * @return boolean 
     */
    public function getIsOfficial()
    {
        return $this->isOfficial;
    }

    /**
     * Set percentage
     *
     * @param string $percentage
     * @return CountryLanguage
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return string 
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
}
