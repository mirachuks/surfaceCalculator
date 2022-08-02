<?php

namespace ContainerCmcQbuJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc243f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7d0a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9408f = [
        
    ];

    public function getConnection()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getConnection', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getMetadataFactory', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getExpressionBuilder', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'beginTransaction', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getCache', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'transactional', array('func' => $func), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'commit', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->commit();
    }

    public function rollback()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'rollback', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'createQuery', array('dql' => $dql), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'createQueryBuilder', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'flush', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'clear', array('entityName' => $entityName), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->clear($entityName);
    }

    public function close()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'close', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->close();
    }

    public function persist($entity)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'persist', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'remove', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'refresh', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'detach', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'merge', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'contains', array('entity' => $entity), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getEventManager', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getConfiguration', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'isOpen', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getUnitOfWork', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getProxyFactory', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'getFilters', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'isFiltersStateClean', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'hasFilters', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return $this->valueHolderc243f->hasFilters();
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

        $instance->initializer7d0a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc243f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc243f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc243f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, '__get', ['name' => $name], $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        if (isset(self::$publicProperties9408f[$name])) {
            return $this->valueHolderc243f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc243f;

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

        $targetObject = $this->valueHolderc243f;
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
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc243f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc243f;
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
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, '__isset', array('name' => $name), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc243f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc243f;
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
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, '__unset', array('name' => $name), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc243f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc243f;
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
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, '__clone', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        $this->valueHolderc243f = clone $this->valueHolderc243f;
    }

    public function __sleep()
    {
        $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, '__sleep', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;

        return array('valueHolderc243f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d0a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d0a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7d0a3 && ($this->initializer7d0a3->__invoke($valueHolderc243f, $this, 'initializeProxy', array(), $this->initializer7d0a3) || 1) && $this->valueHolderc243f = $valueHolderc243f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc243f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc243f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
