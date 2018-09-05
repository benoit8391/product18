<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admintemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒後台管理系統-最新消息管理頁面</title>
<!-- InstanceEndEditable -->
<style type="text/css">p ,h1,h2,h3,h4,h5,h6,ol,ul,li,table,th,td,tr,img{
	margin: 0px;
	padding: 0px;
}

body {
	background-color: #CB99CC;
	margin: 0px;
	padding: 0px;
	background-image: url(file:///C|/Documents%20and%20Settings/rod/%E6%A1%8C%E9%9D%A2/folweb/images/admin_img/bg.jpg);
	background-repeat: repeat-x;
}
#wrapper {
	background-image: url(file:///C|/Documents%20and%20Settings/rod/%E6%A1%8C%E9%9D%A2/folweb/images/bg.jpg);
	background-repeat: repeat-x;
	width: 100%;
	float: left;
}
#wrapper #main #news_form #newslist_table tr td p a #add_img {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #main #news_form #newslist_table tr td p a #out_img {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #main {
	background-image: url(file:///C|/Documents%20and%20Settings/rod/%E6%A1%8C%E9%9D%A2/folweb/images/admin_img/adminindex.jpg);
	background-repeat: no-repeat;
	width: 800px;
	float: left;
	height: 600px;
}
#wrapper #main #news_form #newslist_table tr td h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 1.2em;
	margin-top: 10px;
	margin-bottom: 10px;
	text-align: center;
	font-weight: bold;
	color: #606;
}
#wrapper #main #news_form {
	margin-top: 150px;
}
#wrapper #main #news_form #newslist_table {
	border-top-width: 3px;
	border-right-width: 3px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #909;
	border-right-color: #909;
	border-bottom-color: #909;
	border-left-color: #909;
	margin-left: 10px;
}
#wrapper #main #news_form #newslist_table tr td p {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	font-weight: bold;
	color: #606;
	text-align: center;
	margin-top: 5px;
	margin-bottom: 5px;
}
#wrapper #main #news_form #newslist_table tr td {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #909;
	border-right-color: #909;
	border-bottom-color: #909;
	border-left-color: #909;
}
#wrapper #main #loginform {
	margin-top: 150px;
}
#wrapper #main #loginform #logintable {
	margin-right: auto;
	margin-left: auto;
}
#wrapper #main #news_form #menu_tab {
	float: right;
}
</style>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #main #news_tab {
	margin-top: 150px;
	margin-left: 20px;
}
#wrapper #main #news_tab h3   {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 10px;
	color: #FFF;
}
#wrapper #main #news_tab h4   {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	text-align: center;
	margin-top: 5px;
	margin-bottom: 5px;
	color: #FFF;
}
#wrapper #main #news_tab2 {
	margin-top: 10px;
	margin-left: 20px;
}
.iconsimg {
	text-align: center;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	margin-right: auto;
	margin-left: auto;
	margin-top: 2px;
	margin-bottom: 2px;
}
#wrapper #main #news_tab p   {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	margin-top: 2px;
	margin-bottom: 2px;
	margin-left: 5px;
}
#wrapper #main #news_tab2 p   {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="main" -->
  <div id="main">
    <table width="600" border="0" cellpadding="0" cellspacing="0" id="news_tab">
      <tr>
        <td colspan="4" bgcolor="#666666"><h3>最新消息管理頁面</h3></td>
      </tr>
      <tr>
        <td width="240" bgcolor="#999999"><h4>最新消息標題</h4></td>
        <td width="260" bgcolor="#999999"><h4>發佈日期</h4></td>
        <td colspan="2" bgcolor="#999999"><h4>編輯</h4></td>
      </tr>
      
        <tr>
          <td bgcolor="#CCCCCC"><p>&nbsp;</p></td>
          <td bgcolor="#CCCCCC"><p>&nbsp;</p></td>
          <td width="50" align="center" bgcolor="#CCCCCC"><p><a href="newsedit.php?"><img src="file:///C|/Documents and Settings/rod/桌面/folweb/images/icons_img/Sys.png" width="20" height="20" class="iconsimg" title="修改消息" /></a></p></td>
          <td width="50" align="center" bgcolor="#CCCCCC"><p><a href="newsdelete.php?"><img src="file:///C|/Documents and Settings/rod/桌面/folweb/images/icons_img/delete.png" width="20" height="20" class="iconsimg" title="刪除消息" /></a></p></td>
        </tr>
        
    </table>
    <table width="600" border="0" cellpadding="0" cellspacing="0" id="news_tab2">
      <tr>
        <td width="240" bgcolor="#999999"><p>&nbsp;</p></td>
        <td width="260" bgcolor="#999999"></p></td>
        <td width="50" align="center" bgcolor="#999999"><p><a href="file:///C|/Documents and Settings/rod/桌面/folweb/adminpage/newsadd.php"><img src="file:///C|/Documents and Settings/rod/桌面/folweb/images/icons_img/Add.png" width="20" height="20" class="iconsimg" title="新增消息"/></a></p></td>
        <td width="50" align="center" bgcolor="#999999"><p><a href="file:///C|/Documents and Settings/rod/桌面/folweb/adminpage/adminindex.php"><img src="file:///C|/Documents and Settings/rod/桌面/folweb/images/icons_img/back.png" width="20" height="20" class="iconsimg" title="管理主頁" /></a></p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>

