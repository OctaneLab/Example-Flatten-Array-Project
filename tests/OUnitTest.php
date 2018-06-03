<?php
if (version_compare(PHP_VERSION, '5.4.0') < 0)
    throw new Exception('Required PHP version to run this script is 5.4.0, your version: ' . PHP_VERSION . "\n");

require_once __DIR__ . '/../vendor/autoload.php';
include(__DIR__ . "/../core/OCore.php");

/**
 * Class OUnitTest
 *
 * Task meant to deal with flatten multidimensional arrays.
 * No need to write tests that are not related to the task.
 * Although dealing with array keys, inserting, removing which may be needed in the future etc.
 */
final class OUnitTest extends PHPUnit_Framework_TestCase
{
    protected $emptyArray;

    public $testArray;

    /**
     * setUp
     */
    protected function setUp()
    {
        $this->emptyArray = [];
        $this->testArray = [[1,2,[3]],4];
    }

    /**
     * Is not empty test
     */
    public function testNotEmpty()
    {
        $this->assertTrue(count($this->testArray) > 0);
    }

    /**
     * Is original a proper type
     */
    public function testGetCurrentArray()
    {
        $f = new OArray($this->testArray);
        $this->assertInternalType('array',$f->getArray());
    }

    /**
     * Is flatten a proper type
     */
    public function testGetFlattenedArray()
    {
        $f = new OArray($this->testArray);
        $f->flatten();
        $this->assertInternalType('array',$f->getArray());
    }

    /**
     * Is flat properly set and instance of
     */
    public function testIfFlatArray()
    {
        $f = new OArray($this->testArray);
        $f->flatten();
        $this->assertInstanceOf(OArray::class, $f);
    }

    /**
     * Is multidimensional properly set and instance of
     */
    public function testIfMultidimensionalArray()
    {
        $this->assertInstanceOf(OArray::class,OArray::newInstance($this->testArray));
    }
}