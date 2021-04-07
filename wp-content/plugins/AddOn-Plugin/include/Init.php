<?php

/**
 * @package AddOn
 */

namespace Book;

final class Init
{
    /**
     * Store all the classes inside the array
     * @return array Full list of classes
     */
    public static function get_services(): array
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];//dont need to call Book\Pages\Admin bcs we are already in the the Book namespace
    }


    /**
     * Loop through the classes, initialize
     * and call the register() method is it exists
     */
    public static function register_services()
    {
        foreach (self::get_services()as $class)
        {
            $service= self::instantiate($class);
            if(method_exists($service, 'register'))
            {
                $service->register();
            }

        }
    }

    /**
     * Initialize the class
     * @param class $class   class from the services array
     * @return class instance   new instance of a class
     */
    public static function instantiate($class)
    {
        $service =new $class();

        return $service;

        //or effectively change with "return new $class()"
    }


}