<?php
/**
 * 物流自提服务站首页
 *
 **by 校帮  运营版*/

defined('InSchoolAssistant') or exit('Access Invalid!');

class indexControl extends BaseDeliveryControl{
    public function __construct(){
        parent::__construct();
        @header('location: index.php?act=login');die;
    }
}

