<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>{{$language.SessionsList}}</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="{{$template_root}}/all_purpose_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function searchit(){
	document.search.action = "admin.php?controller=admin_autorunlog&backup=1";
	document.search.action += "&addr="+document.search.ip.value;
	document.search.action += "&name="+document.search.name.value;
	document.search.action += "&servername="+document.search.servername.value;
	document.search.action += "&start1="+document.search.f_rangeStart.value;
	document.search.action += "&start2="+document.search.f_rangeEnd.value;
	
	//alert(document.search.action);
	//return false;
	return true;
}
</script>
<link type="text/css" rel="stylesheet" href="./template/admin/cssjs/jscal2.css" />
<link type="text/css" rel="stylesheet" href="./template/admin/cssjs/border-radius.css" />
<script src="./template/admin/cssjs/jscal2.js"></script>
<script src="./template/admin/cssjs/cn.js"></script>
</head>
<body>
<style type="text/css">
a {
    color: #003499;
    text-decoration: none;
} 
a:hover {
    color: #000000;
    text-decoration: underline;
}
</style>
<td width="84%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
{{if $smarty.session.ADMIN_LEVEL eq 10 or $smarty.session.ADMIN_LEVEL eq 101}}
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=main">密码查看</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordedit">修改密码</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
{{if $smarty.session.ADMIN_LEVEL eq 10}}
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=password_cron">定时任务</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=passdown">密码文件下载</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordcheck">密码校验</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
{{/if}}
{{else}}
    {{if $smarty.get.type eq 'run'}}
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_autorun&action=autobackup_list">备份管理</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_a"><img src="{{$template_root}}/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_autorun&action=autobackup_list&type=run">巡检帐号</a><img src="{{$template_root}}/images/an3.jpg" align="absmiddle"/></li>
	{{else}}
	<li class="me_a"><img src="{{$template_root}}/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_autorun&action=autobackup_list">备份管理</a><img src="{{$template_root}}/images/an3.jpg" align="absmiddle"/></li>
	
	{{/if}}
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_autorun&action=autotemplate">巡检管理</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_autorun&action=detail_config">巡检检测</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_autorun&action=autorun_result">检测结果</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
{{/if}}
</ul><span class="back_img"><A href="admin.php?controller=admin_autorun&action=autobackup_list&type={{$type}}&back=1"><IMG src="{{$template_root}}/images/back1.png" 
      width="80" height="25" border="0"></A></span>
</div></td></tr>

  <tr>
    <td class="main_content">
<form action="admin.php?controller=admin_autorunlog&backup=1" method="post" name="search" >
名称：<input type="text" class="wbk" name="name" size="13" />
服务器地址：<input type="text" class="wbk" name="ip"  size="13" />
服务器名称：<input type="text" class="wbk" name="servername" size="13" />
开始日期：<input type="text" class="wbk"  name="f_rangeStart" size="13" id="f_rangeStart" value="" class="wbk"/>
 <input type="button" onclick="changetype('timetype3')" id="f_rangeStart_trigger" name="f_rangeStart_trigger" value="选择时间" class="bnnew2"  class="wbk">

 结束日期：
<input  type="text" class="wbk" name="f_rangeEnd" size="13" id="f_rangeEnd" value="" class="wbk"/>
 <input type="button" onclick="changetype('timetype3')" id="f_rangeEnd_trigger" name="f_rangeEnd_trigger" value="选择时间" class="bnnew2"  class="wbk">
	  &nbsp;&nbsp;<input type="submit" height="35" align="middle" onClick="return searchit();" border="0" value=" 确定 " class="bnnew2"/>
</form> 					
  <script type="text/javascript">
var cal = Calendar.setup({
    onSelect: function(cal) { cal.hide() },
    showTime: true
});
cal.manageFields("f_rangeStart_trigger", "f_rangeStart", "%Y-%m-%d %H:%M:%S");
cal.manageFields("f_rangeEnd_trigger", "f_rangeEnd", "%Y-%m-%d %H:%M:%S");


</script>
					</td>
  </tr>
  <tr><td><table bordercolor="white" cellspacing="0" cellpadding="5" border="0" width="100%" class="BBtable">
					<tr>
					<th class="list_bg" width="5%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=name&orderby2={{$orderby2}}">名称</a></th>
					<th class="list_bg" width="5%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=serverip&orderby2={{$orderby2}}">服务器IP</a></th>
						<th class="list_bg" width="5%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=servername&orderby2={{$orderby2}}">服务器名称</a></th>			
						<th class="list_bg" width="10%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=checktime&orderby2={{$orderby2}}">备份时间</a></th>
						<th class="list_bg" width="4%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=statuts&orderby2={{$orderby2}}">备份状态</a></th>
						<th class="list_bg" width="4%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=remotefile&orderby2={{$orderby2}}">备份文件</a></th>	
						<th class="list_bg" width="4%"><a href="admin.php?controller=admin_autorunlog&backup=1&orderby1=localfile&orderby2={{$orderby2}}">下载</a></th>					
					</tr>
					{{section name=t loop=$allsession}}
					<tr {{if $smarty.section.t.index % 2 == 0}}bgcolor="f7f7f7"{{/if}}>
						<td>{{$allsession[t].name}}</td>
						<td><a href="admin.php?controller=admin_autorunlog&backup=1&addr={{$allsession[t].serverip}}">{{$allsession[t].serverip}}</a></td>			
						<td><a href="admin.php?controller=admin_autorunlog&backup=1&name={{$allsession[t].servername}}">{{$allsession[t].servername}}</a></td>
						<td><a href="admin.php?controller=admin_autorunlog&backup=1&time={{$allsession[t].backuptime}}">{{$allsession[t].backuptime}}</a></td>
						<td><a href="admin.php?controller=admin_autorunlog&backup=1&status={{$allsession[t].statuts}}">{{if $allsession[t].statuts}}是{{else}}否{{/if}}</a></td>	
						<td><a href="admin.php?controller=admin_autorunlog&backup=1&message={{$allsession[t].message}}">{{$allsession[t].logpath}}</a></td>
						<td style="TEXT-ALIGN: left;"><img src="{{$template_root}}/images/ico2.gif" width="16" height="16" align="absmiddle"><a href="admin.php?controller=admin_autorunlog&action=download&sid={{$allsession[t].id}}&start_page=1" target="hide">下载</a> |
						<img src="{{$template_root}}/images/scico.gif" width="16" height="16" align="absmiddle"><a href="admin.php?controller=admin_autorunlog&action=delete&sid={{$allsession[t].id}}">删除</a>
						</td>
					</tr>
					{{/section}}
					<tr>
						<td colspan="12" align="right">
							{{$language.all}}{{$session_num}}{{$language.Session}}  {{$page_list}}  {{$language.Page}}：{{$curr_page}}/{{$total_page}}{{$language.page}}  {{$items_per_page}}{{$language.item}}{{$language.Log}}/{{$language.page}}  {{$language.Goto}}<input name="pagenum" type="text" class="wbk" size="2" onKeyPress="if(event.keyCode==13) window.location='{{$curr_url}}&page='+this.value;">{{$language.page}} <!--当前数据表: {{$now_table_name}}--> 
						<!--
						<select  class="wbk"  name="table_name">
						{{section name=t loop=$table_list}}
						<option value="{{$table_list[t]}}" {{if $table_list[t] == $now_table_name}}selected{{/if}}>{{$table_list[t]}}</option>
						{{/section}}
						</select>
						-->
						</td>
					</tr>
				</table>
	</td>
  </tr>
</table>

<iframe name="hide" height="0" frameborder="0" scrolling="no" id="hide"></iframe>
</body>
</html>


