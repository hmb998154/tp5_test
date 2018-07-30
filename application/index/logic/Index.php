<?php 

namespace app\index\logic;

use think\Controller;

class Index extends Controller {

	//测试逻辑层
	public function testLogic(){

		return  "logic";
	}

	//测试静态逻辑层
	public static function addLogic($a,$b){
		return $a+$b;
	}


}
