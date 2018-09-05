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

if (isset($_POST['a_username'])) {
  $loginUsername=$_POST['a_username'];
  $password=$_POST['a_passwd'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "adminindex.php";
  $MM_redirectLoginFailed = "adminlogin.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_mydatebase, $mydatebase);
  
  $LoginRS__query=sprintf("SELECT a_username, a_passwd FROM adminlist WHERE a_username=%s AND a_passwd=%s",
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
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>芙兒後台管理系統-首頁</title>
<style type="text/css">
.atttext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
	font-weight: normal;
	color: #F00;
	margin: 10px;
	line-height: 2em;
}
.itemtext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #532954;
	font-weight: bold;
	line-height: 2em;
	margin-left: 10px;
}
#wrapper #main #loginform #logintable tr td #a_username2 {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-color: #FECCFF;
}
#wrapper #main #loginform #logintable tr td #a_passwd {
	background-color: #FECCFF;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#wrapper #main #loginform #logintable tr td #a_send {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-color: #A352A5;
	margin-left: 50px;
	color: #FFF;
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
	height: 300px;
	width: 100%;
	float: left;
}
#wrapper #main {
	background-image: url(images/admin_img/adminindex.jpg);
	background-repeat: no-repeat;
	height: 300px;
	width: 600px;
	float: left;
}
#wrapper #main #loginform {
	margin-top: 150px;
}
#wrapper #main #loginform #logintable {
	margin-right: auto;
	margin-left: auto;
}
</style>
</head>

<body>
<div id="wrapper">
	<div id="main">
	  <form ACTION="<?php echo $loginFormAction; ?>" id="loginform" name="loginform" method="POST">
	    <table width="90%" border="0" cellpadding="0" cellspacing="0" id="logintable">
	      <tr>
	        <td width="14%" rowspan="3" align="center" valign="middle"><p><img src="images/admin_img/Computer1_256.png" width="50" height="50" /></p></td>
	        <td width="86%"><label for="a_username"><span class="atttext">請輸入您的管理者帳號及密碼進行登入，若您未有帳號請聯繫資訊管理人員</span><br />
	        </label></td>
          </tr>
	      <tr>
	        <td><label for="a_username2" class="itemtext">管理者帳號：</label>
              <input name="a_username" type="text" id="a_username2" size="15" />
            </td>
          </tr>
	      <tr>
	        <td><label for="a_passwd" class="itemtext">管理者密碼：</label>
            <input name="a_passwd" type="password" id="a_passwd" size="15" />
            <input type="submit" name="a_send" id="a_send" value="登入" /></td>
          </tr>
        </table>
	  </form>
	</div>
</div>
</body>
</html>