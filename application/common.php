<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//数组转XML
function arrayToXml($arr)
{
    $xml = "<xml>";
    foreach ($arr as $key=>$val)
    {
        if (is_numeric($val)){
            $xml.="<".$key.">".$val."</".$key.">";
        }else{
             $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
        }
    }
    $xml.="</xml>";
    return $xml;
}

//将XML转为array
function xmlToArray($xml)
{    
    //禁止引用外部xml实体
    libxml_disable_entity_loader(true);
    $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);        
    return $values;
}

//封装json统一输出数据

function arrayToJson($code,$data,$msg){
	if(!is_numeric($code)){
		return false;
	}
	$arr = array(
		'code' => $code,
		'data' => $data,
		'msg' => $msg
	);
	return json_encode($arr,JSON_UNESCAPED_UNICODE);
}