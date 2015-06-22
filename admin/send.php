<?php
/**
 * ECSHOP 快钱联合注册接口
 * ============================================================================
 *
 *
 *
 *
 *
 * ============================================================================
 * $Author: liuhui $
 * $Id: send.php 15013 2008-10-23 09:31:42Z liuhui $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
$backUrl=$ecs->url() . ADMIN_PATH . '/receive.php';
header("location:http://cloud.ecshop.com/payment_apply.php?mod=kuaiqian&par=$backUrl");
exit;
?>
