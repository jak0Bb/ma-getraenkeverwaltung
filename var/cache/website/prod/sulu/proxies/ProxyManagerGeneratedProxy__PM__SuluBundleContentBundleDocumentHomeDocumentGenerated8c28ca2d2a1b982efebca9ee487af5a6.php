<?php

namespace ProxyManagerGeneratedProxy\__PM__\Sulu\Bundle\ContentBundle\Document\HomeDocument;

class Generated8c28ca2d2a1b982efebca9ee487af5a6 extends \Sulu\Bundle\ContentBundle\Document\HomeDocument implements \ProxyManager\Proxy\GhostObjectInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b5847046a332314536504 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker5b5847046a45e473200094 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5b58470469441735313532 = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties5b58470469f20835553036 = [
        
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedProperties5b5847046a079100843571 = [
        'nodeName' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'created' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'changed' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'creator' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'changer' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'title' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'resourceSegment' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'navigationContexts' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'redirectType' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'redirectTarget' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'redirectExternal' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'workflowStage' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'published' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'shadowLocaleEnabled' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'shadowLocale' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'uuid' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'structureType' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'structure' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'locale' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'originalLocale' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'children' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'path' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'extensions' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'webspaceName' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'suluOrder' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'permissions' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'versions' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'authored' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
        'author' => 'Sulu\\Bundle\\ContentBundle\\Document\\BasePageDocument',
    ];

    private static $signature8c28ca2d2a1b982efebca9ee487af5a6 = 'YTozOntzOjk6ImNsYXNzTmFtZSI7czo0NzoiU3VsdVxCdW5kbGVcQ29udGVudEJ1bmRsZVxEb2N1bWVudFxIb21lRG9jdW1lbnQiO3M6NzoiZmFjdG9yeSI7czo0NDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdHaG9zdEZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDY6IjIuMS4xQGUxOGFjODc2YjJlNDgxOWM3NjM0OWRlOGY3OGNjYzhlZjE1NTRjZDciO30=';

    /**
     * Triggers initialization logic for this ghost object
     * 
     * @param string  $methodName
     * @param mixed[] $parameters
     * 
     * @return mixed
     */
    private function callInitializer5b5847046a99c725645221($methodName, array $parameters)
    {
        if ($this->initializationTracker5b5847046a45e473200094 || ! $this->initializer5b5847046a332314536504) {
            return;
        }
        
        $this->initializationTracker5b5847046a45e473200094 = true;
        
        $this->nodeName = NULL;
        $this->created = NULL;
        $this->changed = NULL;
        $this->creator = NULL;
        $this->changer = NULL;
        $this->title = NULL;
        $this->resourceSegment = NULL;
        $this->navigationContexts = array (
        );
        $this->redirectType = NULL;
        $this->redirectTarget = NULL;
        $this->redirectExternal = NULL;
        $this->workflowStage = NULL;
        $this->published = NULL;
        $this->shadowLocaleEnabled = false;
        $this->shadowLocale = NULL;
        $this->uuid = NULL;
        $this->structureType = NULL;
        $this->structure = NULL;
        $this->locale = NULL;
        $this->originalLocale = NULL;
        $this->children = NULL;
        $this->path = NULL;
        $this->extensions = NULL;
        $this->webspaceName = NULL;
        $this->suluOrder = NULL;
        $this->permissions = NULL;
        $this->versions = array (
        );
        $this->authored = NULL;
        $this->author = NULL;

        
        $properties = [
            '' . "\0" . '*' . "\0" . 'nodeName' => & $this->nodeName,
            '' . "\0" . '*' . "\0" . 'created' => & $this->created,
            '' . "\0" . '*' . "\0" . 'changed' => & $this->changed,
            '' . "\0" . '*' . "\0" . 'creator' => & $this->creator,
            '' . "\0" . '*' . "\0" . 'changer' => & $this->changer,
            '' . "\0" . '*' . "\0" . 'title' => & $this->title,
            '' . "\0" . '*' . "\0" . 'resourceSegment' => & $this->resourceSegment,
            '' . "\0" . '*' . "\0" . 'navigationContexts' => & $this->navigationContexts,
            '' . "\0" . '*' . "\0" . 'redirectType' => & $this->redirectType,
            '' . "\0" . '*' . "\0" . 'redirectTarget' => & $this->redirectTarget,
            '' . "\0" . '*' . "\0" . 'redirectExternal' => & $this->redirectExternal,
            '' . "\0" . '*' . "\0" . 'workflowStage' => & $this->workflowStage,
            '' . "\0" . '*' . "\0" . 'published' => & $this->published,
            '' . "\0" . '*' . "\0" . 'shadowLocaleEnabled' => & $this->shadowLocaleEnabled,
            '' . "\0" . '*' . "\0" . 'shadowLocale' => & $this->shadowLocale,
            '' . "\0" . '*' . "\0" . 'uuid' => & $this->uuid,
            '' . "\0" . '*' . "\0" . 'structureType' => & $this->structureType,
            '' . "\0" . '*' . "\0" . 'structure' => & $this->structure,
            '' . "\0" . '*' . "\0" . 'locale' => & $this->locale,
            '' . "\0" . '*' . "\0" . 'originalLocale' => & $this->originalLocale,
            '' . "\0" . '*' . "\0" . 'children' => & $this->children,
            '' . "\0" . '*' . "\0" . 'path' => & $this->path,
            '' . "\0" . '*' . "\0" . 'extensions' => & $this->extensions,
            '' . "\0" . '*' . "\0" . 'webspaceName' => & $this->webspaceName,
            '' . "\0" . '*' . "\0" . 'suluOrder' => & $this->suluOrder,
            '' . "\0" . '*' . "\0" . 'permissions' => & $this->permissions,
            '' . "\0" . '*' . "\0" . 'versions' => & $this->versions,
            '' . "\0" . '*' . "\0" . 'authored' => & $this->authored,
            '' . "\0" . '*' . "\0" . 'author' => & $this->author,
        ];

        
        
        $result = $this->initializer5b5847046a332314536504->__invoke($this, $methodName, $parameters, $this->initializer5b5847046a332314536504, $properties);
        $this->initializationTracker5b5847046a45e473200094 = false;
        
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

        unset($instance->nodeName, $instance->created, $instance->changed, $instance->creator, $instance->changer, $instance->title, $instance->resourceSegment, $instance->navigationContexts, $instance->redirectType, $instance->redirectTarget, $instance->redirectExternal, $instance->workflowStage, $instance->published, $instance->shadowLocaleEnabled, $instance->shadowLocale, $instance->uuid, $instance->structureType, $instance->structure, $instance->locale, $instance->originalLocale, $instance->children, $instance->path, $instance->extensions, $instance->webspaceName, $instance->suluOrder, $instance->permissions, $instance->versions, $instance->authored, $instance->author);

        $instance->initializer5b5847046a332314536504 = $initializer;

        return $instance;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5b5847046a332314536504 && ! $this->initializationTracker5b5847046a45e473200094 && $this->callInitializer5b5847046a99c725645221('__get', array('name' => $name));
        
        if (isset(self::$publicProperties5b58470469441735313532[$name])) {
            return $this->$name;
        }
        
        if (isset(self::$protectedProperties5b5847046a079100843571[$name])) {
            if ($this->initializationTracker5b5847046a45e473200094) {
                return $this->$name;
            }
        
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b5847046a079100843571[$name];
        
            if ($object instanceof $expectedType) {
                return $this->$name;
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties5b58470469f20835553036[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b58470469f20835553036[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);
        
                return $accessor($this);
            }
        
            if ($this->initializationTracker5b5847046a45e473200094 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b58470469f20835553036[$name]);
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
        $this->initializer5b5847046a332314536504 && $this->callInitializer5b5847046a99c725645221('__set', array('name' => $name, 'value' => $value));
        
        if (isset(self::$publicProperties5b58470469441735313532[$name])) {
            return ($this->$name = $value);
        }
        
        if (isset(self::$protectedProperties5b5847046a079100843571[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b5847046a079100843571[$name];
        
            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties5b58470469f20835553036[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b58470469f20835553036[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);
        
                return $accessor($this, $value);
            }
        
            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b58470469f20835553036[$name]);
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
        $this->initializer5b5847046a332314536504 && $this->callInitializer5b5847046a99c725645221('__isset', array('name' => $name));
        
        if (isset(self::$publicProperties5b58470469441735313532[$name])) {
            return isset($this->$name);
        }
        
        if (isset(self::$protectedProperties5b5847046a079100843571[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b5847046a079100843571[$name];
        
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
        
            if (isset(self::$privateProperties5b58470469f20835553036[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);
        
                return $accessor($this);
            }
        
            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b58470469f20835553036[$name]);
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
        $this->initializer5b5847046a332314536504 && $this->callInitializer5b5847046a99c725645221('__unset', array('name' => $name));
        
        if (isset(self::$publicProperties5b58470469441735313532[$name])) {
            unset($this->$name);
        
            return;
        }
        
        if (isset(self::$protectedProperties5b5847046a079100843571[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties5b5847046a079100843571[$name];
        
            if ($object instanceof $expectedType) {
                unset($this->$name);
        
                return;
            }
        
            $class = isset($caller['class']) ? $caller['class'] : '';
        
            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);
        
                return;
            }
        } elseif (isset(self::$privateProperties5b58470469f20835553036[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';
        
            static $accessorCache = [];
        
            if (isset(self::$privateProperties5b58470469f20835553036[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);
        
                return $accessor($this);
            }
        
            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5b58470469f20835553036[$name]);
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
        $this->initializer5b5847046a332314536504 && $this->callInitializer5b5847046a99c725645221('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer5b5847046a332314536504 && $this->callInitializer5b5847046a99c725645221('__sleep', []);

        return array_keys((array) $this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5b5847046a332314536504 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5b5847046a332314536504;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5b5847046a332314536504 && $this->callInitializer5b5847046a99c725645221('initializeProxy', []);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return ! $this->initializer5b5847046a332314536504;
    }


}
