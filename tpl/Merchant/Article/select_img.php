<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="/tpl/Merchant/static/css/style_2_common.css" />
<script src="/tpl/Merchant/static/js/common.js" type="text/javascript"></script>
<link href="/tpl/Merchant/static/css/style.css" rel="stylesheet" type="text/css" />
<script src="/static/js/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/tpl/Merchant/static/css/cymain.css" />
<script type="text/javascript" src="./static/js/artdialog/jquery.artDialog.js"></script>
<script type="text/javascript" src="./static/js/artdialog/iframeTools.js"></script>
<style>
body{line-height:180%;}
ul.modules li{padding:4px 10px;margin:4px;background:#efefef;float:left;width:27%;}
ul.modules li div.mleft{float:left;width:40%}
ul.modules li div.mright{float:right;width:55%;text-align:right;}
</style>
</head>
<body style="background:#fff;padding:20px 20px;">
<div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;">使用方法：点击对应内容后面的“选中”即可。</div>
<h4>列表</h4>
<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
<th>标题</th>
<th style=" width:80px;">操作 <span class="tooltips" ><img src="./tpl/Merchant/static/images/price_help.png" align="absmiddle" /><span>
<p>点击“选中”即可</p>
</span></span></th>
</tr>
</thead>
<if condition="$list">
<volist name="list" id="m">
<tr><td>{pigcms{$m.title}</td><td class="norightborder"><a href="###" onclick="returnHomepage({pigcms{$m.pigcms_id},'{pigcms{$m.title}','{pigcms{$m.cover_pic}','{pigcms{$m.digest}')">选中</a></td></tr>
</volist>
<else/>
<tr><td colspan="2" align="center"><a href="{pigcms{:U('Article/one')}" target="_blank" style="color:#369">还没有图文消息，请点击这里添加图文消息</a></td></tr>
</if>
</table>
<div class="footactions" style="padding-left:10px">
  <div class="pages">{pigcms{$page}</div>
</div>
<script>
var titledom=art.dialog.data('titledom');
var imgids=art.dialog.data('imgids');
// 返回数据到主页面
function returnHomepage(id,title,pic,info){
	var origin = artDialog.open.origin;
	var dom = origin.document.getElementById(titledom);
	var imgidsdom = origin.document.getElementById(imgids);
	var multinews= origin.document.getElementById(art.dialog.data('multinews'));
	var singlenews= origin.document.getElementById(art.dialog.data('singlenews'));
	var multione= origin.document.getElementById(art.dialog.data('multione'));
	var js_appmsg_preview= origin.document.getElementById(art.dialog.data('js_appmsg_preview'));
	//dom.value+=','+url;
	imgCount=imgidsdom.value.split(',').length-1;
	//
	dom.innerHTML='<div class="mediaPanel"><div class="mediaHead"><span class="title" id="zbt">'+title+'</span><span class="time"><?php echo date('Y-m-d',time());?></span><div class="clr"></div></div><div class="mediaImg"><img id="suicaipic1" src="'+pic+'"></div><div class="mediaContent mediaContentP"><p id="zinfo">'+info+'</p></div><div class="mediaFooter"><span class="mesgIcon right"></span><span style="line-height:50px;" class="left">查看全文</span><div class="clr"></div></div></div>';
	
	if(multione.innerHTML==''){
		singlenews.style.display="";
		multinews.style.display="none";
		
		multione.innerHTML=' <h4 class="appmsg_title"><a href="javascript:void(0);" onClick="return false;" target="_blank">'+title+'</a></h4><div class="appmsg_thumb_wrp"><img style="border:1px solid #ddd" class="js_appmsg_thumb appmsg_thumb" src="'+pic+'"><i class="appmsg_thumb default" style="background:url('+pic+');background-size:100% 100%">&nbsp;</i></div>';
		
	}else{
		singlenews.style.display="none";
		multinews.style.display="";
		js_appmsg_preview.innerHTML=js_appmsg_preview.innerHTML+'<div id="appmsgItem4" data-fileid="" data-id="4" class="appmsg_item js_appmsg_item "><img class="js_appmsg_thumb appmsg_thumb" src="'+pic+'"><i class="appmsg_thumb default" style="background:url('+pic+');background-size:100% 100%">&nbsp;</i><h4 class="appmsg_title"><a onClick="return false;" href="javascript:void(0);" target="_blank">'+title+'</a></h4></div>';
	}
	dom.style.display="";
	if (imgidsdom.value == '') {
		imgidsdom.value = id;
	} else {
		imgidsdom.value += ',' + id;
	}
	
	setTimeout("art.dialog.close()", 100 )
}
</script>
</body>
</html>