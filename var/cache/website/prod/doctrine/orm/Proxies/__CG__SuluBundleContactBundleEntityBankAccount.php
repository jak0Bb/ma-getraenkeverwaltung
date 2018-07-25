<?php

namespace Proxies\__CG__\Sulu\Bundle\ContactBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BankAccount extends \Sulu\Bundle\ContactBundle\Entity\BankAccount implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'bankName', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'bic', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'iban', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'public', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'accounts', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'contacts'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'bankName', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'bic', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'iban', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'public', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'id', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'accounts', '' . "\0" . 'Sulu\\Bundle\\ContactBundle\\Entity\\BankAccount' . "\0" . 'contacts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BankAccount $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setBic($bic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBic', [$bic]);

        return parent::setBic($bic);
    }

    /**
     * {@inheritDoc}
     */
    public function getBic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBic', []);

        return parent::getBic();
    }

    /**
     * {@inheritDoc}
     */
    public function setIban($iban)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIban', [$iban]);

        return parent::setIban($iban);
    }

    /**
     * {@inheritDoc}
     */
    public function getIban()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIban', []);

        return parent::getIban();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublic($public)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublic', [$public]);

        return parent::setPublic($public);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublic', []);

        return parent::getPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addAccount(\Sulu\Bundle\ContactBundle\Entity\AccountInterface $accounts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAccount', [$accounts]);

        return parent::addAccount($accounts);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAccount(\Sulu\Bundle\ContactBundle\Entity\AccountInterface $accounts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAccount', [$accounts]);

        return parent::removeAccount($accounts);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccounts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccounts', []);

        return parent::getAccounts();
    }

    /**
     * {@inheritDoc}
     */
    public function setBankName($bankName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBankName', [$bankName]);

        return parent::setBankName($bankName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBankName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBankName', []);

        return parent::getBankName();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact(\Sulu\Component\Contact\Model\ContactInterface $contacts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', [$contacts]);

        return parent::addContact($contacts);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContact(\Sulu\Component\Contact\Model\ContactInterface $contacts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContact', [$contacts]);

        return parent::removeContact($contacts);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacts', []);

        return parent::getContacts();
    }

}
