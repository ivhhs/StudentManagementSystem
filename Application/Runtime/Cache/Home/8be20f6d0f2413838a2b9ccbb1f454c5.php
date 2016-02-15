<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>
<script>
$(function(){
	var flag = false;
	//判断原始密码是否正确
	$('#oldPass').bind('blur',function(){
		//获取原始密码
		var oldPass = $('#oldPass').val();
		//组织数据
		var data = {
			'oldPass': oldPass,
			_: new Date().getTime()
		};
		//post请求,判断原始密码的是否正确
		$.post('/index.php/Home/Admin/confirmOldPass',data,function(msg){
			//判断返回值
			if(msg == 1){
				flag = true;
				//原始密码正确
				$('#tip').html('<font color="green">原始密码正确</font>');
			}else{
				flag = false;
				//原始密码不正确
				$('#tip').html('<font color="red">原始密码不正确</font>');
			}
		});
	});
	
	//判断两次密码输入是否相同
	$('#newPassConfirm').bind('blur',function(){
		//判断
		if( $('#newPassConfirm').val() !== $('#newPass').val() ){
			//设置标志为false
			flag = false;
			$('.tip2').html('<font color="red">两次密码输入不正确</font>');
		}else{
			flag = true;
			$('.tip2').html('<font color="green">两次密码输正确</font>');
		}
	});
	
	//判断flagOld和flagNew是否同时为true，若是则提交
	$('#updataBtn').bind('click',function(event){
				
		//根据flag判断是否可以提交
		if(flag){
			$('form:first').submit();			
		}else{
			confirm('请根据错误信息，重新填写');
		}
	});
	
});
</script>
<style>
*{font-size:18px;}
td, th {
	font-size:18px;
	text-align: center
}
</style>
</head>
<body>
<form method='post' id='myform' action='/index.php/Home/Admin/updateNewPass' enctype='multipart/form-data'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">密码修改</th>
      </tr>
	  
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">原始密码：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='password' id='oldPass' value=''/><span id='tip'></span>
        </td>
      </tr>
	
	 <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">请输入新密码：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='password' id='newPass' name='newPass' value=''/><span class='tip2'></span>
        </td>
      </tr>
	
	<tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">确定新密码：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='password' id='newPassConfirm' value='' /><span class='tip2'></span>
        </td>
      </tr>
	
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">&nbsp;</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='button' id='updataBtn' value='提交修改'  />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>