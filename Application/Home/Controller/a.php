<!-- 获取ip,浏览器,版本,操作系统信息 -->
<!-- <p align="left">
<?php 
	//获取IP地址
	function get_client_ip($type = 0,$adv=true)
	{
	    $type = $type ? 1 : 0;
	    static $ip = NULL;
	    if ($ip!== NULL) return $ip[$type];
	    if($adv){
	        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
	            $pos = array_search('unknown',$arr);
	            if(false !== $pos) unset($arr[$pos]);
	            $ip = trim($arr[0]);
	        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
	            $ip = $_SERVER['HTTP_CLIENT_IP'];
	        }elseif (isset($_SERVER['HTTP_X_REAL_IP'])) {
	            $ip = $_SERVER['HTTP_X_REAL_IP'];
	        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	            $ip = $_SERVER['REMOTE_ADDR'];
	        }
	    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    // IP地址合法验证
	    $long = sprintf("%u",ip2long($ip));
	    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	    return $ip[$type];
	}

	//获取客户端浏览器
	function get_client_browser()
	{
		$sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串
		if (stripos($sys, "Firefox/") > 0) {
			preg_match("/Firefox\/([^;)]+)+/i", $sys, $b);
			$exp[0] = "Firefox";
			$exp[1] = $b[1];  //获取火狐浏览器的版本号
		} elseif (stripos($sys, "Maxthon") > 0) {
			preg_match("/Maxthon\/([\d\.]+)/", $sys, $aoyou);
			$exp[0] = "傲游";
			$exp[1] = $aoyou[1];
		} elseif (stripos($sys, "MSIE") > 0) {
			preg_match("/MSIE\s+([^;)]+)+/i", $sys, $ie);
			$exp[0] = "IE";
			$exp[1] = $ie[1];  //获取IE的版本号
		} elseif (stripos($sys, "OPR") > 0) {
			preg_match("/OPR\/([\d\.]+)/", $sys, $opera);
			$exp[0] = "Opera";
			$exp[1] = $opera[1];  
		} elseif(stripos($sys, "Edge") > 0) {
			//win10 Edge浏览器 添加了chrome内核标记 在判断Chrome之前匹配
			preg_match("/Edge\/([\d\.]+)/", $sys, $Edge);
			$exp[0] = "Edge";
			$exp[1] = $Edge[1];
		} elseif (stripos($sys, "Chrome") > 0) {
			preg_match("/Chrome\/([\d\.]+)/", $sys, $google);
			$exp[0] = "Chrome";
			$exp[1] = $google[1];  //获取google chrome的版本号
		} elseif(stripos($sys,'rv:')>0 && stripos($sys,'Gecko')>0){
			preg_match("/rv:([\d\.]+)/", $sys, $IE);
			$exp[0] = "IE";
			$exp[1] = $IE[1];
		}else {
			$exp[0] = "未知浏览器";
			$exp[1] = ""; 
		}
		return $exp;
	}

	//获取客户端操作系统
	function get_client_os()
	{
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$os = false;
		if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent)){
			$os = 'Windows 7';
		}else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent)){
			$os = 'Windows 8';
		}else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent)){
			$os = 'Windows 10';#添加win10判断
		}else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent)){
			$os = 'Windows XP';
		}else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent)){
			$os = 'Windows NT';
		}else if (preg_match('/linux/i', $agent)){
			$os = 'Linux';
		}else if (preg_match('/unix/i', $agent)){
			$os = 'Unix';
		}else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent)){
			$os = 'SunOS';
		}else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent)){
			$os = 'IBM OS/2';
		}else{
			$os = '落伍啦, 该换换~\(≧▽≦)/~啦啦啦';
		}
		return $os;	
	}

	$client_ip = get_client_ip();
	$client_browser = get_client_browser();
	$client_os = get_client_os();
?>
<p align="center">
<?php
	echo "<br/>";
	echo '您的IP:',$client_ip,"&nbsp;&nbsp;&nbsp;";
	echo '浏览器:',$client_browser[0];
	echo '(版本:',$client_browser[1],')',"&nbsp;&nbsp;&nbsp;";
	echo '操作系统:',$client_os;
?>
</p>
<?php
	// PDO连接数据库
	$pdo = new PDO("mysql:host=localhost;dbname=db_demo","root","root");
	$sql = "INSERT INTO `visiter` VALUES(NULL,'{$client_ip}');";
	$result = $pdo -> exec($sql);
	$sql1 = "select * from visiter;";
	$coun = $pdo  -> exec($sql1);
	$co = rowCount($coun);

	//连库,保存访问用户
	/*@mysql_connect("localhost:3306","a305603817","17748624");
	@mysql_select_db("a305603817");
	$sql = "INSERT INTO `visiter` VALUES(NULL,'{$client_ip}');";
	$result = mysql_query($sql);
	$sql1 = "select * from visiter;";
	$coun = mysql_query($sql1);
	$co = @mysql_num_rows($coun);*/
?>
</p> -->