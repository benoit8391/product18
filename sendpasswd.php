<?php

  function generatePassword ($length = 10)
  {
	//設定一個長度為8位數的亂碼
    // 開始用一個空白的密碼
    $password = "";

    // 您可以自定您要的密碼字元內容，只需要要將資料放在possible內
    $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

    // 設定一個密碼的最長長度的變數
    $maxlength = strlen($possible);
  
    // 檢查密碼長度，如果超過時進行截斷
    if ($length > $maxlength) {
      $length = $maxlength;
    }
	
    //設定字碼的字符長度
    $i = 0; 
    
    // 新增一個字符長度但要小於length
    while ($i < $length) { 

      // 挑選隨機的字符
      $char = substr($possible, mt_rand(0, $maxlength-1), 1);
        
      if (!strstr($password, $char)) { 
        $password .= $char;
        $i++;
      }

    }
    return $password;
  }
?>