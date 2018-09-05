<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admintemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒後台管理系統-顧客訂單管理</title>
<!-- InstanceEndEditable -->
<style type="text/css">p ,h1,h2,h3,h4,h5,h6,ol,ul,li,table,th,td,tr,img{
	margin: 0px;
	padding: 0px;
}

body {
	background-color: #CB99CC;
	margin: 0px;
	padding: 0px;
	background-image: url(images/admin_img/bg.jpg);
	background-repeat: repeat-x;
}
#wrapper {
	background-image: url(images/bg.jpg);
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
	background-image: url(images/admin_img/adminindex.jpg);
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
#wrapper #main #search_form {
	margin-top: 150px;
	width: 500px;
	margin-left: 20px;
}
#wrapper #main #search_form #send {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	margin: 5px;
	background-color: #650461;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #main #search_form #name {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	margin: 5px;
	background-color: #CB99CC;
	border: 1px solid #650461;
}
#wrapper #main #orderlist {
	margin-left: 20px;
	margin-top: 20px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #FECCFF;
	border-right-color: #FECCFF;
	border-bottom-color: #FECCFF;
	border-left-color: #FECCFF;
	width: 700px;
}
#wrapper #main #orderlist p {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #000;
	margin-top: 5px;
	margin-bottom: 5px;
}
#wrapper #main #pagelist p {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #000;
	margin-top: 5px;
	margin-bottom: 5px;
}
#wrapper #main #pagelist {
	margin-top: 20px;
	margin-left: 20px;
}
#wrapper #main #orderlist tr td {
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-left-style: solid;
	border-bottom-color: #FECCFF;
	border-left-color: #FECCFF;
}
#wrapper #main #orderlist h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	font-weight: normal;
	color: #650461;
	text-align: center;
	margin: 5px;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="main" -->
  <div id="main">
    <form id="search_form" name="search_form" method="post" action="ordersearch.php">
      <input type="text" name="name" id="name" />
      <input type="submit" name="send" id="send" value="搜尋" />
    </form>
    <table width="600" border="0" cellpadding="0" cellspacing="0" id="orderlist">
      <tr>
        <td width="74"><h3>訂單編號</h3></td>
        <td width="92"><h3>訂購人</h3></td>
        <td width="97"><h3>聯絡電話</h3></td>
        <td width="117"><h3>行動電話</h3></td>
        <td width="117"><h3>訂單日期</h3></td>
        <td width="161"><h3>訂單地址</h3></td>
        <td width="41"><h3>查看</h3></td>
      </tr>
      <tr>
        <td><p></p></td>
        <td><p></p></td>
        <td><p></p></td>
        <td><p></p></td>
        <td><p></p></td>
        <td><p></p></td>
        <td><p>內容</p></td>
      </tr>
    </table>
    <table width="700" border="0" cellpadding="0" cellspacing="0" id="pagelist">
      <tr>
        <td width="350" align="left">&nbsp;</td>
        <td width="350" align="right">&nbsp;
          <p>&nbsp;</p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>