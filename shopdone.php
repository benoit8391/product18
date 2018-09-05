<?php 
require_once('Connections/product.php');
include('cart/wfcart.php');
@session_start();
$cart =& $_SESSION['wfcart']; 
if(!is_object($cart)) $cart = new wfCart();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-商品結帳</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #content #right #form1 #order_tab {
	width: 500px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 20px;
	margin-bottom: 20px;
}
#wrapper #content #right #form1 #order_tab h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #C6C;
	margin: 5px;
	text-align: right;
}
#wrapper #content #right #form1 #order_tab p {
	text-align: center;
}
#wrapper #content #right #form1 #order_tab #orderok {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	margin: 5px;
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	background-color: #C6C;
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
          <form id="form1" name="form1" method="post" action="orderok.php">
            <table width="650" border="0" cellpadding="0" cellspacing="0" id="order_tab">
              <tr>
                <td width="139"><h3>訂單日期：</h3></td>
                <td width="361"><input value="<?php echo date('Y-m-d'); ?>" name="o_date" type="text" id="o_date" /></td>
              </tr>
              <tr>
                <td><h3>收件人姓名：</h3></td>
                <td><input type="text" name="o_name" id="o_name" /></td>
              </tr>
              <tr>
                <td><h3>聯絡電話：</h3></td>
                <td><input type="text" name="o_phone" id="o_phone" /></td>
              </tr>
              <tr>
                <td><h3>行動電話：</h3></td>
                <td><input type="text" name="o_cellphone" id="o_cellphone" /></td>
              </tr>
              <tr>
                <td><h3>收件人地址：</h3></td>
                <td><input type="text" name="o_address" id="o_address" /></td>
              </tr>
              <tr>
                <td colspan="2"><p>
                  <input type="submit" name="orderok" id="orderok" value="送出" />
                </p></td>
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
