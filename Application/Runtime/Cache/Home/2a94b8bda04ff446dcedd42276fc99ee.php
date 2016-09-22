<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>FHR导航网</title>
	<meta name="keywords" content="自家个人导航" />
	<meta name="description" content="个人导航" />
	<script src="<?php echo C('JS_URL');?>jquery-1.8.3.min.js"></script>
	<script src="<?php echo C('JS_URL');?>layer.js"></script>
	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>
	<script type="text/javascript" language="javascript">
	//时间显示
	function showtime(){
		var today,hour,second,minute,year,month,date;
		var strDate;today=new Date();
		var n_day = today.getDay();
		switch (n_day){case 0:{strDate = "星期日"}break;case 1:{strDate = "星期一"}break;
			case 2:{strDate ="星期二"}break;case 3:{strDate = "星期三"}break;
			case 4:{strDate = "星期四"}break;case 5:{strDate = "星期五"}break;
			case 6:{strDate = "星期六"}break;case 7:{strDate = "星期日"}break;
		}year = today.getYear()+1900;
			month = today.getMonth()+1;date = today.getDate();hour = today.getHours();minute =today.getMinutes();
			second = today.getSeconds();document.getElementById('time').innerHTML = year+"年"+month+"月"+date+"日&nbsp;"+strDate+" "+hour+":"+minute+":"+second;
			//显示时间
			setTimeout("showtime();", 1000); //设定函数自动执行时间为 1000 ms(1 s)
		}
	</script>
</head>
<body>

<!-- 显示日期,时间 -->
<a href="plug/cl.html"><span id="time"></span></a>
<script language="javascript">showtime();</script>&nbsp;
<a id="xxx">欢迎</a>
<br/>

<!--百度搜索代码-->
<div align="center">
	<form action="http://www.baidu.com/baidu" target="_blank">	
			<input type="text" name="word" size="30" autofocus="autofocus" placeholder="百度搜索">
			<input type="submit" value="搜索">		
	</form>

<!--Google搜索-->
	<form method="get" action="http://www.google.com/search" target="_blank">
		<input type="text" name="q" size="30" placeholder="谷歌搜索">
		<input type="submit" name="btnG" value="搜索">
	</form>
</div>


<hr color="#ff0000" size="3" align="center" />

	<font color="#663300">工具</font>
		<a href="http://map.baidu.com/" target="_blank">地图<a> 
		<a href="http://fanyi.baidu.com/#auto/zh/" target="_blank">翻译</a> 
		<a href="http://image.baidu.com/" target="_blank">图片</a>
		<a href="http://mail.163.com/#from=ntes_product" target="_blank">163邮箱</a> 
		<a href="https://mail.qq.com/cgi-bin/loginpage" target="_blank">QQ邮箱</a>
		<a href="https://zh.wikipedia.org/wiki/Wikipedia:%E9%A6%96%E9%A1%B5" target="_blank">维基百科</a>
		<a href="https://www.getlantern.org/" target="_blank">蓝灯</a> 
		<a href="http://www.ishadowsocks.net/" target="_blank">shadowsocks</a> 
		<a href="http://jeeliu.com/" target="_blank">GTX</a>
		<a href="http://yun.baidu.com/" target="_blank">百度云</a> 
		<a href="http://www.weiyun.com/" target="_blank">微云</a>	
		<a href="http://www.virscan.org/" target="_blank">virscan</a>
		<a href="https://zhidao.baidu.com/daily" target="_blank">知道日报</a>
		<a href="http://www.bjsubway.com" target="_blank">北京地铁</a> 
		<a href="http://www.12306.cn/mormhweb/" target="_blank">12306</a>
		<a href="http://bj.58.com/" target="_blank">58</a> 
		<a href="http://bj.ganji.com" target="_blank">赶集</a> 
		<a href="https://www.dianping.com/" target="_blank">点评
		<a href="http://www.360.com" target="_blank">360</a>
<hr/>	
	<font color="#663300">娱乐</font>
		<a href="http://www.80s.tw/" target="_blank">80s</a> 
		<a href="http://www.a67kk.com/" target="_blank">A67</a> 
		<a href="http://www.dy2018.com/" target="_blank">电影天堂</a>
		<a href="http://tieba.baidu.com" target="_blank">贴吧</a> 
		<a href="http://weibo.com/" target="_blank">微博</a> 
		<a href="http://www.jianshu.com/" target="_blank">简书</a>
		<a href="https://www.pinterest.com/" target="_blank">pinterest</a>
		<a href="http://club.lenovo.com.cn" target="_blank">联想签到</a>
		<a href="http://www.qq.com" target="_blank">腾讯</a>
		<a href="http://www.ifeng.com/" target="_blank">凤凰</a>	
		<a href="http://www.sina.com.cn/" target="_blank">新浪</a>
		<a href="http://facebook.com" target="_blank">Facebook</a>
		<a href="http://twitter.com" target="_blank">Twitter</a>
		<a href="https://www.linkedin.com/" target="_blank">Linked</a>	
<hr/>		
	<font color="#663300">it论坛</font>
		
		<a href="http://stackoverflow.com/" target="_blank" title="需翻墙">stackoverflow</a>
<hr/>
	<font color="#663300">前端插件</font>
		<a href="http://www.dowebok.com/" target="_blank">Dowebok</a>
		<a href="http://fex.baidu.com/webuploader/" target="_blank">webuploader</a>
		<a href="https://www.highcharts.com" target="_blank">highcharts</a>
<hr/>	
	<font color="#663300">金融</font>
		<a href="http://cn.digitglobal.limited/?lang=ch" target="_blank">DGC</a>
		<a href="https://digitcoin.biz/" target="_blank">2</a>
		<a href="http://www.btc38.com" target="_blank">比特时代</a>
		<a href="http://www.ccb.com/" target="_blank">建行</a>
		<a href="http://www.icbc.com.cn/icbc/" target="_blank">工行</a>
		<a href="http://www.abchina.com/cn/" target="_blank">农行</a>
		<a href="http://jr.jd.com/" target="_blank">京东金融</a>
<hr/>	
	<font color="#663300">IT</font>
		<a href="http://97ui.com/" target="_blank">优界网</a>		
		<a href="http://www.oschina.net/" target="_blank">开源中国社区</a>		
		<a href="http://www.ituring.com.cn/" target="_blank">图灵社区</a>
		<a href="http://www.mcqyy.com/RunCode/php/" target="_blank">PHP在线测试</a>
		<a href="http://Book.phpyanxi.com" target="_blank">PHP在线文档</a>	
		<a href="http://lanewechat.lanecn.com/" target="_blank">lanewechat</a>	
		<a href="http://www.unserialize.com/" target="_blank">php-json</a>
		<a href="http://www.lampweb.org/" target="_blank" title="移动web开发, linux shell 入门教程,SEO 网站性能优化">lampweb</a>
<hr/>	
	<font color="#663300">---</font>
		<a href="http://layer.layui.com/" target="_blank">layer</a>
		<a href="http://layer.layui.com/api.html" target="_blank">api</a>
		<a href="https://github.com" target="_blank">github</a> 
			<a href="https://git.oschina.net/" target="_blank">码云</a>
		<a href="http://www.composer.com" target="_blank">composer</a>
		<a href="http://www.w3school.com.cn/" target="_blank">W3C</a> 
			<a href="http://php.net/manual/zh/" target="_blank">PHP.Net</a>
		<a href="https://packagist.org/" target="_blank">packagist</a>
<hr/>
	<font color="#663300">---</font>
		<a href="http://www.php100.com" target="_blank">PHP100</a>
		<a href="http://www.bejson.com" target="_blank">bejson</a>
		<a href="https://segmentfault.com/t/php" target="_blank">segmentfault</a>
		<a href="http://www.v2ex.com/go/php" target="_blank">v2ex</a>
		<a href="http://tongji.baidu.com/data/hrowser" target="_blank">浏览器市场份额</a>
		<a href="http://www.coderonline.net/" target="_blank">程序员互动联盟</a>
		<a href="http://www.iplaysoft.com/" target="_blank">异次元软件</a>
		<a href="http://www.appinn.com/" target="_blank">小众软件</a>
		<a href="http://www.pintuer.com/">拼图</a>
		<a href="http://v3.bootcss.com/" target="_blank">bootstrap</a>
<hr/>		
	<font color="#663300">教育</font>
		<a href="http://www.imooc.com" target="_blank">慕课网</a> 
		<a href="http://www.runoob.com/" target="_blank">菜鸟学院</a> 
		<a href="http://study.163.com" target="_blank">网易云课堂</a> 
		<a href="http://www.jikexueyuan.com/" target="_blank">极客学院</a> 	
		<a href="http://edu.51cto.com/?www" target="_blank">51CTO</a> 	
		<a href="http://bbs.houdunwang.com/" target="_blank">后盾网</a> 
		<a href="http://dvd.boxuegu.com/" target="_blank">博学谷</a> 			
		<a href="http://www.kancloud.cn/" target="_blank">看云在线文档</a> 
		<a href="http://edu.yuantuan.com/" target="_blank">猿团教育</a> 
		<a href="http://www.lthack.com/" target="_blank">龙天论坛</a> 
		<a href="http://edu.csdn.net/courses/o364_s367" target="_blank">CSDN</a>	
<hr/>	
	<font color="#663300">站长</font>
		<a href="http://tool.chinaz.com/" target="_blank">站长之家工具</a>
		<a href="http://tool.lu/" target="_blank">tool 1</a>
		<a href="http://tools.jb51.net/" target="_blank">2</a>	
		<a href="http://www.guixiandao.com/" target="_blank">龟仙岛</a>
		<a href="http://www.90qh.com/" target="_blank">空间</a>
		<a href="http://jsonlint.com/" target="_blank">jsonlint</a>
		<a href="https://www.aliyun.com/" target="_blank">阿里云</a>
<hr/>	
	<font color="#663300">Laravel</font>
		<a href="http://www.golaravel.com/" target="_blank">Laravel中文</a>



<hr/>		
	<font color="#663300">接口</font>
		<a href="http://connect.qq.com/" target="_blank">QQ</a> 
		<a href="http://open.weibo.com/" target="_blank">新浪</a> 
		<a href="http://open.taobao.com/" target="_blank">淘宝</a>
		<a href="http://www.yuntongxun.com/user/login" target="_blank">容联</a>
		<a href="http://www.geetest.com/" target="_blank">极验验证码</a>
		<a href="http://cx.shouji.360.cn/" target="_blank">归属地</a> 
		<a href="http://haoma.baidu.com/query" target="_blank">归属地</a>
		<a href="http://www.kuaidi100.com/" target="_blank">查快递</a>
		<a href="http://www.ip138.com/" target="_blank">IP查询</a> 
		<a href="http://www.cz88.net/" target="_blank">纯真IP</a>
		<a href="https://www.juhe.cn/" target="_blank">聚合数据</a>
		<a href="https://www.99bill.com/" target="_blank">快钱</a>
<hr/>	
	<font color="#663300">资讯</font>
		<a href="http://www.xuexi111.com/" target="_blank">学习资料库</a>
		<a href="http://www.geekpark.net" target="_blank">极客公园</a>
		<a href="http://www.ithome.com/" target="_blank">IT之家</a>
		<a href="http://www.51cto.com/" target="_blank">51CTO</a>
		<a href="http://bohaishibei.com/" target="_blank">渤海拾贝</a>
		<a href="http://blog.sina.com.cn/s/articlelist_5617139976_0_1.html" target="_blank">白俊遥1</a>  
		<a href="http://baijunyao.com/" target="_blank">2</a>
		<a href="http://www.wooyun.org/" target="_blank">乌云网</a>
		<a href="http://www.pediy.com/" target="_blank">看雪学院</a>
		<a href="http://www.zhaoyuanma.com/" target="_blank">找源码</a>
		<a href="http://www.xuepojie.com/" target="_blank">学破解</a>
<hr/>	
	<font color="#663300">工作</font>
		<a href="http://job.csdn.net/" target="_blank">CSDN</a> 
		<a href="http://gaozhao.51cto.com/" target="_blank">51招聘</a> 	
		<a href="http://www.dajie.com/" target="_blank">大街网</a> 
		<a href="http://www.lagou.com/" target="_blank">拉勾网</a> 
		<a href="https://www.liepin.com/" target="_blank">猎聘网</a> 
		<a href="http://www.51job.com/" target="_blank">前程无忧</a> 
		<a href="http://www.zhaopin.com/" target="_blank">智联招聘</a> 
		<a href="http://www.chinahr.com" target="_blank">中华英才</a> 
		<a href="http://job.oschina.net/" target="_blank">开源中国招聘</a> 
		<a href="http://www.neitui.me/" target="_blank">内推</a> 
		<a href="http://www.oxcoder.com/" target="_blank">猿圈</a>
<hr/>	
	<font color="#663300">购物</font></a>
		<a href="https://www.taobao.com" target="_blank">淘宝</a>  
		<a href="https://www.jd.com" target="_blank">京东</a>  
		<a href="https://www.tmall.com/" target="_blank">天猫</a>  
		<a href="http://bj.meituan.com/" target="_blank">美团</a>  
		<a href="http://mall.360.com/" target="_blank">360</a>  
		<a href="http://www.mi.com/" target="_blank">小米</a>  
		<a href="http://www.smzdm.com/" target="_blank">什么值得买</a>  
		<a href="http://www.yhd.com/" target="_blank">一号店</a>  
		<a href="http://www.amazon.cn/" target="_blank">亚马逊</a>  
		<a href="http://www.muji.com.cn/" target="_blank">无印良品</a> 
		<a href="http://www.dgtle.com/" target="_blank">数字尾巴</a> 
		<a href="http://you.163.com/" target="_blank">网易严选</a> 
		<a href="http://www.etao.com/" target="_blank">一淘</a>
<br/>
<hr color="#0000ff" size="3"/>


<script>
	$('#xxx').on('click', function(){
		//弹出一个tips层
	    layer.tips("<div>这个年纪的我们...<br/>有梦想<br/>有追求<br/>这个年纪的我们...<br/>在都市奋斗<br/>!!!</div>", '#xxx');
	});

	$('#baby').on('click', function(){
		//iframe层
		layer.open({
			type: 2,
			title: '井妈和吃货',
			shadeClose: true,
			shade: 0.8,
			area: ['380px', '90%'],
			content: 'plug/shen.html' //iframe的url
		});
	});
</script>

<!--版权及Email-->
<p align="center"><font>&copy;2016.3.13</font><a href="mailto:furhacker@163.com">老枼</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
友情链接 : <a href='javascript:void(0)'  target="_blank">菜鸟微博</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</body>
</html>