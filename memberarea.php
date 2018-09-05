<?php require_once('Connections/mydatebase.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "add_form")) {
	$passwd=md5($_POST['m_password']);
	if(isset($_POST["new_password"])!=""){
		$passwd=md5($_POST['new_password']);
	}
  $updateSQL = sprintf("UPDATE member SET m_password=%s, m_name=%s, m_phone=%s, m_cellphone=%s, m_address=%s, m_email=%s WHERE m_username=%s",
                       GetSQLValueString($passwd, "text"),
                       GetSQLValueString($_POST['m_name'], "text"),
                       GetSQLValueString($_POST['m_phone'], "text"),
                       GetSQLValueString($_POST['m_cellphone'], "text"),
                       GetSQLValueString($_POST['m_address'], "text"),
                       GetSQLValueString($_POST['m_email'], "text"),
                       GetSQLValueString($_POST['m_username'], "text"));

  mysql_select_db($database_mydatebase, $mydatebase);
  $Result1 = mysql_query($updateSQL, $mydatebase) or die(mysql_error());

  $updateGoTo = "memberarea.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_memberarea = "-1";
if (isset($_SESSION['m_username'])) {
  $colname_memberarea = $_SESSION['m_username'];
}
mysql_select_db($database_mydatebase, $mydatebase);
$query_memberarea = sprintf("SELECT * FROM member WHERE m_username = %s", GetSQLValueString($colname_memberarea, "text"));
$memberarea = mysql_query($query_memberarea, $mydatebase) or die(mysql_error());
$row_memberarea = mysql_fetch_assoc($memberarea);
$totalRows_memberarea = mysql_num_rows($memberarea);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-會員資料修改</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #content #right #add_form {
	width: 600px;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 20px;
	margin-left: auto;
}
#wrapper #content #right #add_form #add_tab {
	width: 600px;
	margin-right: auto;
	margin-left: auto;
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
#wrapper #content #right #add_form #add_tab tr td {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: dotted;
	border-left-style: dotted;
	border-top-color: #CB66CC;
	border-right-color: #CB66CC;
	border-bottom-color: #CB66CC;
	border-left-color: #CB66CC;
}
#wrapper #content #right #add_form #add_tab h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	color: #C6C;
	text-align: center;
	margin: 10px;
}
#wrapper #content #right #add_form #add_tab h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #C6C;
	margin: 5px;
	text-align: left;
}
#wrapper #content #right #add_form #add_tab h5 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #C6C;
	margin: 5px;
	text-align: right;
}
#wrapper #content #right #add_form #add_tab #m_username {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #new_password {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #m_checkpassword {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #m_name {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #m_birthday {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #m_email {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #m_phone {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab #m_cellphone {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
.redinfo {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.7em;
	font-weight: normal;
	color: #900;
}
.redtext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #900;
	margin: 10px;
}
.sexitem {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	font-weight: normal;
	color: #C6C;
}
#wrapper #content #right #add_form #add_tab #m_address {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 2px;
}
#wrapper #content #right #add_form #add_tab p {
	text-align: center;
}
#wrapper #content #right #add_form #add_tab p #m_send {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	background-color: #C6C;
	margin: 10px;
}
#wrapper #content #right #add_form #add_tab #m_sex {
	background-color: #FFF;
	border: 1px none #C6C;
}
#wrapper #content #right #add_form #add_tab #m_sex2 {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-color: #FFF;
}
#wrapper #content #right #add_form #add_tab tr td #spryradio1 label {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #C6C;
}
#wrapper #content #right #add_form #add_tab h6 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #900;
	margin: 10px;
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
    	  <form action="<?php echo $editFormAction; ?>" id="add_form" name="add_form" method="POST">
    	    <table width="500" border="0" cellpadding="0" cellspacing="0" id="add_tab">
    	      <tr>
    	        <td colspan="2"><h3>會員資料修改</h3></td>
   	          </tr>
    	      <tr>
    	        <td colspan="2"><h3>親愛的<?php echo $row_memberarea['m_name']; ?>會員您好，您可以透過下方的表格進行修改資料。</h3></td>
  	        </tr>
    	      <tr>
    	        <td colspan="2"><h4>帳號資訊</h4></td>
   	          </tr>
    	      <tr>
    	        <td width="108"><h5>會員帳號：</h5></td>
    	        <td ><?php echo $row_memberarea['m_username']; ?>
   	            <input name="m_username" type="hidden" id="m_username" value="<?php echo $row_memberarea['m_username']; ?>" /></td>
   	          </tr>
    	      <tr>
    	        <td><h5>密碼修改：</h5></td>
    	        <td><label for="new_password"></label>
<input name="new_password" type="password" id="new_password" size="20" />
<input name="m_password" type="hidden" id="m_password" value="<?php echo $row_memberarea['m_password']; ?>" /></td>
   	          </tr>
    	      <tr>
    	        <td colspan="2"><h4>會員基本資料</h4></td>
   	          </tr>
    	      <tr>
    	        <td><h5>真實姓名：</h5></td>
    	        <td ><input name="m_name" type="text" id="m_name" value="<?php echo $row_memberarea['m_name']; ?>" size="15" /></td>
   	          </tr>
    	      <tr>
    	        <td><h5>電子郵件：</h5></td>
    	        <td><label for="m_email"></label>
<input name="m_email" type="text" id="m_email" value="<?php echo $row_memberarea['m_email']; ?>" size="30" /></td>
   	          </tr>
    	      <tr>
    	        <td><h5>家用電話：</h5></td>
    	        <td><label for="m_phone"></label>
<input name="m_phone" type="text" id="m_phone" value="<?php echo $row_memberarea['m_phone']; ?>" size="20" /></td>
   	          </tr>
    	      <tr>
    	        <td><h5>行動電話：</h5></td>
    	        <td><label for="m_cellphone"></label>
<input name="m_cellphone" type="text" id="m_cellphone" value="<?php echo $row_memberarea['m_cellphone']; ?>" size="20" /></td>
   	          </tr>
    	      <tr>
    	        <td><h5>地址：</h5></td>
    	        <td><label for="m_address"></label>
<input name="m_address" type="text" id="m_address" value="<?php echo $row_memberarea['m_address']; ?>" size="42" /></td>
   	          </tr>
    	      <tr>
    	        <td colspan="2"><p>
    	          <input type="submit" name="m_send" id="m_send"  value="確定修改" />
  	          </p></td>
   	          </tr>
  	        </table>
    	    <input type="hidden" name="MM_update" value="add_form" />
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
<?php
mysql_free_result($memberarea);
?>
