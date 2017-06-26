<?php

namespace Proxies\__CG__\Mutum\Bundle\V1Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PozRequest extends \Mutum\Bundle\V1Bundle\Entity\PozRequest implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqArtUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqArtId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDatetime', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDateFrom', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDateTo', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDateNext', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqMessageNext', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPtsNext', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPts', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqMessage', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCode', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCaution', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCardId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionAsk', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionMotif', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionMessage', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionAskDate', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionBankRefund', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionSeen', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionRefuseMessage', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionReported', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqStatus', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPreteurNote', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqEmprunteurNote', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqArtNote', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPreteurArchive', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqEmprunteurArchive', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqEmprunteurRead', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPreteurRead');
        }

        return array('__isInitialized__', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqArtUserId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqArtId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDatetime', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDateFrom', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDateTo', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqDateNext', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqMessageNext', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPtsNext', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPts', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqMessage', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCode', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCaution', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCardId', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionAsk', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionMotif', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionMessage', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionAskDate', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionBankRefund', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionSeen', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionRefuseMessage', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqCautionReported', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqStatus', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPreteurNote', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqEmprunteurNote', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqArtNote', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPreteurArchive', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqEmprunteurArchive', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqEmprunteurRead', '' . "\0" . 'Mutum\\Bundle\\V1Bundle\\Entity\\PozRequest' . "\0" . 'reqPreteurRead');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PozRequest $proxy) {
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
    public function getReqId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getReqId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqId', array());

        return parent::getReqId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqUserId($reqUserId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqUserId', array($reqUserId));

        return parent::setReqUserId($reqUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqUserId', array());

        return parent::getReqUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqArtUserId($reqArtUserId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqArtUserId', array($reqArtUserId));

        return parent::setReqArtUserId($reqArtUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqArtUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqArtUserId', array());

        return parent::getReqArtUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqArtId($reqArtId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqArtId', array($reqArtId));

        return parent::setReqArtId($reqArtId);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqArtId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqArtId', array());

        return parent::getReqArtId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqDatetime($reqDatetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqDatetime', array($reqDatetime));

        return parent::setReqDatetime($reqDatetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqDatetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqDatetime', array());

        return parent::getReqDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqDateFrom($reqDateFrom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqDateFrom', array($reqDateFrom));

        return parent::setReqDateFrom($reqDateFrom);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqDateFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqDateFrom', array());

        return parent::getReqDateFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqDateTo($reqDateTo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqDateTo', array($reqDateTo));

        return parent::setReqDateTo($reqDateTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqDateTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqDateTo', array());

        return parent::getReqDateTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqDateNext($reqDateNext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqDateNext', array($reqDateNext));

        return parent::setReqDateNext($reqDateNext);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqDateNext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqDateNext', array());

        return parent::getReqDateNext();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqMessageNext($reqMessageNext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqMessageNext', array($reqMessageNext));

        return parent::setReqMessageNext($reqMessageNext);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqMessageNext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqMessageNext', array());

        return parent::getReqMessageNext();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqPtsNext($reqPtsNext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqPtsNext', array($reqPtsNext));

        return parent::setReqPtsNext($reqPtsNext);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqPtsNext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqPtsNext', array());

        return parent::getReqPtsNext();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqPts($reqPts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqPts', array($reqPts));

        return parent::setReqPts($reqPts);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqPts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqPts', array());

        return parent::getReqPts();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqMessage($reqMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqMessage', array($reqMessage));

        return parent::setReqMessage($reqMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqMessage', array());

        return parent::getReqMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCode($reqCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCode', array($reqCode));

        return parent::setReqCode($reqCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCode', array());

        return parent::getReqCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCaution($reqCaution)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCaution', array($reqCaution));

        return parent::setReqCaution($reqCaution);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCaution()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCaution', array());

        return parent::getReqCaution();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCardId($reqCardId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCardId', array($reqCardId));

        return parent::setReqCardId($reqCardId);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCardId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCardId', array());

        return parent::getReqCardId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionAsk($reqCautionAsk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionAsk', array($reqCautionAsk));

        return parent::setReqCautionAsk($reqCautionAsk);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionAsk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionAsk', array());

        return parent::getReqCautionAsk();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionMotif($reqCautionMotif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionMotif', array($reqCautionMotif));

        return parent::setReqCautionMotif($reqCautionMotif);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionMotif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionMotif', array());

        return parent::getReqCautionMotif();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionMessage($reqCautionMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionMessage', array($reqCautionMessage));

        return parent::setReqCautionMessage($reqCautionMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionMessage', array());

        return parent::getReqCautionMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionAskDate($reqCautionAskDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionAskDate', array($reqCautionAskDate));

        return parent::setReqCautionAskDate($reqCautionAskDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionAskDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionAskDate', array());

        return parent::getReqCautionAskDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionBankRefund($reqCautionBankRefund)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionBankRefund', array($reqCautionBankRefund));

        return parent::setReqCautionBankRefund($reqCautionBankRefund);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionBankRefund()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionBankRefund', array());

        return parent::getReqCautionBankRefund();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionSeen($reqCautionSeen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionSeen', array($reqCautionSeen));

        return parent::setReqCautionSeen($reqCautionSeen);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionSeen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionSeen', array());

        return parent::getReqCautionSeen();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionRefuseMessage($reqCautionRefuseMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionRefuseMessage', array($reqCautionRefuseMessage));

        return parent::setReqCautionRefuseMessage($reqCautionRefuseMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionRefuseMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionRefuseMessage', array());

        return parent::getReqCautionRefuseMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqCautionReported($reqCautionReported)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqCautionReported', array($reqCautionReported));

        return parent::setReqCautionReported($reqCautionReported);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqCautionReported()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqCautionReported', array());

        return parent::getReqCautionReported();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqStatus($reqStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqStatus', array($reqStatus));

        return parent::setReqStatus($reqStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqStatus', array());

        return parent::getReqStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqPreteurNote($reqPreteurNote)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqPreteurNote', array($reqPreteurNote));

        return parent::setReqPreteurNote($reqPreteurNote);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqPreteurNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqPreteurNote', array());

        return parent::getReqPreteurNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqEmprunteurNote($reqEmprunteurNote)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqEmprunteurNote', array($reqEmprunteurNote));

        return parent::setReqEmprunteurNote($reqEmprunteurNote);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqEmprunteurNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqEmprunteurNote', array());

        return parent::getReqEmprunteurNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqArtNote($reqArtNote)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqArtNote', array($reqArtNote));

        return parent::setReqArtNote($reqArtNote);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqArtNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqArtNote', array());

        return parent::getReqArtNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqPreteurArchive($reqPreteurArchive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqPreteurArchive', array($reqPreteurArchive));

        return parent::setReqPreteurArchive($reqPreteurArchive);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqPreteurArchive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqPreteurArchive', array());

        return parent::getReqPreteurArchive();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqEmprunteurArchive($reqEmprunteurArchive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqEmprunteurArchive', array($reqEmprunteurArchive));

        return parent::setReqEmprunteurArchive($reqEmprunteurArchive);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqEmprunteurArchive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqEmprunteurArchive', array());

        return parent::getReqEmprunteurArchive();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqEmprunteurRead($reqEmprunteurRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqEmprunteurRead', array($reqEmprunteurRead));

        return parent::setReqEmprunteurRead($reqEmprunteurRead);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqEmprunteurRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqEmprunteurRead', array());

        return parent::getReqEmprunteurRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setReqPreteurRead($reqPreteurRead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReqPreteurRead', array($reqPreteurRead));

        return parent::setReqPreteurRead($reqPreteurRead);
    }

    /**
     * {@inheritDoc}
     */
    public function getReqPreteurRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReqPreteurRead', array());

        return parent::getReqPreteurRead();
    }

}
