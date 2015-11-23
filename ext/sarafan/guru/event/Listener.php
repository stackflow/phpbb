<?php
/**
 * Created by PhpStorm.
 * User: kostarev
 * Date: 15.04.2015
 * Time: 19:00
 */

namespace sarafan\guru\event;


use sarafan\guru\helper\Database;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Listener implements EventSubscriberInterface
{
    /* @var Database */
    protected $db;

    /* @var string */
    protected $phpbbRootPath;

    /* @var string */
    protected $phpExt;

    /**
     * Constructor
     *
     * @param Database $db
     * @param string $phpbb_root_path Root path
     * @param string $php_ext
     */
    public function __construct(Database $db, $phpbb_root_path, $php_ext)
    {
        $this->db = $db;
        $this->phpbbRootPath = $phpbb_root_path;
        $this->phpExt = $php_ext;
    }

    /**
     * Assign functions defined in this class to event listeners in the core
     *
     * @return array
     * @static
     * @access public
     */
    static public function getSubscribedEvents()
    {
        return array(
            'core.user_add_after' => 'createAccount'
        );
    }

    /**
     * Load common files during user setup
     *
     * @param object $event The event object
     * @return string
     * @access public
     */
    public function createAccount($event)
    {
        return $this->db->createAccount($event['user_id']);
    }
}
