<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <if condition="$zd['status'] eq 1">
            {pigcms{$zd['code']}
        </if>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{pigcms{$tpl.wxname}</title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="{pigcms{$static_path}tpl/1136/css/cate8_2.css" rel="stylesheet" type="text/css" />


</head>

<body>


 <div id="insert1" ></div>
<ul class="mainmenu">

   <volist name="info" id="vo">
   
	<li>
		<div class="menubtn">
			<a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
				<div class="menuimg"><img src="{pigcms{$vo.img}" /><p class="menutitle">{pigcms{$vo.name}</p></div>
			
		</a>
		</div>
		
	</li>
   </volist>
 	
<div class="clr"></div>
</ul>


 <div id="insert2" ></div>
<if condition="$homeInfo['copyright']">
<div class="copyright">{pigcms{$homeInfo.copyright}</div> 
</if>
<include file="Index:styleInclude"/>
<include file="$cateMenuFileName"/> 
<!-- share -->
<include file="Index:share" />
 </body>
</html>