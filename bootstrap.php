<?php
require_once 'config.php';
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Cache\RedisCache;

$paths = array(__DIR__ . '/ext/sarafan/guru/domain/entity');
$isDevMode = false;

/* the connection configuration */
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => $dbuser,
    'password' => $dbpasswd,
    'dbname'   => $dbname,
);

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
                
$cacheDriver = new RedisCache();
$cacheDriver->setRedis($redis);                                
            
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, $cacheDriver);
$entityManager = EntityManager::create($dbParams, $config);
