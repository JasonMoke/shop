<?php echo $this->fetch('library/page_header.lbi'); ?>
 * * *
        <li><a href="<?php echo $this->_var['goods']['goods_img']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
 * * * * *
        <?php echo $this->_var['goods']['shop_price_formated']; ?> 
        <?php endif; ?> <small> <del><?php if ($this->_var['cfg']['SHOW_MARKETPRICE']): ?><?php echo $this->_var['goods']['market_price']; ?> <?php endif; ?></del></small>
	  </p>
	  <p><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><strong id="leftTime" class="price"><?php echo $this->_var['lang']['please_waiting']; ?></strong><?php endif; ?></p>
 *
      <p class="ect-border-top ect-margin-tb"> 
        <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
 * * * * * *
        <div class="goods-optionc"> 
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
 *
              <?php if ($this->_var['cfg']['GOODSATTR_STYLE'] == 1): ?> 
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
 * *
 * *
 * * * * * * * * * *
 *
    foreach ($_from AS $this->_var['property']):
 * * * * * * *
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_25845100_1434852996']):
        $this->_foreach['goods']['iteration']++;
 * * * *
     
  </div>
  <footer class="logo"><a href="http://www.ectouch.cn" title="ECTouch官网" target="_blank"><img src="__TPL__/images/copyright.png" width="176" height="60"></a></footer>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript" src="__TPL__/js/lefttime.js"></script> 
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){Code.photoSwipe('a', '#Gallery');}, false);


/*倒计时*/
var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
var goodsattr_style = 1;
var goodsId = <?php echo $this->_var['goods_id']; ?>;

var gmt_end_time = "<?php echo empty($this->_var['goods']['gmt_end_time']) ? '0' : $this->_var['goods']['gmt_end_time']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;

var use_how_oos = <?php echo C('use_how_oos');?>;
 *
}
function back_goods_number(){
 var goods_number = document.getElementById('goods_number').value;
  document.getElementById('back_number').value = goods_number;
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice(type)
 * *
    changePriceResponse(data);
  }, 'json');
}


/**
 * 接收返回的信息
 */
 *
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/**
 * 接收返回的信息
 */
 *
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/*判断user-tab是否距顶，距顶悬浮*/
var nav_tabs_top = $(".user-tab .nav-tabs").offset().top;//获取nav-tabs距离顶部的位
function func_scroll(){//定义一个事件效果置
	var documentTop = $(document).scrollTop();//获取滚动条距离顶部距离
	if(nav_tabs_top <= documentTop){
		$(".user-tab").addClass("user-tab-fixed");
		$("#is-nav-tabs").css("display","block");
	}else{
		$(".user-tab").removeClass("user-tab-fixed");
		$("#is-nav-tabs").css("display","none");		
	}
}

window.onscroll = function () {
	 func_scroll();
}
</script> 
<script type="text/javascript">
				TouchSlide({ 
					slideCell:"#picScroll",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:"true", //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});
			</script>
</body></html>