<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

echo $arResult["DATE"];

?>
<div>
	
</div>
<form class="ip_seacher_form">
	<label for='ip'>Введите IP для проверки:</label>
	<input name='ip'  placeholder="введите ip" />
	<button>проверить!</button>
</form>

<script>
	let form = document.querySelector("form.ip_seacher_form");
	console.log(form);

</script>