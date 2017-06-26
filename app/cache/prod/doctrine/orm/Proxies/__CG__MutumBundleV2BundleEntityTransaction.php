<?php

namespace Proxies\__CG__\Mutum\Bundle\V2Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Transaction extends \Mutum\Bundle\V2Bundle\Entity\Transaction implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'buy', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranPayinId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranCardId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranDateCreation', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'user');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'buy', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranPayinId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranCardId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'tranDateCreation', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Transaction' . "\0" . 'user');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Transaction $proxy) {
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
    public function getTranId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getTranId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranId', array());

        return parent::getTranId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranPayinId($tranPayinId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranPayinId', array($tranPayinId));

        return parent::setTranPayinId($tranPayinId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranPayinId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranPayinId', array());

        return parent::getTranPayinId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranCardId($tranCardId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranCardId', array($tranCardId));

        return parent::setTranCardId($tranCardId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranCardId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranCardId', array());

        return parent::getTranCardId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranDateCreation($tranDateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranDateCreation', array($tranDateCreation));

        return parent::setTranDateCreation($tranDateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranDateCreation', array());

        return parent::getTranDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function getBuy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuy', array());

        return parent::getBuy();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuy(\Mutum\Bundle\V2Bundle\Entity\Buy $buy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuy', array($buy));

        return parent::setBuy($buy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Mutum\Bundle\V2Bundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

}