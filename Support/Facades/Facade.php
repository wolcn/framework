<?php

namespace Framework\Support\Facades;

/**
 * Abstract class for creating facades.
 *
 * This class provides a convenient base for creating facades in a framework.
 * A facade is a class that provides a static interface to objects that are
 * available in the application's service container.
 *
 * @package Framework\Support\Facades
 */
abstract class Facade
{
    /**
     * Get the accessor class name.
     *
     * This method should be implemented by subclasses to return the fully
     * qualified class name of the accessor class that the facade represents.
     *
     * @return object The fully qualified class instance of the accessor class.
     */
    abstract protected static function accessor(): object;
}
