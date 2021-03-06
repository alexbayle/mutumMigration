<?php

namespace Proxies\__CG__\Mutum\Bundle\V2Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Abuse extends \Mutum\Bundle\V2Bundle\Entity\Abuse implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusType', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusTableId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusTitle', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusText', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusDateCreation', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusAborted', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusSeen', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusArchived');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusType', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusTableId', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusTitle', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusText', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusDateCreation', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusAborted', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusSeen', '' . "\0" . 'Mutum\\Bundle\\V2Bundle\\Entity\\Abuse' . "\0" . 'abusArchived');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Abuse $proxy) {
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
    public function getAbusId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAbusId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusId', array());

        return parent::getAbusId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusType($abusType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusType', array($abusType));

        return parent::setAbusType($abusType);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusType', array());

        return parent::getAbusType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusTableId($abusTableId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusTableId', array($abusTableId));

        return parent::setAbusTableId($abusTableId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusTableId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusTableId', array());

        return parent::getAbusTableId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusTitle($abusTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusTitle', array($abusTitle));

        return parent::setAbusTitle($abusTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusTitle', array());

        return parent::getAbusTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusText($abusText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusText', array($abusText));

        return parent::setAbusText($abusText);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusText', array());

        return parent::getAbusText();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusDateCreation($abusDateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusDateCreation', array($abusDateCreation));

        return parent::setAbusDateCreation($abusDateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusDateCreation', array());

        return parent::getAbusDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusAborted($abusAborted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusAborted', array($abusAborted));

        return parent::setAbusAborted($abusAborted);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusAborted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusAborted', array());

        return parent::getAbusAborted();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusSeen($abusSeen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusSeen', array($abusSeen));

        return parent::setAbusSeen($abusSeen);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusSeen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusSeen', array());

        return parent::getAbusSeen();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbusArchived($abusArchived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbusArchived', array($abusArchived));

        return parent::setAbusArchived($abusArchived);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbusArchived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbusArchived', array());

        return parent::getAbusArchived();
    }

}
