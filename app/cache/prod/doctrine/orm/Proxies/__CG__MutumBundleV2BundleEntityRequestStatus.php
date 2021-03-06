<?php

namespace Proxies\__CG__\Mutum\Bundle\V2Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RequestStatus extends \Mutum\Bundle\V2Bundle\Entity\RequestStatus implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsName', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsBorrowerInfo', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsLenderInfo', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'v1');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsName', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsBorrowerInfo', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'reqsLenderInfo', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\RequestStatus' . "\0" . 'v1');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RequestStatus $proxy) {
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
    public function setReqsId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqsId', array($id));

        return parent::setReqsId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqsId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getReqsId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqsId', array());

        return parent::getReqsId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqsName($reqsName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqsName', array($reqsName));

        return parent::setReqsName($reqsName);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqsName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqsName', array());

        return parent::getReqsName();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqsBorrowerInfo($reqsBorrowerInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqsBorrowerInfo', array($reqsBorrowerInfo));

        return parent::setReqsBorrowerInfo($reqsBorrowerInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqsBorrowerInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqsBorrowerInfo', array());

        return parent::getReqsBorrowerInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqsLenderInfo($reqsLenderInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqsLenderInfo', array($reqsLenderInfo));

        return parent::setReqsLenderInfo($reqsLenderInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqsLenderInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqsLenderInfo', array());

        return parent::getReqsLenderInfo();
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
