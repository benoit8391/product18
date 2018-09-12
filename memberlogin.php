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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['m_username'])) {
  $loginUsername=$_POST['m_username'];
  $password=$_POST['m_password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "dress.php";
  $MM_redirectLoginFailed = "memberlogin.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_mydatebase, $mydatebase);
  
  $LoginRS__query=sprintf("SELECT m_username, m_password FROM member WHERE m_username=%s AND m_password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $mydatebase) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-會員登入頁面</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
.redtext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.7em;
	color: #900;
	margin: 5px;
}

#wrapper #content #right #member_form {
	width: 600px;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 20px;
	margin-left: auto;
}
#wrapper #content #right #member_form #member_tab {
	margin-right: auto;
	margin-left: auto;
	width: 450px;
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
#wrapper #content #right #member_form #member_tab tr td {
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
#wrapper #content #right #member_form #member_tab p   {
	text-align: center;
}
#wrapper #content #right #member_form #member_tab p #m_send {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-color: #C6C;
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #FFF;
	margin: 5px;
}
#wrapper #content #right #member_form #member_tab #m_username {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 5px;
}
#wrapper #content #right #member_form #member_tab #m_password {
	background-color: #FFF;
	border: 1px solid #C6C;
	margin: 5px;
}
#wrapper #content #right #member_form #member_tab h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	color: #C6C;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 10px;
}
#wrapper #content #right #member_form #member_tab h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #C6C;
	text-align: right;
	margin: 5px;
}
#wrapper #content #right #member_form #member_tab h5 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #C6C;
	text-align: center;
	font-weight: normal;
	margin: 5px;
}
#wrapper #content #right #member_form #member_tab h5 a   {
	color: #C6C;
	text-decoration: none;
}
.redtext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	color: #900;
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
        	  <form ACTION="<?php echo $loginFormAction; ?>" id="member_form" name="member_form" method="POST">
                <table width="500" border="0" cellpadding="0" cellspacing="0" id="member_tab">
                  <tr>
                    <td colspan="2"><h3>會員登入系統</h3></td>
                  </tr>
                  <tr>
                    <td width="145"><h4>帳號：</h4></td>
                    <td width="355"><label for="m_username"></label>
                      <input name="m_username" type="text" id="m_username" size="15" /></td>
                  </tr>
                  <tr>
                    <td><h4>密碼：</h4></td>
                    <td><label for="m_password"></label>
                      <input name="m_password" type="password" id="m_password" size="15" />
                      <span class="redtext">請注意英文大小寫不相符！</span></td>
                  </tr>
                  <tr>
                    <td colspan="2"><p>
                      <input type="submit" name="m_send" id="m_send" value="登入會員" />
                    </p></td>
                  </tr>
<tr>
  <td colspan="2"><p class="redtext">您所輸入的帳號或密碼有誤，請重新輸入！</p></td>
</tr>

<tr>
  <td colspan="2"><h5>‧<a href="memberadd.php">申請新會員</a>‧<a href="memberpssend.php">忘記密碼</a>‧</h5></td>
</tr>
                </table>
                <p>&nbsp;</p>
    	    <p></p>
          </form>
          <p>&nbsp;</p>
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