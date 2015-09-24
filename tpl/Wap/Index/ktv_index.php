<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{pigcms{$tpl.wxname}</title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="{pigcms{$static_path}css/ktv/news5.css" rel="stylesheet" type="text/css" />
<script src="{pigcms{$static_path}js/ktv//iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 setInterval(function(){
myScroll.scrollToPage('next', 0，400，0);
},3500 );
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
<style type="text/css">
#scroller {
width:0px;
}
</style>
</head>

<body id="cate7">
<div class="banner"><img src="{pigcms{$flash[0]['img']}" /></div>



<ul class="cateul">

<volist name="info" id="vo">
<li class="li0 ">
<a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
<div class="menubtn">
<div class="menuimg"><img src="{pigcms{$vo.img}" /></div>
<div class="menutitle">{pigcms{$vo.name}</div>
</div>
</a>
</li>
</volist>
 	
<div class="clr"></div>
</ul>

<eq name="copyright" value="0">
<style>
.banq{ width:320px; height:30px; line-height:30px; border-top:3px solid #CCC; font-size:.9em; color:#999; text-align:center;}
</style>
<div class="banq">
	<php>echo htmlspecialchars_decode(C('copyright'))</php></div>
</eq>
<include file="Index:styleInclude"/><include file="$cateMenuFileName"/> 
	<if condition="ACTION_NAME eq 'index'">
		<script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": '0',
					"imgUrl": "{pigcms{$homeInfo.picurl}", 
					"timeLineLink": "{pigcms{:C('site_url')}{pigcms{:U(Index/ACTION_NAME,array('token'=>$_GET['token']))}",
					"sendFriendLink": "{pigcms{:C('site_url')}{pigcms{:U(Index/ACTION_NAME,array('token'=>$_GET['token']))}",
					"weiboLink": "{pigcms{:C('site_url')}{pigcms{:U(Index/ACTION_NAME,array('token'=>$_GET['token']))}",
					"tTitle": "{pigcms{$homeInfo.title}",
					"tContent": "{pigcms{$homeInfo.info}"
				};
		</script>
	<else />
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Index",
				"moduleID": '1',
				"imgUrl": "{pigcms{$homeInfo.picurl}", 
				"timeLineLink": "{pigcms{:C('site_url')}{pigcms{:U(Index/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']))}",
				"sendFriendLink": "{pigcms{:C('site_url')}{pigcms{:U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']))}",
				"weiboLink": "{pigcms{:C('site_url')}{pigcms{:U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']))}",
				"tTitle": "{pigcms{$homeInfo.title}",
				"tContent": "{pigcms{$homeInfo.info}"
			};
		</script>	
	
	</if>
{pigcms{$shareScript}
</body>
</html>
