<?php

namespace ContainerTMMKlex;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera51cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer90635 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties81920 = [
        
    ];

    public function getConnection()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getConnection', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getMetadataFactory', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getExpressionBuilder', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'beginTransaction', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getCache', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'transactional', array('func' => $func), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'commit', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->commit();
    }

    public function rollback()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'rollback', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getClassMetadata', array('className' => $className), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'createQuery', array('dql' => $dql), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'createNamedQuery', array('name' => $name), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'createQueryBuilder', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'flush', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'clear', array('entityName' => $entityName), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->clear($entityName);
    }

    public function close()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'close', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->close();
    }

    public function persist($entity)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'persist', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'remove', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'refresh', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'detach', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'merge', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'contains', array('entity' => $entity), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getEventManager', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getConfiguration', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'isOpen', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getUnitOfWork', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getProxyFactory', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'initializeObject', array('obj' => $obj), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'getFilters', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'isFiltersStateClean', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'hasFilters', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return $this->valueHoldera51cf->hasFilters();
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

        $instance->initializer90635 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera51cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera51cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera51cf->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, '__get', ['name' => $name], $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        if (isset(self::$publicProperties81920[$name])) {
            return $this->valueHoldera51cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera51cf;

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

        $targetObject = $this->valueHoldera51cf;
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
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera51cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera51cf;
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
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, '__isset', array('name' => $name), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera51cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera51cf;
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
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, '__unset', array('name' => $name), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera51cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera51cf;
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
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, '__clone', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        $this->valueHoldera51cf = clone $this->valueHoldera51cf;
    }

    public function __sleep()
    {
        $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, '__sleep', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;

        return array('valueHoldera51cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer90635 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer90635;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer90635 && ($this->initializer90635->__invoke($valueHoldera51cf, $this, 'initializeProxy', array(), $this->initializer90635) || 1) && $this->valueHoldera51cf = $valueHoldera51cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera51cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera51cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
