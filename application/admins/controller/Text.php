<?php
namespace app\admins\controller;
use think\Controller;
use Util\data\Sysdb;
class Text extends Controller{
    public function index(){
        $a = new Sysdb;
      $res = $a->table('admins')->field('id,username')->where(array('id'=>1))->list();
        dump($res);
    }
}