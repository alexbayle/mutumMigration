<?php

namespace Proxies\__CG__\Mutum\Bundle\V2Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Achievements extends \Mutum\Bundle\V2Bundle\Entity\Achievements implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiName', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiDesc', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiTitle', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiCat', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiOrder', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiWin', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiCondition');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiName', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiDesc', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiTitle', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiCat', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiOrder', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiWin', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Achievements' . "\0" . 'achiCondition');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Achievements $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAchiId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAchiId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiId', array());

        return parent::getAchiId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiName($achiName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiName', array($achiName));

        return parent::setAchiName($achiName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiName', array());

        return parent::getAchiName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiDesc($achiDesc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiDesc', array($achiDesc));

        return parent::setAchiDesc($achiDesc);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiDesc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiDesc', array());

        return parent::getAchiDesc();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiTitle($achiTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiTitle', array($achiTitle));

        return parent::setAchiTitle($achiTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiTitle', array());

        return parent::getAchiTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiCat($achiCat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiCat', array($achiCat));

        return parent::setAchiCat($achiCat);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiCat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiCat', array());

        return parent::getAchiCat();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiOrder($achiOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiOrder', array($achiOrder));

        return parent::setAchiOrder($achiOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiOrder', array());

        return parent::getAchiOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiWin($achiWin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiWin', array($achiWin));

        return parent::setAchiWin($achiWin);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiWin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiWin', array());

        return parent::getAchiWin();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchiCondition($achiCondition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchiCondition', array($achiCondition));

        return parent::setAchiCondition($achiCondition);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchiCondition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchiCondition', array());

        return parent::getAchiCondition();
    }

}