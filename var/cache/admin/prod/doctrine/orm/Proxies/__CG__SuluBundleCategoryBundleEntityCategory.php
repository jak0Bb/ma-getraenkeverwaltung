<?php

namespace Proxies\__CG__\Sulu\Bundle\CategoryBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \Sulu\Bundle\CategoryBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'lft', 'rgt', 'depth', 'created', 'changed', 'id', 'key', 'defaultLocale', 'parent', 'creator', 'changer', 'meta', 'translations', 'children'];
        }

        return ['__isInitialized__', 'lft', 'rgt', 'depth', 'created', 'changed', 'id', 'key', 'defaultLocale', 'parent', 'creator', 'changer', 'meta', 'translations', 'children'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setLft($lft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLft', [$lft]);

        return parent::setLft($lft);
    }

    /**
     * {@inheritDoc}
     */
    public function getLft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLft', []);

        return parent::getLft();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgt($rgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgt', [$rgt]);

        return parent::setRgt($rgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgt', []);

        return parent::getRgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepth($depth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepth', [$depth]);

        return parent::setDepth($depth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepth', []);

        return parent::getDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', []);

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setKey($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', [$key]);

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLocale($defaultLocale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLocale', [$defaultLocale]);

        return parent::setDefaultLocale($defaultLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLocale', []);

        return parent::getDefaultLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanged', []);

        return parent::getChanged();
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
    public function setParent(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Sulu\Component\Security\Authentication\UserInterface $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanger(\Sulu\Component\Security\Authentication\UserInterface $changer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanger', [$changer]);

        return parent::setChanger($changer);
    }

    /**
     * {@inheritDoc}
     */
    public function setChanged(\DateTime $changed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanged', [$changed]);

        return parent::setChanged($changed);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanger()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanger', []);

        return parent::getChanger();
    }

    /**
     * {@inheritDoc}
     */
    public function addMeta(\Sulu\Bundle\CategoryBundle\Entity\CategoryMetaInterface $meta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMeta', [$meta]);

        return parent::addMeta($meta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMeta(\Sulu\Bundle\CategoryBundle\Entity\CategoryMetaInterface $meta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMeta', [$meta]);

        return parent::removeMeta($meta);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeta', []);

        return parent::getMeta();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Sulu\Bundle\CategoryBundle\Entity\CategoryTranslationInterface $translations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translations]);

        return parent::addTranslation($translations);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Sulu\Bundle\CategoryBundle\Entity\CategoryTranslationInterface $translations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translations]);

        return parent::removeTranslation($translations);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function findTranslationByLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'findTranslationByLocale', [$locale]);

        return parent::findTranslationByLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function addChildren(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChildren', [$child]);

        return parent::addChildren($child);
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$child]);

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChildren(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChildren', [$child]);

        return parent::removeChildren($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\Sulu\Bundle\CategoryBundle\Entity\CategoryInterface $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$child]);

        return parent::removeChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

}
