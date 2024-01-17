<?php
namespace GSB;

/**
 * Principal Class (Singleton)
 * Initialize app, start essentials process and global config
 * One unique instance use
 */
class Main
{
    private static $_instance = null;
    private $pdo;

    /**
   * Private Main Constructor
   * Initialize session and 
   * @constructor
   */
    public function __construct()
    {
        $this->pdo = Config::getInstance()->getConnection();
    }

    /**
   * Create and memoize instance of Main
   *
   * @return Main
   */
    public static function get_instance()
    {
        if(self::$_instance === null)
        self::$_instance = new Main();
        return self::$_instance;
    }
    

}
