<?php

namespace ContainerIzURVcf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere5f60 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46a5a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties359ec = [
        
    ];

    public function getConnection()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getConnection', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getMetadataFactory', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getExpressionBuilder', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'beginTransaction', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getCache', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'transactional', array('func' => $func), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'commit', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->commit();
    }

    public function rollback()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'rollback', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getClassMetadata', array('className' => $className), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'createQuery', array('dql' => $dql), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'createNamedQuery', array('name' => $name), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'createQueryBuilder', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'flush', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'clear', array('entityName' => $entityName), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->clear($entityName);
    }

    public function close()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'close', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->close();
    }

    public function persist($entity)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'persist', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'remove', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'refresh', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'detach', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'merge', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'contains', array('entity' => $entity), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getEventManager', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getConfiguration', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'isOpen', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getUnitOfWork', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getProxyFactory', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'initializeObject', array('obj' => $obj), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'getFilters', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'isFiltersStateClean', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'hasFilters', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return $this->valueHoldere5f60->hasFilters();
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

        $instance->initializer46a5a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere5f60) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere5f60 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere5f60->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, '__get', ['name' => $name], $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        if (isset(self::$publicProperties359ec[$name])) {
            return $this->valueHoldere5f60->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5f60;

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

        $targetObject = $this->valueHoldere5f60;
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
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5f60;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere5f60;
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
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, '__isset', array('name' => $name), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5f60;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere5f60;
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
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, '__unset', array('name' => $name), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5f60;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere5f60;
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
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, '__clone', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        $this->valueHoldere5f60 = clone $this->valueHoldere5f60;
    }

    public function __sleep()
    {
        $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, '__sleep', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;

        return array('valueHoldere5f60');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46a5a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46a5a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46a5a && ($this->initializer46a5a->__invoke($valueHoldere5f60, $this, 'initializeProxy', array(), $this->initializer46a5a) || 1) && $this->valueHoldere5f60 = $valueHoldere5f60;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere5f60;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere5f60;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
