<?php

namespace Sprint\Migration;


class Version20240520092108 extends Version
{
    protected $description = "create_geo_ips_h1block";

    protected $moduleVersion = "4.8.2";

    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock([
            'NAME' => 'GeoIp',
            'TABLE_NAME' => 'hl_geo_ips',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_IP',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_LAT',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_LON',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_REGION_NAME_RU',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_REGION_NAME_EN',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_COUNTRY_NAME_RU',
        ]);
        $helper->Hlblock()->saveField($hlblockId, [
            'USER_TYPE_ID' => 'string',
            'FIELD_NAME' => 'UF_COUNTRY_NAME_EN',
        ]);
    }

    public function down()
    {
        //your code ...
    }
}
