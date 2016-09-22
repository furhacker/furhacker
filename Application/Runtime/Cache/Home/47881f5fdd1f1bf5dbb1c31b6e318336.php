<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- <script src="<?php echo C('JS_URL');?>jquery-1.8.3.min.js"></script> -->
	<title>信息查询</title>
</head>
<body>
<h2>信息查询</h2>
<table>
	<tr>
		<td><span>IP : </span></td>
		<td><input type="text" placeholder="请输入要查询的IP"/></td>
		<td><button id="searchIp">查询</button></td>
	</tr>
	<tr>
		<td><span>天气 :</span></td>
		<td><input type="text" autofocus="autofocus" placeholder="请输入要查询的城市" id="city"/></td>
		<td><button value="查询" id="search">查询</button></td>
	</tr>	
	<tr>
		<td><span value="">电话号码归属地 :</span></td>
		<td><input type="text" placeholder="请输入要查询的电话号码" id="tel" /></td>
		<td><button id="searchTel"/>查询</td>
	</tr>
</table>
<textarea id="searchResult" rows="10"></textarea>
<a href="<?php echo U('Index/index22');?>"><input type="button" value="返回首页" /></a>
<script type="text/javascript">//查询天气
// js原生写法
	// get方式
	/*document.getElementById("search").onclick = function(){
		// 发送ajax查询请求并处理
		var request = new XMLHttpRequest();
		request.open("GET","<?php echo U('Mes/weather');?>?city="+document.getElementById("city").value);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState === 4) {
				if (request.status === 200) {
					document.getElementById("searchResult").innerHTML = request.responseText;
				} else {
					alert("发送错误" + request.status);
				}
			}
		};
	};*/

	// post方式
	document.getElementById("search").onclick = function(){
		// 发送ajax查询请求并处理
		var request = new XMLHttpRequest();
		request.open("POST","<?php echo U('Mes/weather');?>");
		var data = "city=" + document.getElementById("city").value;
		request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		request.send(data);
		request.onreadystatechange = function(){
			if (request.readyState === 4) {
				if (request.status === 200) {
					document.getElementById("searchResult").innerHTML = request.responseText;
				} else {
					alert("发送错误" + request.status);
				}
			}
		};
	};

// jQuery写法
	// get方法
	/*$(document).ready(function(){			
		$("#search").click(function(){
			$.ajax({
				type:"GET",
				url:"<?php echo U('Mes/weather');?>"+$("#city").val(),
				dataType:"json",
				success:function(data){
					if(data.success){
						$("#searchResult").html(data.msg);
					} else {
						$("#searchResult").html("出现错误 : "+data.msg);
					}
				},
				error:function(jqXHR){
					alert("发生错误"+jqXHR.status);
				}
			});
		});
	});

	// post 方法
	$(document).ready(function(){
		$("#search").click(function(){
			$.ajax({
				type:"POST",
				url:"<?php echo U('Mes/weather');?>",
				dataType:"json",
				data:{
					city:$("#city").val(),
				},
				success:function(data){
					if(data.success){
						$("#searchResult").html(data.msg);
					} else {
						$("#searchResult").html("出现错误 : "+data.msg);
					}
				},
				error:function(jqXHR){
					alert("发生错误"+jqXHR.status);
				}
			});
		});
	});*/

</script>

</body>
</html>