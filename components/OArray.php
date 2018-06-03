<?php

/**
 * Class OArray
 *
 * We could extend some created abstract array-focused class to be able to design decorator pattern.
 * For now we just use a trait.
 */
final class OArray implements DisplayInterface
{
    use DisplayArrayTrait, FlattenArrayTrait;
    /**
     * Class name of the singleton registry object.
     * @var string
     */
    private static $_arrayClassName;
    private static $_instance;

    private $array;

    function __construct($array)
    {
        self::$_arrayClassName = get_class($this);
        $this->setArray($array);
    }

    /**
     * Initialize the default registry instance.
     *
     * @return void
     */
    protected static function init()
    {
        self::setInstance(new self::$_arrayClassName());
    }

    /**
     * Singleton - retrieves the default array instance.
     *
     * @return OArray
     */
    public static function getInstance()
    {
        if(self::$_instance === null) {
            self::$_instance = new OArray([]);
        }
        return self::$_instance;
    }

    /**
     * @param $array
     * @return OArray
     */
    public static function setInstance($array)
    {
        return new self($array);
    }

    /**
     * Same as (new OArray())
     * @param $array
     * @return OArray
     */
    public static function newInstance($array)
    {
        return new self($array);
    }

    /**
     * Array setter
     *
     * @param array $array
     */
    public function setArray($array = [])
    {
        $this->array = $this->isArray($array) ? $array : [];
    }

    /**
     * Array getter
     *
     * @return mixed
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * Check whether given param is an array (we could define param's type in PHP7.x)
     *
     * @param $array
     * @return bool
     */
    private function isArray($array)
    {
        if (!is_array($array)) {
            throw new InvalidArgumentException("Given value is not an array"); //return false;
        }else{
            return true;
        }
    }

    /**
     * Flatten stored array
     */
    public function flatten()
    {
        $this->array = $this->flattenArray($this->array);
    }

}