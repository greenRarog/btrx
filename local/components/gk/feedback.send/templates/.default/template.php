<form action="" method="post" class="feedback_form">
	        <input type="hidden" name="get" value="send" />

	        <?if($arResult['SUCCESS']=='Y'){?><span class="success"><?=$arResult['MESSAGE'];?><br /></span><?}?>
	        <?if($arResult['SUCCESS']=='N'){?><span class="error"><?
               foreach($arResult['ERROR'] as $k =>$v)
                      echo $v, "<br />";
	        ?><br /></span><?}?>
	        <div class="item">
               <label><?=GetMessage('NAME');?>:</label><input type="text" name="name" value="" required />
	        </div>
	        <div class="item">
               <label><?=GetMessage('EMAIL');?>:</label><input type="text" name="email" value="" required />
	        </div>
	        <div class="item">
               <label><?=GetMessage('MESSAGE_TEXT');?>:</label><textarea name="message" required></textarea>
	        </div>
	   <div class="item">
               <label><?=GetMessage('CAPTCHA_TEXT');?>:</label>
	       <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult['CAPTCHA_CODE'];?>" alt="CAPTCHA" width="120" class="captcha_img" />  
	<br />               
	       <a href="#" rel="nofollow" class="update"><?=GetMessage('REFRESH');?></a> <br />        <br />  
	       <input type="hidden" name="captcha_sid" value="<?=$arResult['CAPTCHA_CODE'];?>" />
	       <input type="text" name="captcha_word" value="" required/>
	   </div><!-- captcha-holder -->
	        <input type="submit" value="<?=GetMessage('SEND');?>" />
</form>
	<div class="schema"></div>
	<?
	   CJSCore::Init(array("jquery", "popup"));
	        $ajax_path = str_replace($_SERVER['DOCUMENT_ROOT'],"/",__FILE__);
	        $ajax_path = str_replace("/templates/.default/template.php","/ajax.php",$ajax_path);
	?>
	 <script>
	 $(document).ready(function() {
	    $('.update').on('click', function(){
	    $.ajax({
	     url: '<?=$ajax_path;?>',
	     type: 'post',
	     data: 'get=captcha',
	     success: function(data){
	       $('.feedback_form .captcha_img').attr('src', '/bitrix/tools/captcha.php?captcha_sid=' + data);
	       $('.feedback_form input[name="captcha_sid"]').val(data);
	     }
	    });
	    
	    return false;
	    });
	   
	    $('.feedback_form').on('submit', function(){
               var name = $('input[name="name"]').val();
               var email = $('input[name="email"]').val();
               var message = $('textarea[name="message"]').val();
               var captcha_word = $('input[name="captcha_word"]').val();
               var captcha_sid = $('input[name="captcha_sid"]').val();
	     $.ajax({
                      url: '<?=$ajax_path;?>',
	       type: 'post',
	       data: 'get=send&name='+name+'&email='+email+'&message='+message+'&captcha_word='+captcha_word+'&captcha_sid='+captcha_sid,
	       success: function(data){
                             var popup = new BX.CDialog({
                                'title': 'Отправка формы',
                                'content': data,
                                 'draggable': true,
                                'resizable': false,
                                'width':250,
                                'height':200,
                                'buttons': [BX.CDialog.btnClose]
                             });
                                          
                             popup.Show();
	       }
                     
	     });
                      return false;

	    });
	   });
	   </script>
 

