<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <if condition="$zd['status'] eq 1">
            {pigcms{$zd['code']}
        </if>

<title>{pigcms{$tpl.wxname}</title>

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="{pigcms{$static_path}tpl/1116/css/cate.css" rel="stylesheet" type="text/css" />
 <link href="{pigcms{$static_path}tpl/com/css/iscroll.css" rel="stylesheet" type="text/css" />

<script src="{pigcms{$static_path}tpl/com/js/jquery.min.js" type="text/javascript"></script>
<script src="{pigcms{$static_path}tpl/com/js/swipe.js" type="text/javascript"></script>
<script src="{pigcms{$static_path}tpl/com/js/iscroll.js" type="text/javascript"></script>
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
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
<script>
    $(function(){
        window.swiper_2 = new Swipe(document.getElementById('list_uls'), {
            speed:500,
           // auto:3000,
            callback: function(){
               var lis = $(".nav_for_list_ul ul:first-of-type li");
               lis.removeClass("on").eq(this.index).addClass("on");
               var las = $(".nav_for_list_ul ul:nth-of-type(2) a");
               las.removeClass("on").eq(this.index).addClass("on");

               var minIndex = 0;
               var maxIndex = Math.max(0, nav_uls.length - 3);
               var range = [this.index-1, minIndex, maxIndex];
               //

               range = range.sort(function(a, b){
                       	return a>b?1:-1;
                       });
               window.nav_uls.slide(range[1]);
            }
        });
    });
</script>
</head>

<body>
		<!--music-->
		<if condition="$homeInfo['musicurl'] neq false">
			<include file="Index:music"/>
		</if>

<div class="banner">
  <div id="wrapper">
    <div id="scroller">
      <ul id="thelist">
				<volist name="flash" id="so">    
					<li><p>{pigcms{$so.info}</p><a href="{pigcms{$so.url}"><img src="{pigcms{$so.img}" /></a></li>
				</volist>     
      </ul>
    </div>
  </div>
    <div id="nav">
    <div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,2);return false">&larr; prev</div>
    <ul id="indicator">
				<volist name="flash" id="so">
					<li <if condition="$i eq 1">class="active"</if> ></li>
				</volist>
          </ul>
    <div id="next" onclick="myScroll.scrollToPage('next', 0,400,2);return false">next &rarr;</div>
  </div>
    <div class="clr"></div>
</div>
 

<div id="insert1" ></div>







<section>
  <nav class="nav_for_list_ul">
    <div class="ofh">
      <ul>
			<for start="1" end="count($info)">
               <li <if condition="$i == 4">class="on"</if>></li>
			 </for>

       </ul>
      <ul>
        <div id="nav_uls" style="width:33.3%;">
          <ol>
           
				<volist name="info" id="vo">
                    <li><a href="javascript:swiper_2.slide({pigcms{$i-1});" <if condition="$i == 1">class="on"</if>><img src="{pigcms{$vo.img}" />{pigcms{$vo.name}</a></li>
				</volist>
                       </ol>
        </div>
      </ul>
      <script>
window.nav_uls = new Swipe(document.getElementById('nav_uls'), {
speed:500,
callback: function(){
if(this.index>(this.length-3)){
this.slide(this.length-3);
}
}
});
</script> 
    </div>
  </nav>
  <div id="list_uls" class="list_uls box_swipe">
    <ul>
      
	<volist name="info" id="vo">

	   <li>
        <dl>
	<volist name="vo['sub']" id="res">
			<dd>

				<a href="<if condition="$res['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$vo['token']))}<else/>{pigcms{$res.url|htmlspecialchars_decode}</if>">
            <figure>
              <div><img src="{pigcms{$res.img}" /></div>
              <figcaption>
                <label style="cursor:pointer;">{pigcms{$res.name}</label>
              </figcaption>
            </figure>
				</a> 
			
			</dd>
	   </volist>
	</dl>
      </li>
	   </volist>     
    
    </ul>
  </div>
</section>
<script>


var count = document.getElementById("thelist").getElementsByTagName("img").length;	


for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );

window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

</script> 

<if condition="$homeInfo['copyright']">
<div class="copyright">{pigcms{$homeInfo.copyright}</div> 
</if>  
<include file="Index:styleInclude"/>
<include file="$cateMenuFileName"/> 
<!-- share -->
<include file="Index:share" />
</body>
</html>