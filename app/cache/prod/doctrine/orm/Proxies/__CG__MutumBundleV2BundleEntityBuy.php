<?php

namespace Proxies\__CG__\Mutum\Bundle\V2Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Buy extends \Mutum\Bundle\V2Bundle\Entity\Buy implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyName', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyPrice', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyGift', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyColor', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyColor2', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyActive', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buySlug', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'v1');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyName', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyPrice', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyGift', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyColor', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyColor2', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buyActive', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'buySlug', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Buy' . "\0" . 'v1');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Buy $proxy) {
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
    public function setBuyId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyId', array($id));

        return parent::setBuyId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getBuyId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyId', array());

        return parent::getBuyId();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyName($buyName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyName', array($buyName));

        return parent::setBuyName($buyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyName', array());

        return parent::getBuyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyPrice($buyPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyPrice', array($buyPrice));

        return parent::setBuyPrice($buyPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyPrice', array());

        return parent::getBuyPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyGift($buyGift)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyGift', array($buyGift));

        return parent::setBuyGift($buyGift);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyGift()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyGift', array());

        return parent::getBuyGift();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyColor($buyColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyColor', array($buyColor));

        return parent::setBuyColor($buyColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyColor', array());

        return parent::getBuyColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyColor2($buyColor2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyColor2', array($buyColor2));

        return parent::setBuyColor2($buyColor2);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyColor2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyColor2', array());

        return parent::getBuyColor2();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuyActive($buyActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuyActive', array($buyActive));

        return parent::setBuyActive($buyActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuyActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuyActive', array());

        return parent::getBuyActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuySlug($buySlug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuySlug', array($buySlug));

        return parent::setBuySlug($buySlug);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuySlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuySlug', array());

        return parent::getBuySlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getV1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getV1', array());

        return parent::getV1();
    }

    /**
     * {@inheritDoc}
     */
    public function setV1($v1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setV1', array($v1));

        return parent::setV1($v1);
    }

}