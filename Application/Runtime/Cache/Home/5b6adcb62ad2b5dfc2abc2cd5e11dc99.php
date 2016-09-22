<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>FHR导航网登录</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo C('CSS_URL');?>main2_0.css" rel="stylesheet" />

</head>
<body>
<script type="text/javascript">
  var childWindow;
  function toQqLogin()
  {
    childWindow = window.open("http://www.furhacker.cn/public/qq/oauth/qq_login.php","TencentLogin","width=700,height=380,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=400")
  }
  function closeChildWindow()
  {
      childWindow.close();
  }
</script>
<div class="wrapper">

  <div class="content">
    <div class="content-bg"></div>
    <div class="line-bg"></div>
    <div class="main">
      <div class="fast-login">
        <div class="title"> 社交账号登录 </div>
        <div class="clearfix">
          <a class="fast-login-btn qq-btn" href="javascript:;" onclick="toQqLogin()">使用腾讯QQ登录</a>
          <a class="fast-login-btn sina-btn" href="#">使用新浪微博登录</a>
          <a class="fast-login-btn taobao-btn" href="#">使用淘宝账号登录</a>
        </div>
      </div>
      <div class="login-mod">
        <div class="title"> 登录 </div>
        <div class="loginbox">
          <form id="loginForm" onsubmit="return false;">
            <label id="useridLabel" for="userid" class="tips">邮箱/手机号/登录名</label>
            <input name="userid" type="text" id="userid" class="user-text" value="" />
            <label id="passwordLabel" for="password" class="tips ptips" onclick="$('#password').focus();">密码</label>
            <input type="password" id="password" autocomplete="off" class="user-text" value="" />
            <input name="pwd" type="hidden" id="pwd" value="" />
            <input name="login" id="login" type="submit" onclick="submitLogin()" class="login-btn" value="登录" />
            <input type="hidden" name="backUrl" value="" />
            <p>
              <label class="autologon">
                <input name="is_auto" checked="checked" type="checkbox" value="1" />
                记住我</label>
              <a href="#">忘记密码?</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="<?php echo U('Reg/index');?>">还没账号? 马上注册 !</a></p>
            <div class="wrong-tips" id="wrongTips" style="display: none;">账号或密码错误，请重试</div>
          </form>
        </div>
      </div>
    </div>
    <div class="aside">
      <div class="title">全世界最全面的科技产品解读</div>
      <div class="look-formod">
        <div class="search-textbox">
          <input type="text" id="searchKword" class="search-text" placeholder="iphone5s" />
        </div>
        <input class="search-btn" onclick="" type="button" value="随便看看" />
      </div>
      <p id="picSrc">图片来源：<a class="pic-source" href="#" target="_blank">中关村在线壁纸</a></p>
    </div>
  </div>
</div>
<div class="foot">
  <div class="footer-nav-box">
    <div class="footer-nav">
      <div class="copyright">&copy;FHR Interactive. All rights reserved.</div>
      <p><a href="#">FHR简介</a>|<a href="#">用户注册</a>|<a href="#">隐私声明</a>|<!-- <a href="#">招聘</a>| --><a href="#">FHR历程</a>|<a href="#">品牌大全</a>|<a href="#">站点地图</a>|<a href="#">联系方式</a>|<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
    </div>
  </div>
</div>
<!-- <div style="text-align:center;">
<p>来源：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div> -->
</body>
</html>