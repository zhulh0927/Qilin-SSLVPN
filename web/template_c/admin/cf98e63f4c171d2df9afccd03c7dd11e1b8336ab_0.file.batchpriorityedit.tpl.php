<?php /* Smarty version 3.1.27, created on 2017-01-01 16:51:13
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/otp/template/admin/batchpriorityedit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13132765405868c30123eb57_71671189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf98e63f4c171d2df9afccd03c7dd11e1b8336ab' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/otp/template/admin/batchpriorityedit.tpl',
      1 => 1483260666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13132765405868c30123eb57_71671189',
  'variables' => 
  array (
    'title' => 0,
    'template_root' => 0,
    '_config' => 0,
    'servergroup' => 0,
    'usersid' => 0,
    'trnumber' => 0,
    'member' => 0,
    'language' => 0,
    'sourceip' => 0,
    'weektime' => 0,
    'ldaps' => 0,
    'ads' => 0,
    'users' => 0,
    'changelevelstr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5868c3013941e1_14587480',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5868c3013941e1_14587480')) {
function content_5868c3013941e1_14587480 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13132765405868c30123eb57_71671189';
?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="./template/admin/cssjs/global.functions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/_ajaxdtree.js"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/dtree.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="./template/admin/cssjs/jscal2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./template/admin/cssjs/cn.js"><?php echo '</script'; ?>
>
<link type="text/css" rel="stylesheet" href="./template/admin/cssjs/jscal2.css" />
<link type="text/css" rel="stylesheet" href="./template/admin/cssjs/border-radius.css" />
<?php echo '<script'; ?>
 language="javascript">
	function check_add_user(){
		return(true);
	}


<?php if ($_smarty_tpl->tpl_vars['_config']->value['LDAP']) {?>
var foundparent = false;
var servergroup = new Array();
var usergroup = new Array();

<?php }?>

function enablepri(c, item){
	c=!c;//alert(item);
	switch(item){
		case 'usergroup':
			document.getElementById('groupiddh').disabled=c;
			break;
		case 'start_time':
			document.getElementById('start_time').disabled=c;
			document.getElementById('f_rangeStart_trigger').disabled=c;
			break;
		case 'limit_time':
			document.getElementById('limit_time').disabled=c;
			document.getElementById('f_rangeEnd_trigger').disabled=c;
			document.getElementById('nolimit').disabled=c;
			break;
		case 'ipv4':
			document.getElementById('sourceip').disabled=c;
			break;
		case 'ipv6':
			document.getElementById('sourceipv6').disabled=c;
			break;
		case 'enable':
			document.getElementById('enable').disabled=c;
			break;
		case 'weektime':
			document.getElementById('weektime').disabled=c;
			break;
		case 'restrictweb':
			document.getElementById('restrictweb').disabled=c;
			break;
		case 'apphost':
			document.getElementById('apphost').disabled=c;
			break;
		case 'loginauth':
			document.getElementById('localauth').disabled=c;
			document.getElementById('radiusauth').disabled=c;
			document.getElementById('ldapauth').disabled=c;
			document.getElementById('adauth').disabled=c;
			document.getElementById('auth').disabled=c;
			document.getElementById('authtype').disabled=c;
			break;
		case 'rdpclipboard':
			document.getElementById('rdpclipauth_up').disabled=c;
			document.getElementById('rdpclipauth_down').disabled=c;
			break;
		case 'rdpdiskauth_up':
			document.getElementById('rdpdiskauth_up').disabled=c;
			break;
		case 'rdpdisk':
			document.getElementById('rdpdisk').disabled=c;
			break;
		case 'allowchange':
			document.getElementById('allowchange').disabled=c;
			break;
		case 'rdplocal':
			document.getElementById('rdplocal').disabled=c;
			break;
		case 'passwordsave':
			document.getElementById('passwordsave').disabled=c;
			break;
		case 'default_control':
			document.getElementById('default_control').disabled=c;
			break;
		case 'rdplocalcheck':
			document.getElementById('rdplocalcheck').disabled=c;
			break;
		case 'default_appcontrol':
			document.getElementById('default_appcontrol').disabled=c;
			break;
		case 'firstauth':
			document.getElementById('firstauth').disabled=c;
			break;
		case 'apptoadmingroup':
			document.getElementById('apptoadmingroup').disabled=c;
			break;
		case 'apptodisk':
			document.getElementById('apptodisk').disabled=c;
			break;
		case 'webportal':
			document.getElementById('webportal').disabled=c;
			document.getElementById('webportaltime').disabled=c;
			break;
		case 'asyncoutpass':
			document.getElementById('asyncoutpass').disabled=c;
			break;
		case 'tranportauth':
			document.getElementById('tranportauth').disabled=c;
			break;
	}
}


var groupid='<?php echo $_smarty_tpl->tpl_vars['servergroup']->value;?>
';
function filteruser(){	
	var username = document.getElementById('username').value;
	var gid=0;
	<?php if ($_smarty_tpl->tpl_vars['_config']->value['LDAP']) {?>
	<?php if ($_smarty_tpl->tpl_vars['_config']->value['TREEMODE']) {?>
	var obj1=document.getElementById('sgroupid');	
	gid=obj1.value;
	<?php } else { ?>
	for(var i=1; true; i++){
		var obj=document.getElementById('sgroupid'+i);
		if(obj!=null&&obj.options.selectedIndex>-1){
			gid=obj.options[obj.options.selectedIndex].value;
			continue;
		}
		break;
	}
	<?php }?>
	<?php }?>
	prefgroupid=gid;
	var url = 'admin.php?controller=admin_member&action=batchpriorityedit&sgroupid='+gid+"&username="+username;
	var checks = document.getElementsByTagName('input');
	for(var i=0; i<checks.length; i++){
		if(checks[i].name=='uid[]'&&checks[i].checked){
			url += '&uid[]='+checks[i].value;
		}
	}
	window.location=url;
}
<?php echo '</script'; ?>
>
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
 <SCRIPT language=javascript src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/selectdate.js"></SCRIPT>

<body>


	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr><td valign="middle" class="hui_bj"><div class="menu" style="width:1100px;">
<ul> 
	
</ul><span class="back_img"><A href="admin.php?controller=admin_member&back=1"><IMG src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/back1.png" 
      width="80" height="30" border="0"></A></span>
</div></td></tr>
  <tr>
	<td class=""><table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td align="center"><form name="f1" method=post action="admin.php?controller=admin_member&action=batchpriorityeditsave&chk_member=<?php echo $_smarty_tpl->tpl_vars['usersid']->value;?>
" enctype="multipart/form-data" onsubmit="return confirm('确定操作?');">
	<table border=0 width=100% cellpadding=5 cellspacing=0 bgcolor="#FFFFFF" valign=top class="BBtable">
	<tr><th colspan="3" class="list_bg"></th></tr>
	<tr><td colspan="5" align=center><div style="text-align:left;width:500px;">过滤用户：<input type="text" name="username" id="username" >&nbsp;
		<?php $_smarty_tpl->tpl_vars['select_group_id'] = new Smarty_Variable('sgroupid', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("select_sgroup_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
		&nbsp;<input type="button" onclick="filteruser();" value="提交" ></div></td></tr>
    <?php $_smarty_tpl->tpl_vars["trnumber"] = new Smarty_Variable($_smarty_tpl->tpl_vars['trnumber']->value+1, null, 0);?>
	<tr <?php if ($_smarty_tpl->tpl_vars['trnumber']->value%2 == 0) {?>bgcolor="f7f7f7"<?php }?> id="loginmodetr">
		<td width="3%" align="center">
		权限
		</td>
		<td width="97%">
		<table width="100%">
		 <TR bgcolor="#f7f7f7">
            <TD align="left"><input type="checkbox" name="enable[]" value="usergroup" onclick="enablepri(this.checked,'usergroup');" >&nbsp;运维组： </TD>
            <TD >
		<?php $_smarty_tpl->tpl_vars['select_ladp_id'] = new Smarty_Variable('ldapid', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['select_group_id'] = new Smarty_Variable('groupid', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("select_sgroup_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
       </TD>
		<td><input type="checkbox" name="enable[]" value="enable" onclick="enablepri(this.checked,'enable');" >&nbsp;启用：</td><td><input type="checkbox" name="_enable" id="enable" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['enable'] || !$_smarty_tpl->tpl_vars['member']->value['uid']) {?>checked<?php }?>></td>
           
          </TR>
           <TR bgcolor="">
      <TD align="left"><input type="checkbox" name="enable[]" value="start_time" onclick="enablepri(this.checked,'start_time');" >&nbsp;生效时间： </TD>
      <TD><INPUT value="<?php echo $_smarty_tpl->tpl_vars['member']->value['start_time'];?>
" id="start_time" name="start_time" >&nbsp;&nbsp;
<input type="button"  id="f_rangeStart_trigger" name="f_rangeStart_trigger" value="选择时间" class="wbk">
      </TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="limit_time" onclick="enablepri(this.checked,'limit_time');" >&nbsp;过期时间：</TD>
      <TD><INPUT value="<?php if ($_smarty_tpl->tpl_vars['member']->value['end_time'] != '2037-01-01 00:00:00') {
echo $_smarty_tpl->tpl_vars['member']->value['end_time'];
}?>" id="limit_time" name="limit_time" onFocus="setday(this)">&nbsp;&nbsp;<input type="button"  id="f_rangeEnd_trigger" name="f_rangeEnd_trigger" value="选择时间" class="wbk"> 
  <?php echo '<script'; ?>
 type="text/javascript">
var cal = Calendar.setup({
    onSelect: function(cal) { cal.hide() },
    showTime: true,
	popupDirection:'down'
});
var cal2 = Calendar.setup({
    onSelect: function(cal2) { cal2.hide() },
    showTime: true,
	popupDirection:'down'
});
cal.manageFields("f_rangeStart_trigger", "start_time", "%Y-%m-%d %H:%M:%S");
cal2.manageFields("f_rangeEnd_trigger", "limit_time", "%Y-%m-%d %H:%M:%S");


<?php echo '</script'; ?>
>
                      <?php echo $_smarty_tpl->tpl_vars['language']->value['AlwaysValid'];?>
<INPUT value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['end_time'] == '2037-01-01 00:00:00' || !$_smarty_tpl->tpl_vars['member']->value['end_time']) {?> checked <?php }?> onclick="document.getElementById('limit_time').value=''" type=checkbox name="nolimit" id="nolimit"> 
      </TD>
    </TR>
	<TR bgcolor="#f7f7f7" style="display:none">
	 <TD align="left"><input type="checkbox" name="enable[]" value="ipv4" onclick="enablepri(this.checked,'ipv4');" >&nbsp;来源IPv4：</TD>
      <TD><select  class="wbk"  name=sourceip id=sourceip>
                      <OPTION value=""><?php echo $_smarty_tpl->tpl_vars['language']->value['no'];?>
</OPTION>
                     	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sourceip']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
						<?php if (!$_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['ipv6']) {?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['groupname'];?>
" <?php if ($_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['groupname'] == $_smarty_tpl->tpl_vars['member']->value['sourceip']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['groupname'];?>
</option>
						<?php }?>
			<?php endfor; endif; ?>
                  </SELECT>  &nbsp;&nbsp;&nbsp;
      </TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="ipv6" onclick="enablepri(this.checked,'ipv6');" >&nbsp;来源IPv6：</TD>
      <TD><select  class="wbk"  name=sourceipv6 id=sourceipv6>
                      <OPTION value=""><?php echo $_smarty_tpl->tpl_vars['language']->value['no'];?>
</OPTION>
                     	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sourceip']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
						<?php if ($_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['ipv6']) {?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['groupname'];?>
" <?php if ($_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['groupname'] == $_smarty_tpl->tpl_vars['member']->value['sourceipv6']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sourceip']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['groupname'];?>
</option>
						<?php }?>
			<?php endfor; endif; ?>
                  </SELECT></TD>
     
    </TR>
	<TR bgcolor="" style="display:none">
      <TD align="left"><input type="checkbox" name="enable[]" value="weektime" onclick="enablepri(this.checked,'weektime');" >&nbsp;周组策略：</TD>
      <TD><select  class="wbk" id=weektime name=weektime>
                      <OPTION value=""><?php echo $_smarty_tpl->tpl_vars['language']->value['no'];?>
</OPTION>
                     	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weektime']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['weektime']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['policyname'];?>
" <?php if ($_smarty_tpl->tpl_vars['weektime']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['policyname'] == $_smarty_tpl->tpl_vars['member']->value['weektime']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['weektime']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['policyname'];?>
</option>
			<?php endfor; endif; ?>
                  </SELECT> </TD>
				  
      <TD align="left"><input type="checkbox" name="enable[]" value="asyncoutpass" onclick="enablepri(this.checked,'asyncoutpass');" >&nbsp;同步外部密码：</TD>
      <TD><select  class="wbk" id=asyncoutpass name=asyncoutpass>
		<OPTION value="-1" <?php if (-1 == $_smarty_tpl->tpl_vars['member']->value['asyncoutpass']) {?>selected<?php }?>>关闭</OPTION>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['name'] = 'asyn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['asyn']['total']);
?>
		<OPTION value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['asyn']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['asyn']['index'] == $_smarty_tpl->tpl_vars['member']->value['asyncoutpass']) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['asyn']['index'];?>
</OPTION>
		<?php endfor; endif; ?>
                  </SELECT></TD>
    </TR>

	<TR bgcolor="#f7f7f7" style="display:none">
      <TD align="left"><input type="checkbox" name="enable[]" value="apphost" onclick="enablepri(this.checked,'apphost');" >&nbsp;显示应用发布IP：</TD>
      <TD><input type="checkbox" id="apphost" name="apphost" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['apphost']) {?>checked<?php }?>></TD>
       <TD align="left"><input type="checkbox" name="enable[]" value="loginauth" onclick="enablepri(this.checked,'loginauth');" >&nbsp;认证方式</TD>
            <TD><input type="checkbox" name="localauth" id="localauth" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['localauth']) {?>checked<?php }?>>认证&nbsp;&nbsp;<input type="checkbox" id="radiusauth" name="radiusauth" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['radiusauth']) {?>checked<?php }?>>RADIUS&nbsp;&nbsp;<input type="checkbox" name="ldapauth" id="ldapauth" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['ldapauth']) {?>checked<?php }?>>LDAP&nbsp;&nbsp;<input type="checkbox" name="adauth" id="adauth" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['adauth']) {?>checked<?php }?>>AD&nbsp;&nbsp;<input type="checkbox" name="auth" id="auth" class="" value="2" <?php if ($_smarty_tpl->tpl_vars['member']->value['auth'] == 2) {?>checked<?php }?>>短信&nbsp;&nbsp;<select name="authtype" id="authtype" ><option value="0" <?php if (!$_smarty_tpl->tpl_vars['member']->value['authtype']) {?>selected<?php }?>>单一认证</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['authtype']) {?>selected<?php }?>>组合认证</option></select></TD>
    </TR>
     <TR style="display:none">
      <TD align="left" bordercolor="white"><input type="checkbox" name="enable[]" value="rdpclipboard" onclick="enablepri(this.checked,'rdpclipboard');" >&nbsp;RDP剪贴版</TD>
      <TD bordercolor="white">上行：<input type="checkbox" name="rdpclipauth_up" id="rdpclipauth_up" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['rdpclipauth_up'] || !$_smarty_tpl->tpl_vars['member']->value['uid']) {?>checked<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;下行：<input type="checkbox" name="rdpclipauth_down" id="rdpclipauth_down" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['rdpclipauth_down'] || !$_smarty_tpl->tpl_vars['member']->value['uid']) {?>checked<?php }?>>
      </TD>
      <TD align="left" bordercolor="white"><input type="checkbox" name="enable[]" value="rdpdiskauth_up" onclick="enablepri(this.checked,'rdpdiskauth_up');" >&nbsp;RDP磁盘：</TD>
      <TD bordercolor="white"><input type="checkbox" name="rdpdiskauth_up" id="rdpdiskauth_up" class="" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['rdpdiskauth_up'] || !$_smarty_tpl->tpl_vars['member']->value['uid']) {?>checked<?php }?>>
       </TD>
    </TR>
    <TR bgcolor="#f7f7f7" style="display:none">
      <TD align="left"><input type="checkbox" name="enable[]" value="rdpdisk" onclick="enablepri(this.checked,'rdpdisk');" >&nbsp;RDP磁盘映射：</TD>
      <TD><input type="text" name="rdpdisk" id="rdpdisk" class="input_shorttext" value="<?php if (!$_smarty_tpl->tpl_vars['member']->value['uid']) {?>*<?php } else {
echo $_smarty_tpl->tpl_vars['member']->value['rdpdisk'];
}?>">例子C:;D:;E:;</TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="allowchange" onclick="enablepri(this.checked,'allowchange');" >&nbsp;允许改密：</TD>
      <TD><input type="checkbox" id="allowchange" name="allowchange" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['allowchange']) {?>checked<?php }?>> </TD>
    </TR>
	 <TR style="display:none">
      <TD align="left"><input type="checkbox" name="enable[]" value="rdplocal" onclick="enablepri(this.checked,'rdplocal');" >&nbsp;rdp本地：</TD>
      <TD><input type="checkbox" name="rdplocal" id="rdplocal" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['rdplocal']) {?>checked<?php }?>></TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="passwordsave" onclick="enablepri(this.checked,'passwordsave');" >&nbsp;系统用户名缓存：</TD>
      <TD><input type="checkbox" name="passwordsave" id="passwordsave" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['passwordsave']) {?>checked<?php }?>></TD>
    </TR>
    <TR bgcolor="#f7f7f7" style="display:none">
      <TD align="left" bordercolor="white"><input type="checkbox" name="enable[]" value="default_control" onclick="enablepri(this.checked,'default_control');" >&nbsp;默认控件： </TD>
      <TD bordercolor="white"><select  class="wbk"  name=default_control id=default_control>
                     <OPTION value="0" <?php if ($_smarty_tpl->tpl_vars['member']->value['default_control'] == 0) {?>selected<?php }?>>自动检测</OPTION>
                     <OPTION value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['default_control'] == 1) {?>selected<?php }?>>applet</OPTION>
                     <OPTION value="2" <?php if ($_smarty_tpl->tpl_vars['member']->value['default_control'] == 2) {?>selected<?php }?>>activeX</OPTION>
                  </SELECT> &nbsp;&nbsp;
      </TD>
      <TD align="left" bordercolor="white"> <input type="checkbox" name="enable[]" value="rdplocalcheck" onclick="enablepri(this.checked,'rdplocalcheck');" >&nbsp;默认RDP本地</TD>
      <TD bordercolor="white"><input type="checkbox" id="rdplocalcheck" name="rdplocalcheck" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['rdplocalcheck']) {?>checked<?php }?>>
      </TD>
    </TR>
    <TR style="display:none">
	
      <TD align="left"><input type="checkbox" name="enable[]" value="default_appcontrol" onclick="enablepri(this.checked,'default_appcontrol');" >&nbsp;应用发布默认控件：</TD>
      <TD><select  class="wbk"  name=default_appcontrol id="default_appcontrol">
                     <OPTION value="0" <?php if ($_smarty_tpl->tpl_vars['member']->value['default_appcontrol'] == 0) {?>selected<?php }?>>WEB</OPTION>
                     <OPTION value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['default_appcontrol'] == 1) {?>selected<?php }?>>RDP</OPTION>
                  </SELECT>  &nbsp;&nbsp;&nbsp;
      </TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="restrictweb" onclick="enablepri(this.checked,'restrictweb');" >&nbsp;限制工具登录：</TD>
      <TD><input type="checkbox" name="restrictweb" id="restrictweb" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['restrictweb']) {?>checked<?php }?>> 
      </TD>
	   </TR>
	    <TR bgcolor="#f7f7f7" style="display:none">	
      <TD align="left"><input type="checkbox" name="enable[]" value="firstauth" onclick="enablepri(this.checked,'firstauth');" >&nbsp;优先登录方式:</TD>
      <TD>
	<select  class="wbk"  name=firstauth id=firstauth >
                     <OPTION value="localauth" <?php if ($_smarty_tpl->tpl_vars['member']->value['firstauth'] == 'localauth') {?>selected<?php }?>>本地登录</OPTION>
                     <OPTION value="radiusauth" <?php if ($_smarty_tpl->tpl_vars['member']->value['firstauth'] == 'radiusauth') {?>selected<?php }?>>RADIUS</OPTION>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ldaps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
<option value='ldapauth_<?php echo $_smarty_tpl->tpl_vars['ldaps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['address'];?>
' <?php if ($_smarty_tpl->tpl_vars['member']->value['firstauth'] == ('ldapauth_').($_smarty_tpl->tpl_vars['ldaps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['address'])) {?>selected<?php }?>>LDAP <?php echo $_smarty_tpl->tpl_vars['ldaps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['domain'];?>
</option>
<?php endfor; endif; ?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ads']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
<option value='adauth_<?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['address'];?>
' <?php if ($_smarty_tpl->tpl_vars['member']->value['firstauth'] == ('adauth_').($_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['address'])) {?>selected<?php }?>>AD <?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['domain'];?>
</option>
<?php endfor; endif; ?>
                  </SELECT>     
      </TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="apptoadmingroup" onclick="enablepri(this.checked,'apptoadmingroup');" >&nbsp;应用发布用户为管理员:</TD>
      <TD><input type="checkbox" id="apptoadmingroup" name="apptoadmingroup" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['apptoadmingroup']) {?>checked<?php }?>>
      </TD>
	   </TR>
	    <TR bgcolor="" style="display:none">	
      <TD align="left"><input type="checkbox" name="enable[]" value="apptodisk" onclick="enablepri(this.checked,'apptodisk');" >&nbsp;应用发布进入桌面:</TD>
      <TD><input type="checkbox" id="apptodisk" name="apptodisk" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['apptodisk']) {?>checked<?php }?>>
      </TD>
      <TD align="left"><input type="checkbox" name="enable[]" value="webportal" onclick="enablepri(this.checked,'webportal');" >&nbsp;WEBportal认证：</TD>
      <TD>启用：<input type="checkbox" id="webportal" name="webportal" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['webportal']) {?>checked<?php }?>>&nbsp;&nbsp;&nbsp;Webportal超时时间：<input type="text" id="webportaltime" name="webportaltime" class="input_shorttext" value="0" style="width:100px">分钟
      </TD>
	   </TR>
	   <TR bgcolor="#f7f7f7" style="display:none">	
      <TD align="left"><input type="checkbox" name="enable[]" value="tranportauth" onclick="enablepri(this.checked,'tranportauth');" >&nbsp;透明登录:</TD>
      <TD>
	<select  class="wbk"  name=tranportauth id=tranportauth >
                     <OPTION value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value['tranportauth'] == '1') {?>selected<?php }?>>本地</OPTION>
                     <OPTION value="2" <?php if (!$_smarty_tpl->tpl_vars['member']->value['tranportauth'] || $_smarty_tpl->tpl_vars['member']->value['tranportauth'] == '2') {?>selected<?php }?>>RADIUS</OPTION>
                     <OPTION value="3" <?php if ($_smarty_tpl->tpl_vars['member']->value['tranportauth'] == '3') {?>selected<?php }?>>LDAP</OPTION>
                  </SELECT>     
      </TD>
      <TD align="left"></TD>
      <TD>
      </TD>
	   </TR>
		</table>
		
	  </td>
	</tr>
	
	<tr><td colspan="5" align=center>
	
	</td></tr>
		<?php $_smarty_tpl->tpl_vars["trnumber"] = new Smarty_Variable($_smarty_tpl->tpl_vars['trnumber']->value+1, null, 0);?>
	<tr <?php if ($_smarty_tpl->tpl_vars['trnumber']->value%2 == 0) {?>bgcolor="f7f7f7"<?php }?>>
		<td width="10%"  align="center"  valign=top>
		<?php echo $_smarty_tpl->tpl_vars['language']->value['bind'];
echo $_smarty_tpl->tpl_vars['language']->value['User'];?>

		<table border=0 width="100%" style="border:0px;">
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;"><input type="button" name='batchselect' class="an_06" value="批量选择" onclick="window.open('admin.php?controller=admin_pro&action=xzuser', 'newwindow','height=650, width=700, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=yes,location=no, status=no');" ></td></tr>
	  <tr><td align="right" style="border-bottom:0px;border-top:0px;border-left:0px;border-right:0px;">全选<input type="checkbox" value=2 onclick="checkAll(this.checked);"></td></tr>
	  </table>
		</td>
		<td width="90%">
		<table><tr >
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['g'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['g']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['name'] = 'g';
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total']);
?>
		<td width="150"><input type="checkbox" name='uid[]' value='<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['uid'];?>
'  <?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['check'];?>
><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['username'];?>
(<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['realname']) {
echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['realname'];
} else { ?>未设置<?php }?>)<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']]['binded']) {?></font><?php }?></td><?php if (($_smarty_tpl->getVariable('smarty')->value['section']['g']['index']+1)%6 == 0) {?></tr><tr><?php }?>
		<?php endfor; endif; ?>
		</tr></table>
	  </td>
	  </tr>
	 
	<tr><td colspan="2" align="center"><input type=submit name="submit"  value="批量导出" class="an_02">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name="submit"  value="批量删除" class="an_02">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name="submit"  value="批量锁定" class="an_02">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name="submit"  value="<?php echo $_smarty_tpl->tpl_vars['language']->value['Save'];?>
" class="an_02"></td></tr></table>
</form>
	</td>
  </tr>
  <tr><td colspan="2" height="25"></td></tr>
</table>
</body>
<?php echo '<script'; ?>
>
function checkAll(c){
	var targets = document.getElementsByTagName('input');
	for(var j=0; j<targets.length; j++){
		if(targets[j].name.substring(0,3)=='uid'){
			targets[j].checked=c;
		}
	}
}

enablepri(false, 'usergroup');
enablepri(false, 'start_time');
enablepri(false, 'limit_time');
enablepri(false, 'ipv4');
enablepri(false, 'ipv6');
enablepri(false, 'enable');
enablepri(false, 'weektime');
enablepri(false, 'restrictweb');
enablepri(false, 'apphost');
enablepri(false, 'loginauth');
enablepri(false, 'rdpclipboard');
enablepri(false, 'rdpdiskauth_up');
enablepri(false, 'rdpdisk');
enablepri(false, 'allowchange');
enablepri(false, 'rdplocal');
enablepri(false, 'passwordsave');
enablepri(false, 'default_control');
enablepri(false, 'rdplocalcheck');
enablepri(false, 'default_appcontrol');
enablepri(false, 'firstauth');
enablepri(false, 'apptoadmingroup');
enablepri(false, 'apptodisk');
enablepri(false, 'webportal');
enablepri(false, 'asyncoutpass');
enablepri(false, 'tranportauth');
<?php if ($_smarty_tpl->tpl_vars['_config']->value['LDAP']) {?>
<?php echo $_smarty_tpl->tpl_vars['changelevelstr']->value;?>

<?php }?>
<?php echo '</script'; ?>
>
<iframe name="hide" id="hide" height="0" frameborder="0" scrolling="no"></iframe>
</html>



<?php }
}
?>