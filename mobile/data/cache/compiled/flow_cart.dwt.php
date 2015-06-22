 * * *
 * * * * * * * * * * *
 * *
    <ul>
      <?php $_from = $this->_var['linked_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
 * * * * * *
    <p class="text-center"><?php echo $this->_var['lang']['empty_shopping']; ?></p>
    <a type="button" href="<?php echo url('category/top_all');?>" class="btn btn-info ect-btn-info ect-bg"><?php echo $this->_var['lang']['go_shopping']; ?></a> </div>
  <?php endif; ?> 
</div>
