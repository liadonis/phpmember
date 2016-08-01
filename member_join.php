<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>網站會員系統</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

<table width="780" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
  <td class="tdbline"><img src="images/mlogo.png" alt="會員系統" width="164" height="67"></td>
  </tr>
  <tr>
  <td class="tdbline">
     <table width="100%" border="0" cellspacing="0" cellpadding="10">
     <tr valign="top">
     <td class="tdrline">
     <form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkForm();">
     <p class="title">加入會員</p>

     <div class="errDiv">帳號 xxx 已經有人使用！</div>
          
     <div class="dataDiv">
     <hr size="1">
     <p class="heading">帳號資料</p>
        <p><strong>使用帳號</strong>：
        <input name="m_username" type="text" class="normalinput" id="m_username">
        <font color="#FF0000">*</font><br>
        <span class="smalltext">請填入5~12個字元以內的小寫英文字母、數字、以及_ 符號。</span>
        </p>    
        
        <p>
        <strong>使用密碼</strong>：
        <input name="m_passwd" type="password" class="normalinput" id="m_passwd">
        <font color="#FF0000">*</font><br>
        <span class="smalltext">請填入5~10個字元以內的英文字母、數字、以及各種符號組合，</span>
        </p>
        
        <p><strong>確認密碼</strong>：
        <input name="m_passwdrecheck" type="password" class="normalinput" id="m_passwdrecheck">
        <font color="#FF0000">*</font> <br>
        <span class="smalltext">再輸入一次密碼</span>
        </p>
        <hr size="1">
        <p class="heading">個人資料</p>
        <p><strong>真實姓名</strong>：
        <input name="m_name" type="text" class="normalinput" id="m_name">
        <font color="#FF0000">*</font>
        </p>
        
        <p>
        <strong>性　　別</strong>：
        <input name="m_sex" type="radio" value="女" checked>女
        <input name="m_sex" type="radio" value="男">男 
        <font color="#FF0000">*</font>
        </p>
            
        <p><strong>生　　日</strong>：
        <input name="m_birthday" type="text" class="normalinput" id="m_birthday">
        <font color="#FF0000">*</font> <br>
        <span class="smalltext">為西元格式(YYYY-MM-DD)。</span>
        </p>
        
        <p><strong>電子郵件</strong>：
        <input name="m_email" type="text" class="normalinput" id="m_email">
        <font color="#FF0000">*</font>
        </p>
            
        <p class="smalltext">請確定此電子郵件為可使用狀態，以方便未來系統使用，如補寄會員密碼信。</p>
        <p><strong>個人網頁</strong>：
        <input name="m_url" type="text" class="normalinput" id="m_url">
        <br>
        <span class="smalltext">請以「http://」 為開頭。</span>
        </p>
        
        <p><strong>電　　話</strong>：
        <input name="m_phone" type="text" class="normalinput" id="m_phone">
        </p>
        <p><strong>住　　址</strong>：
        <input name="m_address" type="text" class="normalinput" id="m_address" size="40">
        </p>
        
        <p> <font color="#FF0000">*</font> 表示為必填的欄位</p>
    </div>
         
    <hr size="1">
        <p align="center">
        <input name="action" type="hidden" id="action" value="join">
        <input type="submit" name="Submit2" value="送出申請">
        <input type="reset" name="Submit3" value="重設資料">
        <input type="button" name="Submit" value="回上一頁">
        </p>
    </form>
    </td>
        
    <td width="200">
        <div class="boxtl"></div><div class="boxtr"></div>
        <div class="regbox">
        <p class="heading"><strong>填寫資料注意事項：</strong></p>
          <ol>
          <li> 請提供您本人正確、最新及完整的資料。 </li>
          <li> 在欄位後方出現「*」符號表示為必填的欄位。</li>
          <li>填寫時請您遵守各個欄位後方的補助說明。</li>
          <li>關於您的會員註冊以及其他特定資料，本系統不會向任何人出售或出借你所填寫的個人資料。</li>
          <li>在註冊成功後，除了「使用帳號」外您可以在會員專區內修改您所填寫的個人資料。</li>
          </ol>
        </div>
        <div class="boxbl"></div>
        <div class="boxbr"></div>
    </td>
    </tr>
    </table>
  </td>
  </tr>
  <tr>
    <td align="center" background="" class="trademark">2014 eHappy Studio All Rights Reserved.</td>
  </tr>
</table>
</body>
</html>
