<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="file:///C|/wamp/www/product/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-購物車結帳頁面</title>
<!-- InstanceEndEditable -->
<link href="file:///C|/wamp/www/product/css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
.redinfo {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #900;
	margin: 5px;
}
#wrapper #content #right #shop_tab {
	width: 650px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-top-color: #C6C;
	border-right-color: #C6C;
	border-bottom-color: #C6C;
	border-left-color: #C6C;
	margin-top: 20px;
}
#wrapper #content #right h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #900;
	margin: 20px;
}
#wrapper #content #right #shop_tab tr td {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #C6C;
	border-right-color: #C6C;
	border-bottom-color: #C6C;
	border-left-color: #C6C;
}
#wrapper #content #right #shop_tab h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #811B81;
	text-align: center;
	margin: 5px;
}
#wrapper #content #right #shop_tab h5 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #811B81;
	margin: 2px;
	text-align: center;
}
#wrapper #content #right #shop_tab #shop_tab #remove {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #FFF;
	background-color: #C6C;
	margin: 5px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #content #right #shop_tab #shop_tab h6 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #C6C;
	text-align: center;
	margin: 2px;
}
#wrapper #content #right #shop_tab #shop_tab #qty {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #C6C;
	border: 1px solid #C6C;
}
#wrapper #content #right #shop_tab #shop_tab #edit {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #FFF;
	background-color: #C6C;
	margin: 5px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #content #right #shop_tab a {
	font-family: "新細明體", "Times New Roman";
	color: #811B81;
	text-align: center;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper">
	<div id="header">
	  <table width="230" border="0" cellpadding="0" cellspacing="0" id="icon_table">
	    <tr>
	      <td><a href="file:///C|/wamp/www/product/index.php"><img src="file:///C|/wamp/www/product/images/template_img/icon1.png" width="30" height="30" alt="回到首頁" title="回到新聞首頁"/></a></td>
	      <td><a href="javascript:window.external.AddFavorite('http://www.fol.com.tw','')"><img src="file:///C|/wamp/www/product/images/template_img/icon2.png" width="30" height="30" alt="加到最愛" title="將芙兒加到我的最愛"/></a></td>
	      <td><a href="file:///C|/wamp/www/product/shoppingcar/shoppinginfo.html"><img src="file:///C|/wamp/www/product/images/template_img/icon3.png" width="30" height="30" alt="購物資訊" title="購物相關說明" /></a></td>
	      <td><a href="file:///C|/wamp/www/product/shoppingcar/shopping.php"><img src="file:///C|/wamp/www/product/images/template_img/icon4.png" width="30" height="30" alt="購物車" title="購物車功能" /></a></td>
	      <td><a href="file:///C|/wamp/www/product/shoppingcar/contentus.php"><img src="file:///C|/wamp/www/product/images/template_img/icon5.png" width="30" height="30" alt="聯絡我們" title="聯絡芙兒" /></a></td>
	      <td><p><a href="file:///C|/wamp/www/product/adminpage/adminlogin.php">管理員登入</a></p></td>
        </tr>
	    <tr>
	      <td colspan="6">&nbsp;</td>
        </tr>
      </table>
</div>
    <div id="navigation">
      <table width="720" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="225"><p>您好，歡迎來到芙兒。<a href="file:///C|/wamp/www/product/shoppingcar/memberlogin.php">登入會員</a></p></td>
          <td><a href="file:///C|/wamp/www/product/dress.php"><img src="file:///C|/wamp/www/product/images/template_img/button_01.png" width="70" height="29" /></a></td>
          <td><a href="file:///C|/wamp/www/product/shoppingcar/longdress.php"><img src="file:///C|/wamp/www/product/images/template_img/button_02.png" width="70" height="29" /></a></td>
          <td><a href="file:///C|/wamp/www/product/shoppingcar/formaldress.php"><img src="file:///C|/wamp/www/product/images/template_img/button_03.png" width="70" height="29" /></a></td>
          <td><a href="file:///C|/wamp/www/product/shoppingcar/coat.php"><img src="file:///C|/wamp/www/product/images/template_img/button_04.png" width="70" height="29" /></a></td>
          <td><a href="file:///C|/wamp/www/product/shoppingcar/other.php"><img src="file:///C|/wamp/www/product/images/template_img/button_05.png" width="70" height="29" /></a></td>
          <td><a href="file:///C|/wamp/www/product/shoppingcar/accessories.php"><img src="file:///C|/wamp/www/product/images/template_img/button_06.png" width="70" height="29" /></a></td>
          <td><a href="file:///C|/wamp/www/product/shoppingcar/uniform.php"><img src="file:///C|/wamp/www/product/images/template_img/button_07.png" width="75" height="29" /></a></td>
        </tr>
      </table>
</div>
    <div id="content">
<div id="left">
    	  <table width="225" border="0" cellspacing="0" cellpadding="0">
    	    <tr>
    	      <td><img src="file:///C|/wamp/www/product/images/template_img/banner_02.jpg" width="225" height="225" /></td>
  	      </tr>
    	    <tr>
    	      <td><img src="file:///C|/wamp/www/product/images/template_img/banner_03.jpg" name="member_img" width="225" height="100" border="0" usemap="#member_imgMap" id="member_img" /></td>
  	      </tr>
    	    <tr>
    	      <td><img src="file:///C|/wamp/www/product/images/template_img/banner_04.jpg" width="225" height="100" /></td>
  	      </tr>
    	    <tr>
    	      <td><img src="file:///C|/wamp/www/product/images/template_img/banner_05.jpg" width="225" height="250" /></td>
  	      </tr>
    	    <tr>
    	      <td align="center" valign="middle"><img src="file:///C|/wamp/www/product/images/template_img/banner_01.jpg" width="159" height="140" alt="徵才廣告" /></td>
  	      </tr>
  	    </table>
    </div>
    	<!-- InstanceBeginEditable name="contentright" -->
    	<div id="right">
        <table width="500" border="0" cellpadding="0" cellspacing="0" id="shop_tab">
    <tr>
              <td width="249"><h4>商品名稱</h4></td>
              <td width="49"><h4>數量</h4></td>
              <td width="99"><h4>單價</h4></td>
              <td width="96"><h4>小計</h4></td>
              <td width="157"><h4>動作</h4></td>
            </tr>
<?php foreach($cart->get_contents() as $item){?>
            <form action="" method="get" id="shop_tab">
            <tr>
              <td><h6>&nbsp;</h6></td>
              <td align="center">&nbsp;</td>
              <td><h6>&nbsp;</h6>
             </td>
              <td><h6>&nbsp;</h6>
              </td>
              <td><h4>
                <input type="submit" name="remove" id="remove" value="取消" />                
                <input type="submit" name="edit" id="edit" value="更新" />
              </h4></td>
            </tr>
            </form>
            <?php }?>
            <tr>
              <td colspan="4">&nbsp;</td>
              <td><h5>‧清空購物車‧結帳‧</h5></td>
            </tr>
          </table>
      	</div>
   	<!-- InstanceEndEditable --></div>
    <div id="footer">
      <table width="900" border="0" cellpadding="0" cellspacing="0" id="footer_text">
        <tr>
          <td width="552"><p>│<a href="file:///C|/wamp/www/product/shoppingcar/aboutus.html">關於芙兒</a>│<a href="file:///C|/wamp/www/product/shoppingcar/webindex.html">網站地圖</a>│<a href="file:///C|/wamp/www/product/shoppingcar/privacy.html">隱私權保護</a>│客服專線：0800-888-999</p></td>
          <td width="348"><h5>COPYRIGHT &copy; FOL. ALL RIGHTS RESERVED</h5></td>
        </tr>
      </table>
    </div>
</div>

<map name="member_imgMap" id="member_imgMap">
  <area shape="rect" coords="65,22,141,42" href="file:///C|/wamp/www/product/messageboard.php" />
  <area shape="rect" coords="66,52,142,73" href="#" />
  <area shape="rect" coords="149,21,208,41" href="#" />
  <area shape="rect" coords="148,52,209,75" href="#" />
</map>
</body>
<!-- InstanceEnd --></html>