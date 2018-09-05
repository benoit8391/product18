<?php require_once('../Connections/mydatebase.php'); ?>
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

if ((isset($_GET['n_id'])) && ($_GET['n_id'] != "") && (isset($_POST['delete']))) {
  $deleteSQL = sprintf("DELETE FROM newsdate WHERE n_id=%s",
                       GetSQLValueString($_GET['n_id'], "int"));

  mysql_select_db($database_mydatebase, $mydatebase);
  $Result1 = mysql_query($deleteSQL, $mydatebase) or die(mysql_error());

  $deleteGoTo = "newsadmin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_newsdelete = "-1";
if (isset($_GET['n_id'])) {
  $colname_newsdelete = $_GET['n_id'];
}
mysql_select_db($database_mydatebase, $mydatebase);
$query_newsdelete = sprintf("SELECT * FROM newsdate WHERE n_id = %s", GetSQLValueString($colname_newsdelete, "int"));
$newsdelete = mysql_query($query_newsdelete, $mydatebase) or die(mysql_error());
$row_newsdelete = mysql_fetch_assoc($newsdelete);
$totalRows_newsdelete = mysql_num_rows($newsdelete);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admintemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒後台管理系統-刪除消息頁面</title>
<!-- InstanceEndEditable -->
<style type="text/css">p ,h1,h2,h3,h4,h5,h6,ol,ul,li,table,th,td,tr,img{
	margin: 0px;
	padding: 0px;
}

body {
	background-color: #CB99CC;
	margin: 0px;
	padding: 0px;
	background-image: url(../images/admin_img/bg.jpg);
	background-repeat: repeat-x;
}
#wrapper {
	background-image: url(../images/bg.jpg);
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
	background-image: url(../images/admin_img/adminindex.jpg);
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
.iconsimg {
	text-align: center;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	margin-right: auto;
	margin-left: auto;
	margin-top: 2px;
	margin-bottom: 2px;
}
#wrapper #main #newsdel_form #ctrl_tab {
	float: right;
}
#wrapper #main #newsdel_form {
	width: 600px;
	margin-top: 150px;
	margin-left: 20px;
}
#wrapper #main #newsdel_form #newsdel_tab h3   {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	color: #FFF;
	text-align: center;
	margin: 10px;
}
#wrapper #main #newsdel_form #newsdel_tab h4   {
	font-family: "Comic Sans MS", cursive;
	font-size: 0.9em;
	color: #FFF;
	text-align: right;
	margin: 5px;
}
#wrapper #main #newsdel_form #newsdel_tab #n_title   {
	margin: 2px;
	background-color: #CCC;
	border: 1px solid #666;
}
#wrapper #main #newsdel_form #newsdel_tab #n_date   {
	margin: 2px;
	background-color: #CCC;
	border: 1px solid #666;
}
#wrapper #main #newsdel_form #newsdel_tab #n_content   {
	margin: 2px;
	background-color: #CCC;
	border: 1px solid #666;
}
.impredtext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	font-weight: bold;
	color: #900;
	margin-top: 5px;
	margin-bottom: 5px;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="main" -->
  <div id="main"> 
    <form id="newsdel_form" name="newsdel_form" method="POST">
      <table width="600" border="0" cellpadding="0" cellspacing="0" id="newsdel_tab">
        <tr>
          <td colspan="3" bgcolor="#666666"><h3>刪除消息頁面</h3></td>
        </tr>
        <tr>
          <td width="110" bgcolor="#999999"><h4>消息標題：</h4></td>
          <td colspan="2" bgcolor="#CCCCCC"><label for="n_title"></label>
          <input name="n_title" type="text" id="n_title" value="<?php echo $row_newsdelete['n_title']; ?>" size="30" />
          <input name="n_hidden" type="hidden" id="n_hidden" value="<?php echo $row_newsdelete['n_id']; ?>" /></td>
        </tr>
        <tr>
          <td bgcolor="#999999"><h4>發佈日期：</h4></td>
          <td colspan="2" bgcolor="#CCCCCC"><label for="n_date"></label>
          <input name="n_date" type="text" id="n_date" value="<?php echo $row_newsdelete['n_date']; ?>" size="20" /></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#999999"><h4>消息內容：</h4></td>
          <td colspan="2" bgcolor="#CCCCCC"><label for="n_content"></label>
          <textarea name="n_content" id="n_content" cols="50" rows="8"><?php echo $row_newsdelete['n_content']; ?></textarea></td>
        </tr>
        <tr>
          <td colspan="3" align="center" bgcolor="#666666"><p class="impredtext">※請注意，一旦刪除將不能復原。
            </p>
            <p>
              <input name="delete" type="hidden" id="delete" value="1" />
              <input name="n_send" type="submit" class="iconsimg" id="n_send" value="確定刪除" />
          </p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table width="50" border="0" cellpadding="0" cellspacing="0" id="ctrl_tab">
        <tr>
          <td align="center"><a href="adminindex.php"><img src="../images/icons_img/back.png" width="20" height="20" class="iconsimg" title="管理主頁"/></a></td>
          <td align="center"><a href="newsadmin.php"><img src="../images/icons_img/Info.png" width="20" height="20" class="iconsimg" title="消息管理頁面"/></a></td>
        </tr>
      </table>
    </form>
  </div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($newsdelete);
?>
