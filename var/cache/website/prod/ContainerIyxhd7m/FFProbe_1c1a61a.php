<?php

class FFProbe_1c1a61a extends \FFMpeg\FFProbe implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1c1a61a = null;
    private $initializer1c1a61a = null;
    private static $publicProperties1c1a61a = [
        
    ];
    public function getParser()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'getParser', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->getParser();
    }
    public function setParser(\FFMpeg\FFProbe\OutputParserInterface $parser)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'setParser', array('parser' => $parser), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->setParser($parser);
    }
    public function getFFProbeDriver()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'getFFProbeDriver', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->getFFProbeDriver();
    }
    public function setFFProbeDriver(\FFMpeg\Driver\FFProbeDriver $ffprobe)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'setFFProbeDriver', array('ffprobe' => $ffprobe), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->setFFProbeDriver($ffprobe);
    }
    public function setOptionsTester(\FFMpeg\FFProbe\OptionsTesterInterface $tester)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'setOptionsTester', array('tester' => $tester), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->setOptionsTester($tester);
    }
    public function getOptionsTester()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'getOptionsTester', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->getOptionsTester();
    }
    public function setCache(\Doctrine\Common\Cache\Cache $cache)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'setCache', array('cache' => $cache), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->setCache($cache);
    }
    public function getCache()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'getCache', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->getCache();
    }
    public function getMapper()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'getMapper', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->getMapper();
    }
    public function setMapper(\FFMpeg\FFProbe\MapperInterface $mapper)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'setMapper', array('mapper' => $mapper), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->setMapper($mapper);
    }
    public function format($pathfile)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'format', array('pathfile' => $pathfile), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->format($pathfile);
    }
    public function streams($pathfile)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'streams', array('pathfile' => $pathfile), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return $this->valueHolder1c1a61a->streams($pathfile);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\FFMpeg\FFProbe $instance) {
            unset($instance->cache, $instance->optionsTester, $instance->parser, $instance->ffprobe, $instance->mapper);
        }, $instance, 'FFMpeg\\FFProbe')->__invoke($instance);
        $instance->initializer1c1a61a = $initializer;
        return $instance;
    }
    public function __construct(\FFMpeg\Driver\FFProbeDriver $ffprobe, \Doctrine\Common\Cache\Cache $cache)
    {
        static $reflection;
        if (! $this->valueHolder1c1a61a) {
            $reflection = $reflection ?: new \ReflectionClass('FFMpeg\\FFProbe');
            $this->valueHolder1c1a61a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FFMpeg\FFProbe $instance) {
            unset($instance->cache, $instance->optionsTester, $instance->parser, $instance->ffprobe, $instance->mapper);
        }, $this, 'FFMpeg\\FFProbe')->__invoke($this);
        }
        $this->valueHolder1c1a61a->__construct($ffprobe, $cache);
    }
    public function & __get($name)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, '__get', ['name' => $name], $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        if (isset(self::$publicProperties1c1a61a[$name])) {
            return $this->valueHolder1c1a61a->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c1a61a;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder1c1a61a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c1a61a;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder1c1a61a;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, '__isset', array('name' => $name), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c1a61a;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1c1a61a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, '__unset', array('name' => $name), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c1a61a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1c1a61a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, '__clone', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        $this->valueHolder1c1a61a = clone $this->valueHolder1c1a61a;
    }
    public function __sleep()
    {
        $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, '__sleep', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
        return array('valueHolder1c1a61a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\FFMpeg\FFProbe $instance) {
            unset($instance->cache, $instance->optionsTester, $instance->parser, $instance->ffprobe, $instance->mapper);
        }, $this, 'FFMpeg\\FFProbe')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer1c1a61a = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer1c1a61a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer1c1a61a && ($this->initializer1c1a61a->__invoke($valueHolder1c1a61a, $this, 'initializeProxy', array(), $this->initializer1c1a61a) || 1) && $this->valueHolder1c1a61a = $valueHolder1c1a61a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1c1a61a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1c1a61a;
    }
}
