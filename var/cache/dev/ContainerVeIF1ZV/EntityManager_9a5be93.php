<?php

namespace ContainerVeIF1ZV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd7e5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1fcfd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff26a = [
        
    ];

    public function getConnection()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getConnection', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getMetadataFactory', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getExpressionBuilder', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'beginTransaction', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getCache', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'transactional', array('func' => $func), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'commit', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->commit();
    }

    public function rollback()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'rollback', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getClassMetadata', array('className' => $className), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'createQuery', array('dql' => $dql), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'createNamedQuery', array('name' => $name), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'createQueryBuilder', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'flush', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'clear', array('entityName' => $entityName), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->clear($entityName);
    }

    public function close()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'close', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->close();
    }

    public function persist($entity)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'persist', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'remove', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'refresh', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'detach', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'merge', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'contains', array('entity' => $entity), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getEventManager', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getConfiguration', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'isOpen', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getUnitOfWork', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getProxyFactory', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'initializeObject', array('obj' => $obj), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'getFilters', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'isFiltersStateClean', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'hasFilters', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return $this->valueHolderdd7e5->hasFilters();
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

        $instance->initializer1fcfd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdd7e5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd7e5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd7e5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, '__get', ['name' => $name], $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        if (isset(self::$publicPropertiesff26a[$name])) {
            return $this->valueHolderdd7e5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7e5;

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

        $targetObject = $this->valueHolderdd7e5;
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
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7e5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd7e5;
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
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, '__isset', array('name' => $name), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7e5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd7e5;
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
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, '__unset', array('name' => $name), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7e5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd7e5;
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
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, '__clone', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        $this->valueHolderdd7e5 = clone $this->valueHolderdd7e5;
    }

    public function __sleep()
    {
        $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, '__sleep', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;

        return array('valueHolderdd7e5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1fcfd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1fcfd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1fcfd && ($this->initializer1fcfd->__invoke($valueHolderdd7e5, $this, 'initializeProxy', array(), $this->initializer1fcfd) || 1) && $this->valueHolderdd7e5 = $valueHolderdd7e5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd7e5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd7e5;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
