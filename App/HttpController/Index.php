<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/22
 * Time: 17:57
 */
namespace App\HttpController;

use App\Utility\Pool\RedisPool;
use EasySwoole\Component\Pool\PoolManager;
use EasySwoole\EasySwoole\Config;
use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{
    public function index()
    {
        $redis = PoolManager::getInstance()
            ->getPool(RedisPool::class)
            ->getObj(Config::getInstance()->getConf('REDIS.POOL_TIME_OUT'));
        $redis->set('kk',12346578952356);
        $test = $redis->get('kk');
        var_dump($test);
//        $this->response()->write($conf_interface->getConf());

    }

}