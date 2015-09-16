<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{pigcms{$res.title}-{pigcms{$tpl.wxname}</title>

    <link type="text/css" rel="stylesheet" href="{pigcms{$static_path}tpl/cont/com/css/comstyle.css"/>
    <link type="text/css" rel="stylesheet" href="{pigcms{$static_path}tpl/cont/com/css/font-awesome.css"/>
   <link href="{pigcms{$static_path}tpl/cont/3/css/article4.css" media="screen" rel="stylesheet" type="text/css" />

    <script src="{pigcms{$static_path}tpl/cont/com/js/comjs.js" type="text/javascript"></script>
  </head>

  <body>
    

    <div class="html">
      <div class="stage" id="stage">
        <section id="sec-index">
          
          <div class="body">
            


<div class="article ckeditor_content" id="article">

  <div class="hd">
    <h1>{pigcms{$res.title}</h1>
    <small>{pigcms{$res.createtime|date="Y-m-d",###}
</small>
  </div>

  <div class="bd">
<eq name="res.showpic" value="1">
<div class="showpic"><img src="{pigcms{$res.pic}" /></div> 
</eq>
    
<div class="text" id="content">
{pigcms{$res.info|htmlspecialchars_decode}
</div>
  </div>


</div>

<script>
$(function(){
  $(".ckeditor_content img").css({"height":"auto","width":"auto","max-width":"100%"});
});
</script>

          </div>
        </section>


            <section class="mod-share share-1">
        <a class="share-btn" onclick="showPop('#pop-share')"><span class="ico-share">发送给朋友</span></a>
        <a class="share-btn" onclick="showPop('#pop-share')"><span class="ico-pyq">分享到朋友圈</span></a>
    </section>

      </div><!--.stage end-->
    </div><!--.html end-->


    <div class="mod-pop" id="pop-share" onclick="hidePop('#pop-share')"><span class="text-share"></span></div>
 <div style="display:none">{pigcms{$res.tongji|htmlspecialchars_decode}</div>

<if condition="$homeInfo['copyright']">
<div class="copyright">{pigcms{$homeInfo.copyright}</div> 
</if>
<include file="Index:styleInclude"/>
<include file="$cateMenuFileName"/>

<!-- share -->
<include file="Index:content_share" />
  </body>
</html>