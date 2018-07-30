<?php 
namespace app\index\model;
use think\Model;
use Config;

class User extends Model
{
	protected $type = array(
		'list' => 'array',
	);

	

	// 设置当前模型对应的完整数据表名称
	protected $table = "tp_user";
	// protected $name = "user";

	// 设置当前模型的数据库连接
	protected $connection = "db_config";

	//model 初始化
	protected static function init(){

	}

	//取用户数据
	public static function userList(){
		$list = user::where('c_id',1)->select();
		return $list;
	}

	//取配置
	public static function getConfig(){
		$app['app_config'] = Config::get("app.default_ajax_return");
		$app['msg_config'] = Config::get('msg.fail');
		return $app;
	}

}