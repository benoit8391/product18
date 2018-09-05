<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-新增留言頁面</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #content #right #msgadd_form {
	width: 600px;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 20px;
	margin-left: auto;
}
#wrapper #content #right #msgadd_form table h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	color: #C6C;
	text-align: center;
	margin: 10px;
}
#wrapper #content #right #msgadd_form table h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #CF64CE;
	text-align: right;
	margin: 5px;
}
#wrapper #content #right #msgadd_form table #ms_send {
	background-color: #C6C;
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #FFF;
	margin: 5px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #content #right #msgadd_form table #ms_clear {
	background-color: #C6C;
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #FFF;
	margin: 5px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #content #right #msgadd_form table {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: dotted;
	border-right-style: dotted;
	border-top-color: #C6C;
	border-right-color: #C6C;
	border-bottom-color: #C6C;
	border-left-color: #C6C;
}
#wrapper #content #right #msgadd_form table tr td {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: dotted;
	border-left-style: dotted;
	border-top-color: #C6C;
	border-right-color: #C6C;
	border-bottom-color: #C6C;
	border-left-color: #C6C;
}
#wrapper #content #right #msgadd_form table #ms_name {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 5px;
}
#wrapper #content #right #msgadd_form table #ms_content {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 5px;
}
#wrapper #content #right #msgadd_form table #ms_title {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 5px;
}
#wrapper #content #right #msgadd_form table #ms_date {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 5px;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper">
	<div id="header">
	  <table width="230" border="0" cellpadding="0" cellspacing="0" id="icon_table">
	    <tr>
	      <td><a href="index.php"><img src="images/template_img/icon1.png" width="30" height="30" alt="回到首頁" title="回到新聞首頁"/></a></td>
	      <td><a href="javascript:window.external.AddFavorite('http://www.fol.com.tw','')"><img src="images/template_img/icon2.png" width="30" height="30" alt="加到最愛" title="將芙兒加到我的最愛"/></a></td>
	      <td><a href="shoppinginfo.html"><img src="images/template_img/icon3.png" width="30" height="30" alt="購物資訊" title="購物相關說明" /></a></td>
	      <td><a href="shopping.php"><img src="images/template_img/icon4.png" width="30" height="30" alt="購物車" title="購物車功能" /></a></td>
	      <td><a href="contentus.php"><img src="images/template_img/icon5.png" width="30" height="30" alt="聯絡我們" title="聯絡芙兒" /></a></td>
	      <td><p><a href="adminpage/adminlogin.php">管理員登入</a></p></td>
        </tr>
	    <tr>
	      <td colspan="6">&nbsp;</td>
        </tr>
      </table>
</div>
    <div id="navigation">
      <table width="720" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="225"><p>您好，歡迎來到芙兒。<a href="memberlogin.php">登入會員</a></p></td>
          <td><a href="dress.php"><img src="images/template_img/button_01.png" width="70" height="29" /></a></td>
          <td><a href="longdress.php"><img src="images/template_img/button_02.png" width="70" height="29" /></a></td>
          <td><a href="formaldress.php"><img src="images/template_img/button_03.png" width="70" height="29" /></a></td>
          <td><a href="coat.php"><img src="images/template_img/button_04.png" width="70" height="29" /></a></td>
          <td><a href="other.php"><img src="images/template_img/button_05.png" width="70" height="29" /></a></td>
          <td><a href="accessories.php"><img src="images/template_img/button_06.png" width="70" height="29" /></a></td>
          <td><a href="uniform.php"><img src="images/template_img/button_07.png" width="75" height="29" /></a></td>
        </tr>
      </table>
</div>
    <div id="content">
    	<div id="left">
    	  <table width="225" border="0" cellspacing="0" cellpadding="0">
    	    <tr>
    	      <td><img src="images/template_img/banner_02.jpg" width="225" height="225" /></td>
  	      </tr>
    	    <tr>
    	      <td><img src="images/template_img/banner_03.jpg" name="member_img" width="225" height="100" border="0" usemap="#member_imgMap" id="member_img" /></td>
  	      </tr>
    	    <tr>
    	      <td><img src="images/template_img/banner_04.jpg" width="225" height="100" /></td>
  	      </tr>
    	    <tr>
    	      <td><img src="images/template_img/banner_05.jpg" width="225" height="250" /></td>
  	      </tr>
    	    <tr>
    	      <td align="center" valign="middle"><img src="images/template_img/banner_01.jpg" width="159" height="140" alt="徵才廣告" /></td>
  	      </tr>
  	    </table>
    </div>
    	<!-- InstanceBeginEditable name="contentright" -->
    	<div id="right">
    	  <form id="msgadd_form" name="msgadd_form" method="POST" action="">
    	    <table width="600" border="0" cellspacing="0" cellpadding="0">
    	      <tr>
    	        <td colspan="5"><h3>新增留言頁面</h3></td>
   	          </tr>
    	      <tr>
    	        <td width="120" valign="top"><h4>您的姓名：</h4></td>
    	        <td width="180"><label for="ms_name"></label>
   	            <input name="ms_name" type="text" id="ms_name" size="20" /></td>
    	        <td width="120"><h4>留言時間：</h4></td>
    	        <td colspan="2"><label for="ms_date"></label>
   	            <input name="ms_date" type="text" id="ms_date" size="20" /></td>
   	          </tr>
    	      <tr>
    	        <td valign="top"><h4>留言標題：</h4></td>
    	        <td colspan="4"><label for="ms_title"></label>
   	            <input name="ms_title" type="text" id="ms_title" size="30" /></td>
   	          </tr>
    	      <tr>
    	        <td valign="top"><h4>留言內容：</h4></td>
    	        <td colspan="4"><label for="ms_content"></label>
   	            <textarea name="ms_content" id="ms_content" cols="50" rows="8"></textarea></td>
   	          </tr>
    	      <tr>
    	        <td valign="top">&nbsp;</td>
    	        <td colspan="4"><label for="captcha">
    	          <input type="text" name="captcha" id="captcha" />
    	        </label></td>
  	        </tr>
    	      <tr>
    	        <td colspan="5" align="center"><input type="submit" name="ms_send" id="ms_send" value="送出留言" />    	          <input type="submit" name="ms_clear" id="ms_clear" value="重寫留言" />  	          </td>
   	          </tr>
  	      </table>
    	  </form>
    	</div>
   	<!-- InstanceEndEditable --></div>
    <div id="footer">
      <table width="900" border="0" cellpadding="0" cellspacing="0" id="footer_text">
        <tr>
          <td width="552"><p>│<a href="aboutus.html">關於芙兒</a>│<a href="webindex.html">網站地圖</a>│<a href="privacy.html">隱私權保護</a>│客服專線：0800-888-999</p></td>
          <td width="348"><h5>COPYRIGHT &copy; FOL. ALL RIGHTS RESERVED</h5></td>
        </tr>
      </table>
    </div>
</div>

<map name="member_imgMap" id="member_imgMap">
  <area shape="rect" coords="65,22,141,42" href="messageboard.php" />
  <area shape="rect" coords="66,52,142,73" href="#" />
  <area shape="rect" coords="149,21,208,41" href="#" />
  <area shape="rect" coords="148,52,209,75" href="#" />
</map>
</body>
<!-- InstanceEnd --></html>
