 *
    <a class="<?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'DESC'): ?>ect-colory select<?php elseif ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?>ect-colory<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'shop_price', 'order'=> ($this->_var['sort']=='shop_price' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_price']; ?><i class="glyphicon glyphicon-arrow-up"></i></a> <a class="category-list"><i class="ect-icon ect-icon2 ect-icon-cate3"></i><?php echo $this->_var['lang']['goods_filter']; ?></a> </div>
    <div class="category-list-show"> 
      <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
 * * *
    <input type="hidden" name="keywords" value="<?php echo $this->_var['keywords']; ?>" />
  </form>
</div>

<?php if ($this->_var['show_asynclist'] == 1): ?>
 *
</div>
<?php else: ?>
<div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0">
  <ul id="J_ItemList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
 * *
    foreach ($_from AS $this->_var['promotion']):
 * * *
  </ul>
</div>
<?php echo $this->fetch('library/page.lbi'); ?>
<?php endif; ?> 
<footer class="logo"><a href="http://www.ectouch.cn" title="ECTouch官网" target="_blank"><img src="__TPL__/images/copyright.png" width="176" height="60"></a></footer>

 * *
          <a href="javascript:;" id="filter_brand" data-url="touchweb_mod_Brand" class="title"> <?php echo $this->_var['lang']['brand']; ?> <span class="range"> 
          <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand']['iteration']++;
 *
          </span> <em class="icon-right_arrow"></em> </a>
          <ul>
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands']['iteration']++;
 *
          <a href="javascript:;" id="filter_price" data-url="attr_price" class="title"> <?php echo $this->_var['lang']['sort_price']; ?> <span class="range"> 
          <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['grade']['iteration']++;
 *
          </span> <em class="icon-right_arrow"></em> </a>
          <ul>
            <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['grade']['iteration']++;
 *
          <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
          
          <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter');$this->_foreach['filter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter']['total'] > 0):
    foreach ($_from AS $this->_var['filter']):
        $this->_foreach['filter']['iteration']++;
?> 
          <a href="javascript:;" name="<?php echo $this->_var['filter']['filter_attr_name']; ?>" id="filter_attr_25544" data-tcd="ATTRIBUTE.25544" data-tcs="SEARCH.0" data-url="attr_25544" class="title"><?php echo $this->_var['filter']['filter_attr_name']; ?> <span class="range"> 
          <?php $_from = $this->_var['filter']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
 *
          </span> <em class="icon-right_arrow"></em> </a>
          <ul class="filter" data="<?php echo ($this->_foreach['filter']['iteration'] - 1); ?>">
            <?php $_from = $this->_var['filter']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
 * * * *
  </div>
</form>
<script>
function clear_filter(){
 $(".touchweb-com_listType .range").text("全部");
	   $(".touchweb-com_listType input").each(function() {
		  if($(this).attr('class') != 'cat'){ 
			   $(this).val("");
		  }
	   });
}
</script> 
 

