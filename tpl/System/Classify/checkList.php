<include file="Public:header"/>		<div class="mainbox">			<div id="nav" class="mainnav_title">				<ul>					<a href="#" class="on">需审核信息列表</a>				</ul>			</div>			<if condition="$isverify eq 1">			<!--<table class="search_table" width="100%">				<tr>					<td>					</td>				</tr>			</table>-->			<form name="myform" id="myform" action="" method="post">				<div class="table-list">					<table width="100%" cellspacing="0">						<colgroup>							<col/>							<col/>							<col/>							<col/>							<col/>							<col/>							<col/>						</colgroup>						<thead>							<tr>								<th>ID</th>								<th>一级分类</th>								<th>二级分类</th>								<th>标题</th>								<th>联系人姓名</th>								<th>联系人电话</th>								<th>最后更改时间</th>								<th>状态</th>								<th class="textcenter">操作</th>							</tr>						</thead>						<tbody>							<if condition="!empty($needCheck)">								<volist name="needCheck" id="vo">									<tr>										<td>{pigcms{$vo.id}</td>										<td>{pigcms{$ClassifyArr[$vo['fcid']]}</td>										<td>{pigcms{$ClassifyArr[$vo['cid']]}</td>										<td>{pigcms{$vo.title}</td>										<td>{pigcms{$vo.lxname}</td>										<td>{pigcms{$vo.lxtel}</td>																				<td>{pigcms{$vo.updatetime|date='Y-m-d H:i:s',###}</td>										<td class="red">未审核</td>										<td class="textcenter"><a href="javascript:void(0);" onclick="toCheck({pigcms{$vo.id});">审核</a>&nbsp; | &nbsp;<a href="javascript:void(0);" onclick="window.top.artiframe('{pigcms{:U('Classify/infodetail',array('vid'=>$vo['id']))}','查看信息详情',680,560,true,false,false,verifybtn,'edit',true);">查看详细</a>&nbsp; | &nbsp;<a href="javascript:void(0);" onclick="toDelItem({pigcms{$vo.id});">删除</a></td>									</tr>								</volist>								<tr><td class="textcenter pagebar" colspan="9">{pigcms{$pagebar}</td></tr>							<else/>								<tr><td class="textcenter red" colspan="8">列表为空！</td></tr>							</if>						</tbody>					</table>				</div>			</form>			<else/>			<table class="search_table" width="100%">				<tr>					<td>					您未开启发布信息需要审核功能，请到》系统设置》分类信息 中开启					</td>				</tr>			</table>			</if>		</div><script type="text/javascript">function toCheck(id){   if(confirm('您确定审核通过此项吗？')){    $.post("{pigcms{:U('Classify/toVerify')}",{vid:id},function(data){	  data=parseInt(data);	  if(!data){          window.location.reload();	   }     },'JSON');   }else{     return false;   }}/***删除***/function toDelItem(id){    if(confirm('您确定删除此项吗？')){    $.post("{pigcms{:U('Classify/delItem')}",{vid:id},function(data){	  data=parseInt(data);	  if(!data){          window.location.reload();	   }     },'JSON');   }else{     return false;   }}</script><include file="Public:footer"/>