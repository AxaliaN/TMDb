<?php
/**
 * AbstractEntityTest
 *
 * @category  AxalianTmdbTest\Entity
 * @package   AxalianTmdbTest\Entity
 * @author    Michel Maas <michel@michelmaas.com>
 */
 

namespace AxalianTmdbTest\Entity;


use AxalianTmdb\Entity\Company;
use AxalianTmdb\Entity\Genre;
use AxalianTmdb\Entity\Person;
use AxalianTmdb\Entity\Tv\Network;
use AxalianTmdb\Entity\Tv\Season;
use AxalianTmdb\Enum\MovieStatus;
use Zend\Code\Reflection\ClassReflection;

abstract class AbstractEntityTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Get instance of entity to test
     * @abstract
     * @return mixed
     */
    abstract protected function getEntity();

    /**
     * Allowed prefixes for getters
     * @var array
     */
    protected $allowedGetterPrefixes = array('get', 'is', 'has');

    /**
     * Allowed prefixes for setters
     * @var array
     */
    protected $allowedSetterPrefixes = array('set', 'add');

    /**
     * Fields to exclude for automatic getter/setter testing
     * @var array
     */
    protected $excludeFields = array();

    /**
     * Test getters and setters for a single object
     */
    public function testEntityGetterSetters()
    {
        $entity = $this->getEntity();

        $reflection = new ClassReflection(get_class($entity));

        $fields = $this->getClassProperties(get_class($entity));

        foreach ($fields as $field) {
            if (in_array($field, $this->excludeFields) || $field == 'serviceLocator') {
                continue;
            }

            // See if specific test function exists
            if (method_exists($this, 'testEntityField' . $field)) {
                call_user_func(array($this, 'testEntityField' . $field), $entity, $field, $reflection);
            } else {
                $this->entityField($entity, $field, $reflection);
            }
        }

        return;
    }

    /**
     * testSetGetServiceLocator
     */
    public function testSetServiceLocator()
    {
        /* @var \AxalianTmdb\Entity\AbstractEntity $entity */
        $entity = $this->getEntity();
        if (!$entity instanceof \Zend\ServiceManager\ServiceLocatorAwareInterface) {
            return;
        }
        $serviceLocator = \Mockery::mock('\Zend\ServiceManager\ServiceLocatorInterface');
        $entity->setServiceLocator($serviceLocator);
        $this->assertInstanceOf('\Zend\ServiceManager\ServiceLocatorInterface', $entity->getServiceLocator());
    }

    /**
     * Test single field in entity
     *
     * @param string          $entity
     * @param string          $field
     * @param ClassReflection $reflection
     */
    protected function entityField($entity, $field, ClassReflection $reflection)
    {
        $getMethod = $this->getGetMethod($entity, $field);
        $setMethod = $this->getSetMethod($entity, $field);

        if ($setMethod === null && $getMethod === null) {
            return;
        }

        $getDataType = $this->getDataTypeGetter($reflection, $getMethod);
        $setDataType = $this->getDataTypeSetter($reflection, $setMethod);

        if ($getDataType == null && $setDataType == null) {
            $this->markTestIncomplete(
                'Could not determine data type from get method "' . $getMethod . '" or from set method "' . $setMethod . '"
                for field "' . $field . '"on entity ' . $reflection->getName()
            );
        }

        $dataType = ($setDataType !== null) ? $setDataType : $getDataType;

        $data = $this->generateData($dataType);

        if ($setMethod !== null && $getMethod !== null) {
            $entity->$setMethod($data);

            if (mb_substr($setMethod, 0, 3) == 'add') { // We are dealing with collection modifiers
                $collection = $entity->$getMethod();
                if ($collection !== null) {
                    $this->assertEquals($data, $collection->first());
                } else {
                    $this->fail('Collection is not instanciated');
                }
            } else {
                // compare data types
                if ($getDataType != null && $setDataType != null) {
                    $this->assertEquals($getDataType, $setDataType, $field . ' getter and setter do not have the same data types defined');
                }

                $this->assertEquals($data, $entity->$getMethod());
            }
        } elseif ($setMethod !== null) { // Just setter
            $entity->$setMethod($data);
        } elseif ($getMethod !== null) { // Just getter
            $entity->$getMethod();
        }
    }

    /**
     * Retrieve the get method for the field
     *
     * @param  string      $entity
     * @param  string      $field
     * @return string|null
     */
    protected function getGetMethod($entity, $field)
    {
        foreach ($this->allowedGetterPrefixes as $prefix) {
            $getMethod = $prefix . $field;
            if (method_exists($entity, $getMethod)) { // Get method found

                return $getMethod;
            }
        }

        return null;
    }

    /**
     * Retrieve the set method for the field
     *
     * @param  string      $entity
     * @param  string      $field
     * @return string|null
     */
    protected function getSetMethod($entity, $field)
    {
        // Try to find a standard setter
        $setMethod = 'set' . $field;
        if (method_exists($entity, $setMethod)) {
            return $setMethod;
        }

        // No add or set method found
        return null;
    }

    /**
     * Generate test data for specific data type
     *
     * @param  string $dataType
     * @return mixed
     */
    protected function generateData($dataType)
    {
        switch ($dataType) {
            case 'array':
                return array();
            case 'int':
            case 'integer':
                return rand(PHP_INT_MAX * -1, PHP_INT_MAX);
            case 'string':
                return md5(rand(10000, 99999));
            case 'boolean':
            case 'bool':
                return (bool) rand(0, 1);
            case 'smallint':
                return (bool) rand(-127, 127);
            case 'decimal':
            case 'float':
                return (float) rand(PHP_INT_MAX * -1, PHP_INT_MAX) / 1000;
            case 'mixed':
                return (rand(0, 10) > 5) ? (int) 10 : (string) 'test';
            case 'DateTime':
                return new \DateTime('now');
            case '\Zend_Locale':
                $this->fail('Not allowed to use Zend_Locale anymore');
                break;
            case '\Serializable':
                return new \ArrayObject();
            case '\SplFileInfo':
                return new \SplFileInfo('dummy.txt');
            case '\AxalianTmdb\Entity\Genre[]':
                return new Genre();
            case '\AxalianTmdb\Entity\Company[]':
                return new Company();
            case '\AxalianTmdb\Entity\Person':
                return new Person();
            case '\AxalianTmdb\Entity\Tv\Network[]':
                return new Network();
            case '\AxalianTmdb\Entity\Tv\Season[]':
                return new Season();
            case '\AxalianTmdb\Enum\MovieStatus':
                return 'released';
            case '\AxalianTmdb\Enum\TvStatus':
                return 'ended';
        }
        $this->markTestIncomplete('Could not generate data for type: ' . $dataType);

        return null;
    }

    /**
     * Get data type for the field in the getter method
     *
     * @param  ClassReflection $reflection
     * @param  string          $method
     * @return string
     */
    protected function getDataTypeGetter(ClassReflection $reflection, $method)
    {
        // Get getter data type
        if ($reflection->hasMethod($method)) {
            $docBlock = $reflection->getMethod($method)->getDocblock();
            if ($docBlock == null) {
                $this->fail('No doc block defined on method ' . $method);
            }

            return $docBlock->getTag('return')->getType();
        }

        return null;
    }

    /**
     * Get data type for the field in the setter method
     *
     * @param  ClassReflection $reflection
     * @param  type            $method
     * @return string
     */
    protected function getDataTypeSetter(ClassReflection $reflection, $method)
    {
        // Get setter data type
        $setDataType = null;
        if ($reflection->hasMethod($method)) {
            $reflectionMethod = $reflection->getMethod($method);
            $docBlock = $reflectionMethod->getDocblock();
            if ($docBlock == null) {
                $this->fail('No doc block defined on method ' . $method);
            }

            /** @var $parameter \Zend_Reflection_Parameter */
            $parameters = $reflectionMethod->getParameters();
            if (count($parameters) < 1) {
                $this->fail('Method ' . $method . ' does not have a parameter');
            }
            $parameter = $parameters[0];

            // First get type from hint
            if ($parameter->getClass() != null) {
                $setDataType = '\\' . $parameter->getClass()->getName();
            } else {
                $setDataType = $parameter->getType();
            }
        }

        return $setDataType;
    }

    /**
     * Retrieve all properties from the class and parent classes
     *
     * @param  string $className
     * @return array  properties
     */
    protected function getClassProperties($className)
    {
        $reflection = new ClassReflection($className);
        $props = $reflection->getProperties();
        $foundProperties = array();
        foreach ($props as $prop) {
            $foundProperties[] = $prop->getName();
        }
        if ($parentClass = $reflection->getParentClass()) {
            $parentProps = $this->getClassProperties($parentClass->getName()); // Recursion
            if (count($parentProps) > 0) {
                $foundProperties = array_merge($parentProps, $foundProperties);
            }
        }

        return $foundProperties;
    }
}
 