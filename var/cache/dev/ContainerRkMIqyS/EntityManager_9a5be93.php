<?php

namespace ContainerRkMIqyS;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere2d78 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb2569 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17a25 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getConnection', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getMetadataFactory', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getExpressionBuilder', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'beginTransaction', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getCache', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'transactional', array('func' => $func), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'commit', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->commit();
    }

    public function rollback()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'rollback', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getClassMetadata', array('className' => $className), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'createQuery', array('dql' => $dql), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'createNamedQuery', array('name' => $name), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'createQueryBuilder', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'flush', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'clear', array('entityName' => $entityName), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->clear($entityName);
    }

    public function close()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'close', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->close();
    }

    public function persist($entity)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'persist', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'remove', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'refresh', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'detach', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'merge', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'contains', array('entity' => $entity), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getEventManager', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getConfiguration', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'isOpen', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getUnitOfWork', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getProxyFactory', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'initializeObject', array('obj' => $obj), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'getFilters', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'isFiltersStateClean', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'hasFilters', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return $this->valueHoldere2d78->hasFilters();
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

        $instance->initializerb2569 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere2d78) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere2d78 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere2d78->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, '__get', ['name' => $name], $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        if (isset(self::$publicProperties17a25[$name])) {
            return $this->valueHoldere2d78->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2d78;

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

        $targetObject = $this->valueHoldere2d78;
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
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2d78;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2d78;
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
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, '__isset', array('name' => $name), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2d78;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere2d78;
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
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, '__unset', array('name' => $name), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2d78;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere2d78;
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
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, '__clone', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        $this->valueHoldere2d78 = clone $this->valueHoldere2d78;
    }

    public function __sleep()
    {
        $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, '__sleep', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;

        return array('valueHoldere2d78');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb2569 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb2569;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb2569 && ($this->initializerb2569->__invoke($valueHoldere2d78, $this, 'initializeProxy', array(), $this->initializerb2569) || 1) && $this->valueHoldere2d78 = $valueHoldere2d78;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere2d78;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere2d78;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
