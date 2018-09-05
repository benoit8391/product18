<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admintemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒後台管理系統-商品上傳頁面</title>
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
#wrapper #main #form1 {
	width: 650px;
	margin-right: 20px;
	margin-left: 20px;
	margin-top: 150px;
}
#wrapper #main #form1 table h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	color: #67006B;
	margin: 10px;
	text-align: center;
}
#wrapper #main #form1 table h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #936;
	text-align: right;
	margin: 5px;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="main" -->
  <div id="main"> 
    <form action="updatedone.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2"><h3>商品新增頁面</h3></td>
        </tr>
        <tr>
          <td width="139"><h4>商品編號：</h4></td>
          <td width="361">&nbsp;</td>
        </tr>
        <tr>
          <td><h4>商品類別：</h4></td>
          <td><select name="p_type" id="p_type">
            <option value="小洋裝">小洋裝</option>
            <option value="長洋裝">長洋裝</option>
            <option value="小禮服">小禮服</option>
          </select></td>
        </tr>
        <tr>
          <td><h4>商品名稱：</h4></td>
          <td><input type="text" name="p_name" id="p_name" /></td>
        </tr>
        <tr>
          <td><h4>商品介紹：</h4></td>
          <td><textarea name="p_display" id="p_display" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td><h4>單價：</h4></td>
          <td><input type="text" name="p_price" id="p_price" /></td>
        </tr>
        <tr>
          <td><h4>商品圖片：</h4></td>
          <td><input type="file" name="upload" id="upload" /></td>
        </tr>
        <tr>
          <td><h4>商品狀態：</h4></td>
          <td><select name="p_state" id="p_state">
            <option value="可訂購">可訂購</option>
            <option value="缺貨中">缺貨中</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="update" id="update" value="商品上傳" /></td>
        </tr>
      </table>
    </form>
  </div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>
