<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admintemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒後台管理系統-商品修改</title>
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
#wrapper #main table {
	margin-top: 150px;
	margin-left: 20px;
}
#wrapper #main table h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	font-weight: normal;
	text-align: center;
	margin: 5px;
}
#wrapper #main #form1 table h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	font-weight: normal;
	color: #FFF;
}
#wrapper #main #edit_form table p {
	text-align: center;
}
#wrapper #main #edit_form table #button {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	background-color: #670568;
	margin: 10px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #main #edit_form table #p_type {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #650063;
	border: 1px solid #94339A;
	background-color: #CB99CC;
}
#wrapper #main #edit_form table #p_name {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #650063;
	border: 1px solid #94339A;
	background-color: #CB99CC;
}
#wrapper #main #edit_form table #p_display {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #650063;
	border: 1px solid #94339A;
	background-color: #CB99CC;
}
#wrapper #main #edit_form table #p_price {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #650063;
	border: 1px solid #94339A;
	background-color: #CB99CC;
}
#wrapper #main #edit_form table #p_state {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #650063;
	border: 1px solid #94339A;
	background-color: #CB99CC;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="main" -->
  <div id="main"><form name="edit_form" method="POST" id="edit_form">
    <table width="440" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="150"><h3>商品類別：</h3></td>
        <td width="290"><select name="p_type" id="p_type">
          <option value="小洋裝">小洋裝</option>
            <option value="長洋裝">長洋裝</option>
            <option value="小禮服">小禮服</option>
            <option value="小外套">小外套</option>
            <option value="上衣褲裙">上衣褲裙</option>
            <option value="鞋襪配件">鞋襪配件</option>
<option value="鞋襪配件">鞋襪配件</option>
        </select></td>
      </tr>
      <tr>
        <td><h3>商品名稱：</h3></td>
        <td><input name="p_name" type="text" id="p_name" size="50" /></td>
      </tr>
      <tr>
        <td><h3>商品描述：</h3></td>
        <td><input name="p_display" type="text" id="p_display" size="50" /></td>
      </tr>
      <tr>
        <td><h3>商品圖片：</h3></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><h3>商品價格：</h3></td>
        <td><input name="p_price" type="text" id="p_price" /></td>
      </tr>
      <tr>
        <td><h3>商品狀態：</h3></td>
        <td><select name="p_state" id="p_state">
          <option value="可訂購">可訂購</option>
          <option value="缺貨中">缺貨中</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><p>
          <input type="submit" name="button" id="button" value="確定修改" />
        </p></td>
        </tr>
    </table>
  </form></div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>