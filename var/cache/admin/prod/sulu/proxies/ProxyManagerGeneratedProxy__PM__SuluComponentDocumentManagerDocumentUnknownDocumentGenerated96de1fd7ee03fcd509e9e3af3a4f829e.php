<?php

namespace ProxyManagerGeneratedProxy\__PM__\Sulu\Component\DocumentManager\Document\UnknownDocument;

class Generated96de1fd7ee03fcd509e9e3af3a4f829e extends \Sulu\Component\DocumentManager\Document\UnknownDocument implements \ProxyManager\Proxy\GhostObjectInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b584536ea5ea065951968 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker5b584536ea5f3871819051 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5b584536ea5a2031066297 = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties5b584536ea5bd280003342 = [
        'nodeName' => [
            'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' => true,
        ],
        'uuid' => [
            'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedProperties5b584536ea5cd064330959 = [
        
    ];

    private static $signature96de1fd7ee03fcd509e9e3af3a4f829e = 'YTozOntzOjk6ImNsYXNzTmFtZSI7czo1NToiU3VsdVxDb21wb25lbnRcRG9jdW1lbnRNYW5hZ2VyXERvY3VtZW50XFVua25vd25Eb2N1bWVudCI7czo3OiJmYWN0b3J5IjtzOjQ0OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ0dob3N0RmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0NjoiMi4xLjFAZTE4YWM4NzZiMmU0ODE5Yzc2MzQ5ZGU4Zjc4Y2NjOGVmMTU1NGNkNyI7fQ==';

    /**
     * Triggers initialization logic for this ghost object
     * 
     * @param string  $methodName
     * @param mixed[] $parameters
     * 
     * @return mixed
     */
    private function callInitializer5b584536ea5fd851520684($methodName, array $parameters)
    {
        if ($this->initializationTracker5b584536ea5f3871819051 || ! $this->initializer5b584536ea5ea065951968) {
            return;
        }
        
        $this->initializationTracker5b584536ea5f3871819051 = true;
        
        static $cacheSulu_Component_DocumentManager_Document_UnknownDocument;

        $cacheSulu_Component_DocumentManager_Document_UnknownDocument ?: $cacheSulu_Component_DocumentManager_Document_UnknownDocument = \Closure::bind(function ($instance) {
            $instance->nodeName = NULL;
            $instance->uuid = NULL;
        }, null, 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument');

        $cacheSulu_Component_DocumentManager_Document_UnknownDocument($this);



        
        $properties = [

        ];

        static $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument;

        $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument ?: $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' . "\0" . 'nodeName'] = & $instance->nodeName;
            $properties['' . "\0" . 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument' . "\0" . 'uuid'] = & $instance->uuid;
        }, $this, 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument');

        $cacheFetchSulu_Component_DocumentManager_Document_UnknownDocument($this, $properties);
        
        $result = $this->initializer5b584536ea5ea065951968->__invoke($this, $methodName, $parameters, $this->initializer5b584536ea5ea065951968, $properties);
        $this->initializationTracker5b584536ea5f3871819051 = false;
        
        return $result;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Sulu\Component\DocumentManager\Document\UnknownDocument $instance) {
            unset($instance->nodeName, $instance->uuid);
        }, $instance, 'Sulu\\Component\\DocumentManager\\Document\\UnknownDocument')->__invoke($instance);

        $instance->initializer5b584536ea5ea065951968 = $initializer;

        return $instance;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5b584536ea5ea065951968 && ! $this->initializationTracker5b584536ea5f3871819051 && $this->callInitializer5b584536ea5fd851520684('__get', array('name' => $name));
        
        if (isset(self::$publicProperties5b584536ea5a2031066297[$name])) {
            return $this->$name;
        }
        
        if (isset(self::$protectedProperties5b584536ea5cd064330959[$name])) {
            if ($this->initializationTracker5b584536ea5f3871819051) {
                return $this->$name;
            }
        
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b584536ea5cd064330959[$name];
        
            if ($object instanceof $expectedType) {
                return $this->$name;
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties5b584536ea5bd280003342[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b584536ea5bd280003342[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);
        
                return $accessor($this);
            }
        
            if ($this->initializationTracker5b584536ea5f3871819051 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b584536ea5bd280003342[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);
        
                return $accessor($this);
            }
        }
        
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __set($name, $value)
    {
        $this->initializer5b584536ea5ea065951968 && $this->callInitializer5b584536ea5fd851520684('__set', array('name' => $name, 'value' => $value));
        
        if (isset(self::$publicProperties5b584536ea5a2031066297[$name])) {
            return ($this->$name = $value);
        }
        
        if (isset(self::$protectedProperties5b584536ea5cd064330959[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b584536ea5cd064330959[$name];
        
            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties5b584536ea5bd280003342[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b584536ea5bd280003342[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);
        
                return $accessor($this, $value);
            }
        
            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b584536ea5bd280003342[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);
        
                return $accessor($this, $value);
            }
        }
        
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5b584536ea5ea065951968 && $this->callInitializer5b584536ea5fd851520684('__isset', array('name' => $name));
        
        if (isset(self::$publicProperties5b584536ea5a2031066297[$name])) {
            return isset($this->$name);
        }
        
        if (isset(self::$protectedProperties5b584536ea5cd064330959[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b584536ea5cd064330959[$name];
        
            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b584536ea5bd280003342[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);
        
                return $accessor($this);
            }
        
            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b584536ea5bd280003342[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);
        
                return $accessor($this);
            }
        }
        
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5b584536ea5ea065951968 && $this->callInitializer5b584536ea5fd851520684('__unset', array('name' => $name));
        
        if (isset(self::$publicProperties5b584536ea5a2031066297[$name])) {
            unset($this->$name);
        
            return;
        }
        
        if (isset(self::$protectedProperties5b584536ea5cd064330959[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b584536ea5cd064330959[$name];
        
            if ($object instanceof $expectedType) {
                unset($this->$name);
        
                return;
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);
        
                return;
            }
        } elseif (isset(self::$privateProperties5b584536ea5bd280003342[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b584536ea5bd280003342[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);
        
                return $accessor($this);
            }
        
            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b584536ea5bd280003342[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);
        
                return $accessor($this);
            }
        }
        
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
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
        $this->initializer5b584536ea5ea065951968 && $this->callInitializer5b584536ea5fd851520684('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer5b584536ea5ea065951968 && $this->callInitializer5b584536ea5fd851520684('__sleep', []);

        return array_keys((array) $this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5b584536ea5ea065951968 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5b584536ea5ea065951968;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5b584536ea5ea065951968 && $this->callInitializer5b584536ea5fd851520684('initializeProxy', []);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return ! $this->initializer5b584536ea5ea065951968;
    }


}
