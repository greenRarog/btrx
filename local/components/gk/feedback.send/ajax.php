<?
	require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
   if($_REQUEST['get'] == 'captcha')
   {
      echo $code = $APPLICATION->CaptchaGetCode();
   }
   if($_REQUEST['get'] == 'send')
   {
     $error = '';
     if(!$APPLICATION->CaptchaCheckCode($_REQUEST['captcha_word'], $_REQUEST['captcha_sid']))
        $error .="Текст с картинки введен неверно!";
     if($_REQUEST['name']=='')
        $error .= "Поле Имя не заполнено!";
     if($_REQUEST['email']=='' || !check_email($_REQUEST['email']))
        $error .="Поле \"email\" введено неверно<br />";
  
     if($_REQUEST['message']=='')
        $error .="Заполните текст сообщения<br />";             
    
     if($error)
        echo "<span style='color:#ff0000;'>".$error."</span>";
     else
     {
        $arEventFields = array(
           "NAME"                  => $_REQUEST['name'],
           "EMAIL"     => $_REQUEST['email'],
           "MESSAGE"             => $_REQUEST['message'],
           );
        if(CEvent::Send("FEEDBACK_SEND", array(SITE_ID), $arEventFields))
           echo "<span style='color:#0fcf00;'>Сообщение успешно отправлено!</span>";
        else
           echo "<span style='color:#ff0000;'>Ошибка почтового сервера!</span>";
     }
   }                
	?>