<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:61:"C:\xampp\htdocs\go\mobile/themes/default/category_top_all.dwt";i:1;s:64:"C:\xampp\htdocs\go\mobile/themes/default/library/page_header.lbi";i:2;s:59:"C:\xampp\htdocs\go\mobile/themes/default/library/search.lbi";i:3;s:64:"C:\xampp\htdocs\go\mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1434857105;s:8:"maketime";i:1434853505;}<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>所有分类_ECSHOP演示站 - Powered by ECTouch.cn 触屏版</title>
<link rel="stylesheet" href="/go/mobile/data/common/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/go/mobile/data/common/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="/go/mobile/themes/default/css/ectouch.css">
<link rel="stylesheet" href="/go/mobile/themes/default/css/photoswipe.css">
</head><body><div class="con">
<header class="ect-header ect-margin-tb ect-margin-lr text-center"> <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a>
<span>所有分类</span>
 <a href="javascript:openSearch();" class="pull-right ect-icon ect-icon1 ect-icon-search1"></a>
</header>
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
          </ul> 
</div>
</div>
 * * *
  </div>
</div>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 10;"><i class="fa fa-angle-up"></i></a>
<style>
#scrollUp {
	border-radius:100%;
	background-color: #777;
	color: #eee;
	font-size: 40px;
	line-height: 1;text-align: center;text-decoration: none;bottom: 1em;right: 10px;overflow: hidden;width: 46px;
	height: 46px;
	border: none;
	opacity: 0.6;
}
</style>
<script type="text/javascript" src="/go/mobile/data/common/js/jquery.min.js" ></script> 
<script type="text/javascript" src="/go/mobile/data/common/js/jquery.json.js" ></script> 
<script type="text/javascript" src="/go/mobile/data/common/js/common.js"></script> 
<script type="text/javascript" src="/go/mobile/data/common/js/jquery.more.js"></script> 
<script type="text/javascript" src="/go/mobile/data/common/js/utils.js" ></script> 
<script src="/go/mobile/themes/default/js/TouchSlide.1.1.js"></script> 
<script src="/go/mobile/themes/default/js/ectouch.js"></script> 
<script src="/go/mobile/themes/default/js/simple-inheritance.min.js"></script> 
<script src="/go/mobile/themes/default/js/code-photoswipe-1.0.11.min.js"></script> 
<script src="/go/mobile/data/common/bootstrap/js/bootstrap.min.js"></script> 
<script src="/go/mobile/themes/default/js/jquery.scrollUp.min.js"></script> 
<script type="text/javascript" src="/go/mobile/data/common/js/validform.js" ></script> 
<script language="javascript">
	/*banner滚动图片*/
		TouchSlide({
			slideCell : "#focus",
			titCell : ".hd ul", // 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell : ".bd ul",
			effect : "left",
			autoPlay : true, // 自动播放
			autoPage : true, // 自动分页
			delayTime: *切换效果持续时间（执行一次效果用多少毫秒）
			interTime: *自动运行间隔（隔多少毫秒后执行下一个效果）
			switchLoad : "_src" // 切换加载，真实图片路径为"_src"
		});
	/*弹出评论层并隐藏其他层*/
	function openSearch(){
		if($(".con").is(":visible")){
			$(".con").hide();	
			$(".search").show();
		}
	}
	function closeSearch(){
		if($(".con").is(":hidden")){
			$(".con").show();	
			$(".search").hide();
		}
	}
</script> 
</body>
</html>