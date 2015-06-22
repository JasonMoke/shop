<?php
/**
 * ECSHOP 帮助信息接口
 * ============================================================================
 *
 *
 *
 *
 *
 * ============================================================================
 * $Author: jason $
 * $Id: respond.php 16220 2009-06-12 02:08:59Z jason $
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');

$get_keyword = trim($_GET['al']); // 获取关键字
header("location:http://ecshop.ecmoban.com/do.php?k=".$get_keyword."&v=".$_CFG['ecs_version']."&l=".$_CFG['lang']."&c=".EC_CHARSET);
?>