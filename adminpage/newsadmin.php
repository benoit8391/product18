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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_newsdate = 10;
$pageNum_newsdate = 0;
if (isset($_GET['pageNum_newsdate'])) {
  $pageNum_newsdate = $_GET['pageNum_newsdate'];
}
$startRow_newsdate = $pageNum_newsdate * $maxRows_newsdate;

mysql_select_db($database_mydatebase, $mydatebase);
$query_newsdate = "SELECT * FROM newsdate ORDER BY n_date DESC";
$query_limit_newsdate = sprintf("%s LIMIT %d, %d", $query_newsdate, $startRow_newsdate, $maxRows_newsdate);
$newsdate = mysql_query($query_limit_newsdate, $mydatebase) or die(mysql_error());
$row_newsdate = mysql_fetch_assoc($newsdate);

if (isset($_GET['totalRows_newsdate'])) {
  $totalRows_newsdate = $_GET['totalRows_newsdate'];
} else {
  $all_newsdate = mysql_query($query_newsdate);
  $totalRows_newsdate = mysql_num_rows($all_newsdate);
}
$totalPages_newsdate = ceil($totalRows_newsdate/$maxRows_newsdate)-1;

$queryString_newsdate = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_newsdate") == false && 
        stristr($param, "totalRows_newsdate") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_newsdate = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_newsdate = sprintf("&totalRows_newsdate=%d%s", $totalRows_newsdate, $queryString_newsdate);

$MM_paramName = ""; 

// *** Go To Record and Move To Record: create strings for maintaining URL and Form parameters
// create the list of parameters which should not be maintained
$MM_removeList = "&index=";
if ($MM_paramName != "") $MM_removeList .= "&".strtolower($MM_paramName)."=";
$MM_keepURL="";
$MM_keepForm="";
$MM_keepBoth="";
$MM_keepNone="";
// add the URL parameters to the MM_keepURL string
reset ($_GET);
while (list ($key, $val) = each ($_GET)) {
	$nextItem = "&".strtolower($key)."=";
	if (!stristr($MM_removeList, $nextItem)) {
		$MM_keepURL .= "&".$key."=".urlencode($val);
	}
}
// add the Form parameters to the MM_keepURL string
if(isset($_POST)){
	reset ($_POST);
	while (list ($key, $val) = each ($_POST)) {
		$nextItem = "&".strtolower($key)."=";
		if (!stristr($MM_removeList, $nextItem)) {
			$MM_keepForm .= "&".$key."=".urlencode($val);
		}
	}
}
// create the Form + URL string and remove the intial '&' from each of the strings
$MM_keepBoth = $MM_keepURL."&".$MM_keepForm;
if (strlen($MM_keepBoth) > 0) $MM_keepBoth = substr($MM_keepBoth, 1);
if (strlen($MM_keepURL) > 0)  $MM_keepURL = substr($MM_keepURL, 1);
if (strlen($MM_keepForm) > 0) $MM_keepForm = substr($MM_keepForm, 1);

// *** Go To Record and Move To Record: create strings for maintaining URL and Form parameters
// create the list of parameters which should not be maintained
$MM_removeList = "&index=";
if ($MM_paramName != "") $MM_removeList .= "&".strtolower($MM_paramName)."=";
$MM_keepURL="";
$MM_keepForm="";
$MM_keepBoth="";
$MM_keepNone="";
// add the URL parameters to the MM_keepURL string
reset ($_GET);
while (list ($key, $val) = each ($_GET)) {
	$nextItem = "&".strtolower($key)."=";
	if (!stristr($MM_removeList, $nextItem)) {
		$MM_keepURL .= "&".$key."=".urlencode($val);
	}
}
// add the Form parameters to the MM_keepURL string
if(isset($_POST)){
	reset ($_POST);
	while (list ($key, $val) = each ($_POST)) {
		$nextItem = "&".strtolower($key)."=";
		if (!stristr($MM_removeList, $nextItem)) {
			$MM_keepForm .= "&".$key."=".urlencode($val);
		}
	}
}
// create the Form + URL string and remove the intial '&' from each of the strings
$MM_keepBoth = $MM_keepURL."&".$MM_keepForm;
if (strlen($MM_keepBoth) > 0) $MM_keepBoth = substr($MM_keepBoth, 1);
if (strlen($MM_keepURL) > 0)  $MM_keepURL = substr($MM_keepURL, 1);
if (strlen($MM_keepForm) > 0) $MM_keepForm = substr($MM_keepForm, 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admintemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒後台管理系統-最新消息管理頁面</title>
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
#wrapper #main #news_tab {
	margin-top: 150px;
	margin-left: 20px;
}
#wrapper #main #news_tab h3   {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 10px;
	color: #FFF;
}
#wrapper #main #news_tab h4   {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	text-align: center;
	margin-top: 5px;
	margin-bottom: 5px;
	color: #FFF;
}
#wrapper #main #news_tab2 {
	margin-top: 10px;
	margin-left: 20px;
}
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
#wrapper #main #news_tab p   {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	margin-top: 2px;
	margin-bottom: 2px;
	margin-left: 5px;
}
#wrapper #main #news_tab2 p   {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.8em;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="main" -->
  <div id="main">
    <table width="600" border="0" cellpadding="0" cellspacing="0" id="news_tab">
      <tr>
        <td colspan="4" bgcolor="#666666"><h3>最新消息管理頁面</h3></td>
      </tr>
      <tr>
        <td width="240" bgcolor="#999999"><h4>最新消息標題</h4></td>
        <td width="260" bgcolor="#999999"><h4>發佈日期</h4></td>
        <td colspan="2" bgcolor="#999999"><h4>編輯</h4></td>
      </tr>
      <?php do { ?>
        <tr>
          <td bgcolor="#CCCCCC"><p><?php echo $row_newsdate['n_title']; ?></p></td>
          <td bgcolor="#CCCCCC"><p><?php echo $row_newsdate['n_date']; ?></p></td>
          <td width="50" align="center" bgcolor="#CCCCCC"><p><a href="newsedit.php?<?php echo $MM_keepNone.(($MM_keepNone!="")?"&":"")."n_id=".urlencode($row_newsdate['n_id']) ?>"><img src="../images/icons_img/Sys.png" width="20" height="20" class="iconsimg" title="修改消息" /></a></p></td>
          <td width="50" align="center" bgcolor="#CCCCCC"><p><a href="newsdelete.php?<?php echo $MM_keepNone.(($MM_keepNone!="")?"&":"")."n_id=".urlencode($row_newsdate['n_id']) ?>"><img src="../images/icons_img/delete.png" width="20" height="20" class="iconsimg" title="刪除消息" /></a></p></td>
        </tr>
        <?php } while ($row_newsdate = mysql_fetch_assoc($newsdate)); ?>
    </table>
    <table width="600" border="0" cellpadding="0" cellspacing="0" id="news_tab2">
      <tr>
        <td width="240" bgcolor="#999999"><p>&nbsp;
消息記錄 <?php echo ($startRow_newsdate + 1) ?> 到 <?php echo min($startRow_newsdate + $maxRows_newsdate, $totalRows_newsdate) ?> 共 <?php echo $totalRows_newsdate ?>筆</p></td>
        <td width="260" bgcolor="#999999"><table border="0">
            <tr>
              <td><?php if ($pageNum_newsdate > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_newsdate=%d%s", $currentPage, 0, $queryString_newsdate); ?>">第一頁</a>
                  <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_newsdate > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_newsdate=%d%s", $currentPage, max(0, $pageNum_newsdate - 1), $queryString_newsdate); ?>">上一頁</a>
                  <?php } // Show if not first page ?></td>
              <td><?php if ($pageNum_newsdate < $totalPages_newsdate) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_newsdate=%d%s", $currentPage, min($totalPages_newsdate, $pageNum_newsdate + 1), $queryString_newsdate); ?>">下一頁</a>
                  <?php } // Show if not last page ?></td>
              <td><?php if ($pageNum_newsdate < $totalPages_newsdate) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_newsdate=%d%s", $currentPage, $totalPages_newsdate, $queryString_newsdate); ?>">最後一頁</a>
                  <?php } // Show if not last page ?></td>
            </tr>
          </table>
        </p></td>
        <td width="50" align="center" bgcolor="#999999"><p><a href="newsadd.php"><img src="../images/icons_img/Add.png" width="20" height="20" class="iconsimg" title="新增消息"/></a></p></td>
        <td width="50" align="center" bgcolor="#999999"><p><a href="adminindex.php"><img src="../images/icons_img/back.png" width="20" height="20" class="iconsimg" title="管理主頁" /></a></p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($newsdate);
?>
