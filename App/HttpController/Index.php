<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/22
 * Time: 17:57
 */
namespace App\HttpController;

use EasySwoole\EasySwoole\Config;
use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller
{
    public function index()
    {
        $conf_interface = Config::getInstance();
        var_dump($conf_interface->getConf());
//        $this->response()->write($conf_interface->getConf());

    }

}