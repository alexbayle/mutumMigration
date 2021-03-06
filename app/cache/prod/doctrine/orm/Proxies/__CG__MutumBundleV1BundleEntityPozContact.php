<?php

namespace Proxies\__CG__\Mutum\Bundle\V1Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PozContact extends \Mutum\Bundle\V1Bundle\Entity\PozContact implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactDestUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactDateCreation', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactDateAccept', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactStatus');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactDestUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactDateCreation', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactDateAccept', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozContact' . "\0" . 'contactStatus');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PozContact $proxy) {
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
    public function getContactId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getContactId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactId', array());

        return parent::getContactId();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactUserId($contactUserId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactUserId', array($contactUserId));

        return parent::setContactUserId($contactUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactUserId', array());

        return parent::getContactUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactDestUserId($contactDestUserId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactDestUserId', array($contactDestUserId));

        return parent::setContactDestUserId($contactDestUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactDestUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactDestUserId', array());

        return parent::getContactDestUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactDateCreation($contactDateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactDateCreation', array($contactDateCreation));

        return parent::setContactDateCreation($contactDateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactDateCreation', array());

        return parent::getContactDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactDateAccept($contactDateAccept)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactDateAccept', array($contactDateAccept));

        return parent::setContactDateAccept($contactDateAccept);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactDateAccept()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactDateAccept', array());

        return parent::getContactDateAccept();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactStatus($contactStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactStatus', array($contactStatus));

        return parent::setContactStatus($contactStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactStatus', array());

        return parent::getContactStatus();
    }

}
