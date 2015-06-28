<?php

/**
 * ECSHOP 商品页
 * ============================================================================
 *
 *
 *
 *
 *
 * ============================================================================
 * $Author: jason $
 * $Id: buy.php 17217 2011-01-19 06:29:08Z jason $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
$smarty->assign('footer', get_footer());
$smarty->display('buy.wml');

?>