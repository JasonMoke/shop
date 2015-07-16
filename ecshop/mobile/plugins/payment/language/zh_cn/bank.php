<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 *
 * 文件名称：balance.php
 *
 * 功能描述：银行汇款（转账）语言包
 *
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 *
 */

/* 访问控制 */
if (! defined('IN_ECTOUCH')) {
    die('Deny Access');
}

$_LANG['bank'] = '银行汇款/转帐';
$_LANG['bank_desc'] = '银行名称' . chr(13) . '收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。' . chr(13) . '注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。';