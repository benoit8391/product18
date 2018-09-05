<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW" xml:lang="zh-TW"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>芙兒-玩美主義-新增留言</title>
<!-- InstanceEndEditable -->
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#wrapper #content #right #newmsg_form {
	width: 600px;
	margin-right: auto;
	margin-left: auto;
	margin-top: 20px;
	margin-bottom: 20px;
}

#wrapper #content #right #newmsg_table {
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 20px;
	margin-left: auto;
}
#wrapper #content #right #newmsg_table tr td h3 {
	font-family: "新細明體", "Times New Roman";
	font-size: 1em;
	color: #670167;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 10px;
}
#wrapper #content #right #newmsg_table tr td h4 {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	text-align: right;
	color: #670167;
	margin-top: 5px;
	margin-bottom: 5px;
}
#wrapper #content #right #newmsg_form #newmsg_table {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: dotted;
	border-right-style: dotted;
	border-top-color: #606;
	border-right-color: #606;
	border-bottom-color: #606;
	border-left-color: #606;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: dotted;
	border-left-style: dotted;
	border-top-color: #690369;
	border-right-color: #690369;
	border-bottom-color: #690369;
	border-left-color: #690369;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td #ms_title {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	margin: 5px;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td #ms_name {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	margin: 5px;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td #ms_date {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	margin: 5px;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td #ms_content {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	margin: 5px;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td p {
	text-align: center;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td p #ms_send {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	background-color: #640064;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	color: #FFF;
	margin: 5px;
}
#wrapper #content #right #newmsg_form #newmsg_table tr td p #ms_clear {
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
.redtext {
	font-family: "新細明體", "Times New Roman";
	font-size: 0.9em;
	color: #F00;
}
</style>
<script type="text/javascript">
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function YY_checkform() { //v4.66
//copyright (c)1998,2002 Yaromat.com
  var args = YY_checkform.arguments; var myDot=true; var myV=''; var myErr='';var addErr=false;var myReq;
  for (var i=1; i<args.length;i=i+4){
    if (args[i+1].charAt(0)=='#'){myReq=true; args[i+1]=args[i+1].substring(1);}else{myReq=false}
    var myObj = MM_findObj(args[i].replace(/\[\d+\]/ig,""));
    myV=myObj.value;
    if (myObj.type=='text'||myObj.type=='password'||myObj.type=='hidden'){
      if (myReq&&myObj.value.length==0){addErr=true}
      if ((myV.length>0)&&(args[i+2]==1)){ //fromto
        var myMa=args[i+1].split('_');if(isNaN(myV)||myV<myMa[0]/1||myV > myMa[1]/1){addErr=true}
      } else if ((myV.length>0)&&(args[i+2]==2)){
          var rx=new RegExp("^[\\w\.=-]+@[\\w\\.-]+\\.[a-z]{2,4}$");if(!rx.test(myV))addErr=true;
      } else if ((myV.length>0)&&(args[i+2]==3)){ // date
        var myMa=args[i+1].split("#"); var myAt=myV.match(myMa[0]);
        if(myAt){
          var myD=(myAt[myMa[1]])?myAt[myMa[1]]:1; var myM=myAt[myMa[2]]-1; var myY=myAt[myMa[3]];
          var myDate=new Date(myY,myM,myD);
          if(myDate.getFullYear()!=myY||myDate.getDate()!=myD||myDate.getMonth()!=myM){addErr=true};
        }else{addErr=true}
      } else if ((myV.length>0)&&(args[i+2]==4)){ // time
        var myMa=args[i+1].split("#"); var myAt=myV.match(myMa[0]);if(!myAt){addErr=true}
      } else if (myV.length>0&&args[i+2]==5){ // check this 2
            var myObj1 = MM_findObj(args[i+1].replace(/\[\d+\]/ig,""));
            if(myObj1.length)myObj1=myObj1[args[i+1].replace(/(.*\[)|(\].*)/ig,"")];
            if(!myObj1.checked){addErr=true}
      } else if (myV.length>0&&args[i+2]==6){ // the same
            var myObj1 = MM_findObj(args[i+1]);
            if(myV!=myObj1.value){addErr=true}
      }
    } else
    if (!myObj.type&&myObj.length>0&&myObj[0].type=='radio'){
          var myTest = args[i].match(/(.*)\[(\d+)\].*/i);
          var myObj1=(myObj.length>1)?myObj[myTest[2]]:myObj;
      if (args[i+2]==1&&myObj1&&myObj1.checked&&MM_findObj(args[i+1]).value.length/1==0){addErr=true}
      if (args[i+2]==2){
        var myDot=false;
        for(var j=0;j<myObj.length;j++){myDot=myDot||myObj[j].checked}
        if(!myDot){myErr+='* ' +args[i+3]+'\n'}
      }
    } else if (myObj.type=='checkbox'){
      if(args[i+2]==1&&myObj.checked==false){addErr=true}
      if(args[i+2]==2&&myObj.checked&&MM_findObj(args[i+1]).value.length/1==0){addErr=true}
    } else if (myObj.type=='select-one'||myObj.type=='select-multiple'){
      if(args[i+2]==1&&myObj.selectedIndex/1==0){addErr=true}
    }else if (myObj.type=='textarea'){
      if(myV.length<args[i+1]){addErr=true}
    }
    if (addErr){myErr+='* '+args[i+3]+'\n'; addErr=false}
  }
  if (myErr!=''){alert('The required information is incomplete or contains errors:\t\t\t\t\t\n\n'+myErr)}
  document.MM_returnValue = (myErr=='');
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
    	  <form action="" method="POST" name="newmsg_form" id="newmsg_form" onsubmit="YY_checkform('newmsg_form','ms_title','#q','0','您未填寫留言標題！','ms_name','#q','0','您未填寫您的姓名！','ms_content','15','1','您的留言並未符合最少文字15字！');return document.MM_returnValue">
    	    <table width="600" border="0" cellpadding="0" cellspacing="0" id="newmsg_table">
    	      <tr>
    	        <td colspan="2"><h3>新增留言頁面</h3></td>
  	        </tr>
    	      <tr>
    	        <td width="150"><h4>標題：</h4></td>
    	        <td width="450"><label for="ms_title"></label>
   	            <input name="ms_title" type="text" id="ms_title" size="30" />
   	            <span class="redtext">   	            *必填欄位</span></td>
  	        </tr>
    	      <tr>
    	        <td><h4>姓名：</h4></td>
    	        <td><label for="ms_name"></label>
   	            <input name="ms_name" type="text" id="ms_name" size="20" />
   	            <span class="redtext"> *必填欄位</span></td>
  	        </tr>
    	      <tr>
    	        <td><h4>留言日期：</h4></td>
    	        <td><label for="ms_date"></label>
   	            <input name="ms_date" type="text" id="ms_date" value="" size="20" /></td>
  	        </tr>
    	      <tr>
    	        <td valign="top"><h4>留言內容：</h4></td>
    	        <td><label for="ms_content"></label>
   	            <textarea name="ms_content" id="ms_content" cols="40" rows="10"></textarea>
   	            <span class="redtext"> *必填欄位</span></td>
  	        </tr>
    	      <tr>
    	        <td colspan="2"><p>
    	          <input type="submit" name="ms_send" id="ms_send" value="確定留言" />
    	          <input type="reset" name="ms_clear" id="ms_clear" value="重寫留言" />
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
