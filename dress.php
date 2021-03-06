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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 6;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_product, $product);
$query_Recordset1 = "SELECT * FROM product ORDER BY p_id ASC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $product) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-小洋裝</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #content #right #product_tab {
	margin: 10px;
	width: 200px;
	border: 1px none #C6C;
}
#wrapper #content #right #product_tab p {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #872187;
	margin: 5px;
}
#wrapper #content #right #product_tab h3  {
	text-align: center;
}
#wrapper #content #right #product_tab #product_img  {
	margin: 10px;
}
#wrapper #content #right #count_tab tr td table a {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #C6C;
	text-decoration: none;
}
#wrapper #content #right #product_tab h5 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #650065;
	margin: 5px;
	text-align: center;
}
#wrapper #content #right #count_tab  {
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	width: 650px;
}
#wrapper #content #right #count_tab h4  {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #C6C;
	text-align: center;
}
#wrapper #content #right #product_tab h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #900;
	text-align: center;
	margin: 5px;
}
</style>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
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
    	  <table width="200" border="0" cellpadding="0" cellspacing="0" id="product_tab">
            <tr>
              <?php do { ?>
              <td><p><a href="productdetail.php?p_id=<?php echo $row_Recordset1['p_id']; ?>"><img src="images/dress_img/<?php echo $row_Recordset1['p_id']; ?>.jpg" width="150" height="150" /></a>
                </p>
                <p>商品類別：<?php echo $row_Recordset1['p_type']; ?></p>
                <p>商品名稱：<?php echo $row_Recordset1['p_name']; ?></p>
                <p></p>
                <p>商品價格：<?php echo $row_Recordset1['p_price']; ?></p>
                <p>商品狀態： <?php echo $row_Recordset1['p_state']; ?></p>
              <h4>訂購商品</a></h4></td>
              <?php $col++;if($col%3==0){echo "</tr><tr>";}?>
                <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
            </tr>
          </table>
    	  <table width="650" border="0" cellpadding="0" cellspacing="0" id="count_tab">
    	    <tr>
    	      <td><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">第一頁</a></td>
    	      <td>&nbsp;
                <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">上一頁</a>
                <h4>&nbsp;</h4></td>
    	      <td><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">下一頁</a></td>
    	      <td><a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">最後一頁</a></td>
  	        </tr>
  	    </table>
    	  <p>&nbsp;</p>
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
mysql_free_result($Recordset1);
?>
