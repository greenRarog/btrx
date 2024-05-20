<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class GeoIpSeacher extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        if (!isset($arParams["TEMPLATE_FOR_DATE"]) or (($arParams["TEMPLATE_FOR_DATE"]."") == "")) {$arParams["TEMPLATE_FOR_DATE"] = "Y-m-d";}
        return $arParams;
    }
      
    public function executeComponent()
    {
        $this->arResult["DATE"] = date($this->arParams["TEMPLATE_FOR_DATE"],time());
        $this->IncludeComponentTemplate();
    }

}