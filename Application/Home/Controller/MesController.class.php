<?php
namespace Home\Controller;
use Think\Controller;

class MesController extends Controller
{
    public function index()
    {
        $this->display();
    }

    // 查询天气
    public function weather()
    {
    	header("Content-type:text/html;charset=utf-8");
    	$city = I('post.city');
    	//$city = I('get.city');
    	//$city = rawurldecode($city);
    	//$city = mb_convert_encoding($city,"ASCII","UTF-8");
    	$url = 'http://api.map.baidu.com/telematics/v2/weather?location='.$city.'&ak=B8aced94da0b345579f481a1294c9094';
    	$apistr = request($url,false);
    	// 2.get请求，直接进行发送请求
        // $apistr=file_get_contents($url); //获取xml内容
        $apistr = request($url,false);
        // 3.处理返回值,实际这里是解析xml文档
        $apiobj=simplexml_load_string($apistr);//解析xml代码
        //ump($apiobj);
        $todayobj=$apiobj->results->result[0]->date;//读取星期
        $weatherobj=$apiobj->results->result[0]->weather;//读取天气
        $windobj=$apiobj->results->result[0]->wind;//读取风力
        $temobj=$apiobj->results->result[0]->temperature;//读取温度
        $contentStr = "{$city}\n{$todayobj}\n天气：{$weatherobj}\n风力：{$windobj}\n温度：{$temobj}";
        echo $contentStr;
       /* echo json_encode(array(
        	'城市'=>$city,
        	'星期'=>$todayobj,
        	'天气'=>$weatherobj,
        	'风力'=>$windobj,
        	'温度'=>$$temobj
        ));*/
    }

    // 查询电话号码归属地
    public function tel()
	{
	    $phone = I('get.tel');
	    // $phone = '13354280969';
	    //1.url地址
	    $url = 'http://cx.shouji.360.cn/phonearea.php?number='.$phone;
	    //2.没有需要组合的post数据，那么直接请求
	    $content = request($url,false);
	    //3.处理返回值,最简单的就是先看看返回值
	    //把json字符转变为一个对象
	    $content = json_decode($content);
	    // dump($content);
	    echo '省份：'.$content->data->province."\n";
	    echo '城市：'.$content->data->city."\n";
	    echo '运营商：'.$content->data->sp."\n";
	    // dump($content);
	}
}