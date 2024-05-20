<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?
$APPLICATION->IncludeComponent(
	"gk:feedback.send", 
	".default", 
	Array(
		'AJAX_MODE' => 'Y',
	),
	false
);
?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>