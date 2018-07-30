<?php
namespace app\index\controller;

use think\swoole\Server;

class Swoole extends Server
{
	protected $host = '127.0.0.1';
	protected $port = 9502;
	protected $option = [ 
		'worker_num'	=> 4,
		'daemonize'	=> true,
		'backlog'	=> 128
	];

	public function onReceive($server, $fd, $from_id, $data)
	{
		$server->send($fd, 'Swoole: '.$data);
	}

	public function test(){
		echo "swoole_test";
	}
}