<?php

class FFMpeg_9c4575a extends \FFMpeg\FFMpeg implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9c4575a = null;
    private $initializer9c4575a = null;
    private static $publicProperties9c4575a = [
        
    ];
    public function setFFProbe(\FFMpeg\FFProbe $ffprobe)
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, 'setFFProbe', array('ffprobe' => $ffprobe), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        return $this->valueHolder9c4575a->setFFProbe($ffprobe);
    }
    public function getFFProbe()
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, 'getFFProbe', array(), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        return $this->valueHolder9c4575a->getFFProbe();
    }
    public function setFFMpegDriver(\FFMpeg\Driver\FFMpegDriver $ffmpeg)
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, 'setFFMpegDriver', array('ffmpeg' => $ffmpeg), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        return $this->valueHolder9c4575a->setFFMpegDriver($ffmpeg);
    }
    public function getFFMpegDriver()
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, 'getFFMpegDriver', array(), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        return $this->valueHolder9c4575a->getFFMpegDriver();
    }
    public function open($pathfile)
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, 'open', array('pathfile' => $pathfile), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        return $this->valueHolder9c4575a->open($pathfile);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\FFMpeg\FFMpeg $instance) {
            unset($instance->driver, $instance->ffprobe);
        }, $instance, 'FFMpeg\\FFMpeg')->__invoke($instance);
        $instance->initializer9c4575a = $initializer;
        return $instance;
    }
    public function __construct(\FFMpeg\Driver\FFMpegDriver $ffmpeg, \FFMpeg\FFProbe $ffprobe)
    {
        static $reflection;
        if (! $this->valueHolder9c4575a) {
            $reflection = $reflection ?: new \ReflectionClass('FFMpeg\\FFMpeg');
            $this->valueHolder9c4575a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FFMpeg\FFMpeg $instance) {
            unset($instance->driver, $instance->ffprobe);
        }, $this, 'FFMpeg\\FFMpeg')->__invoke($this);
        }
        $this->valueHolder9c4575a->__construct($ffmpeg, $ffprobe);
    }
    public function & __get($name)
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, '__get', ['name' => $name], $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        if (isset(self::$publicProperties9c4575a[$name])) {
            return $this->valueHolder9c4575a->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c4575a;
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
        $targetObject = $this->valueHolder9c4575a;
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
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c4575a;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder9c4575a;
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
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, '__isset', array('name' => $name), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c4575a;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9c4575a;
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
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, '__unset', array('name' => $name), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c4575a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9c4575a;
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
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, '__clone', array(), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        $this->valueHolder9c4575a = clone $this->valueHolder9c4575a;
    }
    public function __sleep()
    {
        $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, '__sleep', array(), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
        return array('valueHolder9c4575a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\FFMpeg\FFMpeg $instance) {
            unset($instance->driver, $instance->ffprobe);
        }, $this, 'FFMpeg\\FFMpeg')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9c4575a = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer9c4575a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9c4575a && ($this->initializer9c4575a->__invoke($valueHolder9c4575a, $this, 'initializeProxy', array(), $this->initializer9c4575a) || 1) && $this->valueHolder9c4575a = $valueHolder9c4575a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c4575a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c4575a;
    }
}
