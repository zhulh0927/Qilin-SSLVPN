<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>{{$title}}</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="{{$template_root}}/all_purpose_style.css" rel="stylesheet" type="text/css" />
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
</head>
 <SCRIPT language=javascript src="{{$template_root}}/images/selectdate.js"></SCRIPT>
 <SCRIPT type=text/javascript>
var siteUrl = "{{$template_root}}/images/date";
</SCRIPT>
<body>


	<table width="100%" border="0" cellspacing="0" cellpadding="0" >
<tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>

	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=config_ssh">认证配置</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
    <li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=config_ftp">系统参数</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
    <li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=login_times">密码策略</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=ha">高可用性</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=syslog_mail_alarm">告警配置</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=status_warning">告警参数</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
	<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_config&action=loadbalance">负载均衡</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
</ul>
</div></td></tr>
  <tr>
	<td class="">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="BBtable">
         
    <form name="f1" method=post action="admin.php?controller=admin_config&action=proxyip_save">
		<tr><th colspan="3" class="list_bg"></th></tr>
	<tr >
		<td width="33%" align=right>{{$language.SourceAddress}}</td>
		<td width="67%"><input type="text" name="source" value="{{$p.source}}" /></td>
	</tr>
	
		<tr>
		<td width="33%" align=right>{{$language.NetworkMask}}</td>
		<td width="67%"><input type="text" name="network" value="{{$p.network}}" /></td>
	  </tr>
	  <tr>
		<td width="33%" align=right>proxy IP</td>
		<td width="67%"><input type="text" name="proxyip" value="{{$p.proxyip}}" /></td>
	  </tr>
	<tr><td  align="center" colspan=2><input type="hidden" name="ac" value="new" />
<input type="hidden" name="id" value="{{$p.id}}" />
<input type=submit  value="{{$language.Save}}" class="an_02">

	</td>
  </tr></form>
</table>
</body>
<iframe name="hide" height="0" frameborder="0" scrolling="no"></iframe>
</html>


