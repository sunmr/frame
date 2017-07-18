<?php 
	namespace app\admin\controller;
	// use think\cache\driver\redis;
	class Index{
		public function Index(){
			// return "admin Index index";
			// dump(config());
			// $redis = new \Redis();
			// $redis->set('text','hello,world');
			// echo $redis->get('text');

        $redis = new \Redis();  
        $ret = $redis->connect("127.0.0.1",6379); 
        $redis->set("user","xuwenqiang");  
        // echo $redis->get("user");
        $redis->set('user','\nhello');
        // echo $redis->get('user');  
        $redis ->del('user');
        var_dump($redis->get('user'));
        echo '</br>';
        echo '----------';

        $redis->lpush('list','html');//从（左）头插入
        $redis->lpush('list','css');
        $redis->lpush('list','php');
        $redis->del('list');
        $redis->rpush('list','js');
        $list=$redis->lrange('list',0,-1);//从0开始 结束为-1 获取开始之后的全部
        var_dump($list);
		}
	}