<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACT内容管理系统</title>
<link href="/Public/images/css1/left_css.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<body bgcolor="16ACFF">
<table width="98%" border="0" cellpadding="0" cellspacing="0" background="/Public/images/tablemde.jpg">
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#16ACFF"></td>
  </tr>
  <tr>
    <td><TABLE width="97%" 
border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1); height=25 >学生管理</TD>
              </tr>
            </table>            </TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Student/index');?>" target=main>学生列表</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                 <TD height=23>
                  	<A href="<?php echo U('Student/add');?>" target=main>添加学生</A> 
				</TD>
                </TR>
				<TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Kaoqin/index');?>" target=main>考勤列表</A> </TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Kaoqin/add');?>" target=main>添加考勤</A> </TD>
                </TR>
				<TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Diaocha/index');?>" target=main>学习情况调查列表</A> </TD>
                </TR>
         
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
   <tr>
    <td><TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%" align=right 
border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(40); 
    height=25 >学科管理</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu40 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Subject/index');?>" target=main>学科列表</A></TD>
                </TR>
				<TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Subject/add');?>" target=main>添加学科</A></TD>
                </TR>
             
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>

  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><table class="leftframetable" cellspacing="0" cellpadding="0" width="97%" align="right" 
border="0">
      <tbody>
        <tr>
          <td height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20"></td>
          <td height="25" class=STYLE1 style="CURSOR: hand" onClick="showsubmenu(2);" >常用功能</td>
              </tr>
            </table></td>
          </tr>
        <tr>
        
          <td><table id="submenu2" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tbody>
      
				<tr>
                  <td width="2%"> <img src="/Public/images/closed.gif" /></td>
                  <td height="23"><a href="<?php echo U('Message/index');?>" target="main">信息列表</a></td>
                </tr>
                <tr>
                  <td><img src="/Public/images/closed.gif" /></td>
                  <td height="23"><a href="<?php echo U('Message/add');?>" target="main">添加信息</a></td>
                </tr>
                
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%" align=right 
border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(4); 
    height=25>统计管理</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu4 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Kaoqin/tongji');?>" target=main>考勤统计</A></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%" align=right border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(5); height=25>个人管理</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu5 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
	                  <td width="2%" ><img src="/Public/images/closed.gif" /></td>
	                  <td  height="23" >
	                  		<!--<a href="<?php echo U('Admin/index');?>?id=<?php echo (session('id')); ?>" target="main">个人信息</a> -->
							<!--<a href="/index.php/Home/Index/Admin/index/id/<?php echo (session('id')); ?>" target="main">个人信息</a> -->
							<a href="/index.php/Home/Admin/index/id/<?php echo (session('id')); ?>" target="main">个人信息</a> 
					  </td>
                  </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%" align=right border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(9); height=25>子系统管理</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu9 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="Sys_Act/Link/ClassLink_Act.asp" target=main>友情链接系统</A> </TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="2" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="8">
	
<TABLE class=leftframetable cellSpacing=1 cellPadding=1 width="97%" align=right 
border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 height=25>系统信息</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD 
      height=105><span class="STYLE2"><IMG src="/Public/images/closed.gif">版权所有：www.itcast.cn<br>
              <IMG src="/Public/images/closed.gif">设计制作：www.itcast.cn<br>
              <IMG src="/Public/images/closed.gif">技术支持：<a href="http://www.itcast.cn" target="_blank">www.itcast.cn</a><br>
              <IMG src="/Public/images/closed.gif">帮助中心：<a href="http://www.itcast.cn" target="_blank">www.itcast.cn</a><br>
            <IMG src="/Public/images/closed.gif">系统版本：1.0</span></TD>
        </TR>
      </TBODY>
    </TABLE>	</td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg"></td>
  </tr>
</table>
</body></html>