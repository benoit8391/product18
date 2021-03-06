<?php require_once('Connections/product.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_productdetail = "-1";
if (isset($_GET['p_id'])) {
  $colname_productdetail = $_GET['p_id'];
}
mysql_select_db($database_product, $product);
$query_productdetail = sprintf("SELECT * FROM product WHERE p_id = %s", GetSQLValueString($colname_productdetail, "int"));
$productdetail = mysql_query($query_productdetail, $product) or die(mysql_error());
$row_productdetail = mysql_fetch_assoc($productdetail);
$totalRows_productdetail = mysql_num_rows($productdetail);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-商品細節</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #content #right #detail_tab {
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	width: 270px;
}
#wrapper #content #right #detail_tab p {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #C6C;
	margin: 5px;
}
#wrapper #content #right #detail_tab h5 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #680268;
	text-align: center;
	margin: 5px;
}
#wrapper #content #right #form1 #detail_tab #button {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	background-color: #640064;
	margin: 5px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #content #right #detail_tab #product_img {
	margin: 10px;
}
#wrapper #content #right #detail_tab h6 {
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
	      <td><a href="index.php"><img src="images/template_img/icon1.png" width="30" height="30" alt="回到首頁" title="回到新聞首頁"/></a></td>
	      <td><a href="javascript:window.external.AddFavorite('http://www.fol.com.tw','')"><img src="images/template_img/icon2.png" width="30" height="30" alt="加到最愛" title="將芙兒加到我的最愛"/></a></td>
	      <td><a href="shoppingcar/shoppinginfo.html"><img src="images/template_img/icon3.png" width="30" height="30" alt="購物資訊" title="購物相關說明" /></a></td>
	      <td><a href="shopping.php"><img src="images/template_img/icon4.png" width="30" height="30" alt="購物車" title="購物車功能" /></a></td>
	      <td><a href="shoppingcar/contentus.php"><img src="images/template_img/icon5.png" width="30" height="30" alt="聯絡我們" title="聯絡芙兒" /></a></td>
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
          <td width="225"><p>您好，歡迎來到芙兒。<a href="shoppingcar/memberlogin.php">登入會員</a></p></td>
          <td><a href="dress.php"><img src="images/template_img/button_01.png" width="70" height="29" /></a></td>
          <td><a href="shoppingcar/longdress.php"><img src="images/template_img/button_02.png" width="70" height="29" /></a></td>
          <td><a href="shoppingcar/formaldress.php"><img src="images/template_img/button_03.png" width="70" height="29" /></a></td>
          <td><a href="shoppingcar/coat.php"><img src="images/template_img/button_04.png" width="70" height="29" /></a></td>
          <td><a href="shoppingcar/other.php"><img src="images/template_img/button_05.png" width="70" height="29" /></a></td>
          <td><a href="shoppingcar/accessories.php"><img src="images/template_img/button_06.png" width="70" height="29" /></a></td>
          <td><a href="shoppingcar/uniform.php"><img src="images/template_img/button_07.png" width="75" height="29" /></a></td>
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
          <table width="500" border="0" cellpadding="0" cellspacing="0" id="detail_tab">
            <tr>
              <td><h6><img src="images/dress_img/<?php echo $row_productdetail['p_id']; ?>.jpg" width="270" height="270" /></h6></td>
            </tr>
            <tr>
              <td><p>商品類別：<?php echo $row_productdetail['p_type']; ?></p>
                <p>商品名稱：<?php echo $row_productdetail['p_name']; ?></p>
                <p></p>
                <p>商品價格：<?php echo $row_productdetail['p_price']; ?></p>
                <p>商品狀態：<?php echo $row_productdetail['p_state']; ?></p>
              <h5>訂購商品</a></h5></td>
            </tr>
          </table>
    	</div>
    	
    <!-- InstanceEndEditable --></div>
    <div id="footer">
      <table width="900" border="0" cellpadding="0" cellspacing="0" id="footer_text">
        <tr>
          <td width="552"><p>│<a href="shoppingcar/aboutus.html">關於芙兒</a>│<a href="shoppingcar/webindex.html">網站地圖</a>│<a href="shoppingcar/privacy.html">隱私權保護</a>│客服專線：0800-888-999</p></td>
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
<?php
mysql_free_result($productdetail);
?>
