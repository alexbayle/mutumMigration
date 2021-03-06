<?php

namespace Proxies\__CG__\Mutum\Bundle\V1Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PozMangopay extends \Mutum\Bundle\V1Bundle\Entity\PozMangopay implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayName', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayPass', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayLegalUser', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayWallet');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayName', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayPass', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayLegalUser', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozMangopay' . "\0" . 'mangopayWallet');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PozMangopay $proxy) {
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
    public function getMangopayId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getMangopayId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMangopayId', array());

        return parent::getMangopayId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMangopayName($mangopayName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMangopayName', array($mangopayName));

        return parent::setMangopayName($mangopayName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMangopayName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMangopayName', array());

        return parent::getMangopayName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMangopayPass($mangopayPass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMangopayPass', array($mangopayPass));

        return parent::setMangopayPass($mangopayPass);
    }

    /**
     * {@inheritDoc}
     */
    public function getMangopayPass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMangopayPass', array());

        return parent::getMangopayPass();
    }

    /**
     * {@inheritDoc}
     */
    public function setMangopayLegalUser($mangopayLegalUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMangopayLegalUser', array($mangopayLegalUser));

        return parent::setMangopayLegalUser($mangopayLegalUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getMangopayLegalUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMangopayLegalUser', array());

        return parent::getMangopayLegalUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setMangopayWallet($mangopayWallet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMangopayWallet', array($mangopayWallet));

        return parent::setMangopayWallet($mangopayWallet);
    }

    /**
     * {@inheritDoc}
     */
    public function getMangopayWallet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMangopayWallet', array());

        return parent::getMangopayWallet();
    }

}
