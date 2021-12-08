<?php

namespace ContainerDGMbPJj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd5039 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1ebe4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0647d = [
        
    ];

    public function getConnection()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getConnection', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getMetadataFactory', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getExpressionBuilder', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'beginTransaction', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getCache', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'transactional', array('func' => $func), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'commit', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->commit();
    }

    public function rollback()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'rollback', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getClassMetadata', array('className' => $className), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'createQuery', array('dql' => $dql), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'createNamedQuery', array('name' => $name), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'createQueryBuilder', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'flush', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'clear', array('entityName' => $entityName), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->clear($entityName);
    }

    public function close()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'close', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->close();
    }

    public function persist($entity)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'persist', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'remove', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'refresh', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'detach', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'merge', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'contains', array('entity' => $entity), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getEventManager', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getConfiguration', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'isOpen', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getUnitOfWork', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getProxyFactory', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'initializeObject', array('obj' => $obj), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'getFilters', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'isFiltersStateClean', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'hasFilters', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return $this->valueHolderd5039->hasFilters();
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

        $instance->initializer1ebe4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd5039) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd5039 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd5039->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, '__get', ['name' => $name], $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        if (isset(self::$publicProperties0647d[$name])) {
            return $this->valueHolderd5039->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5039;

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

        $targetObject = $this->valueHolderd5039;
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
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5039;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5039;
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
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, '__isset', array('name' => $name), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5039;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd5039;
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
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, '__unset', array('name' => $name), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5039;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd5039;
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
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, '__clone', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        $this->valueHolderd5039 = clone $this->valueHolderd5039;
    }

    public function __sleep()
    {
        $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, '__sleep', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;

        return array('valueHolderd5039');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1ebe4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1ebe4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1ebe4 && ($this->initializer1ebe4->__invoke($valueHolderd5039, $this, 'initializeProxy', array(), $this->initializer1ebe4) || 1) && $this->valueHolderd5039 = $valueHolderd5039;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd5039;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd5039;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
