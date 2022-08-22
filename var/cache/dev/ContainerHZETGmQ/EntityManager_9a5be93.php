<?php

namespace ContainerHZETGmQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8ba9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbce6c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese2e84 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getConnection', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getMetadataFactory', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getExpressionBuilder', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'beginTransaction', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getCache', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'transactional', array('func' => $func), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'commit', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->commit();
    }

    public function rollback()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'rollback', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getClassMetadata', array('className' => $className), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'createQuery', array('dql' => $dql), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'createNamedQuery', array('name' => $name), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'createQueryBuilder', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'flush', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'clear', array('entityName' => $entityName), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->clear($entityName);
    }

    public function close()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'close', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->close();
    }

    public function persist($entity)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'persist', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'remove', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'refresh', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'detach', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'merge', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'contains', array('entity' => $entity), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getEventManager', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getConfiguration', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'isOpen', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getUnitOfWork', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getProxyFactory', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'initializeObject', array('obj' => $obj), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'getFilters', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'isFiltersStateClean', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'hasFilters', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return $this->valueHolderc8ba9->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbce6c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc8ba9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8ba9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8ba9->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, '__get', ['name' => $name], $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        if (isset(self::$publicPropertiese2e84[$name])) {
            return $this->valueHolderc8ba9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8ba9;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8ba9;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8ba9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8ba9;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, '__isset', array('name' => $name), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8ba9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc8ba9;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, '__unset', array('name' => $name), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8ba9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc8ba9;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, '__clone', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        $this->valueHolderc8ba9 = clone $this->valueHolderc8ba9;
    }

    public function __sleep()
    {
        $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, '__sleep', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;

        return array('valueHolderc8ba9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbce6c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbce6c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbce6c && ($this->initializerbce6c->__invoke($valueHolderc8ba9, $this, 'initializeProxy', array(), $this->initializerbce6c) || 1) && $this->valueHolderc8ba9 = $valueHolderc8ba9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8ba9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8ba9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
