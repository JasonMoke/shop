 * * * *
 *
            <?php if ($this->_var['comment']['re_content']): ?>
            <p><?php echo $this->_var['lang']['admin_username']; ?><span><?php echo $this->_var['comment']['re_content']; ?></span></p>
 * *
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_29065100_1434852996');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_29065100_1434852996']):
 * * *
    foreach ($_from AS $this->_var['comment']):
 *
            <?php if ($this->_var['comment']['re_content']): ?>
            <p><?php echo $this->_var['lang']['admin_username']; ?><span><?php echo $this->_var['comment']['re_content']; ?></span></p>
 * *
              <?php $_from = $this->_var['pager_fav']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_29175100_1434852996');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_29175100_1434852996']):
 * * *
    foreach ($_from AS $this->_var['comment']):
 *
            <?php if ($this->_var['comment']['re_content']): ?>
            <p><?php echo $this->_var['lang']['admin_username']; ?><span><?php echo $this->_var['comment']['re_content']; ?></span></p>
 * *
              <?php $_from = $this->_var['pager_med']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_29268700_1434852996');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_29268700_1434852996']):
 * * *
    foreach ($_from AS $this->_var['comment']):
 *
            <?php if ($this->_var['comment']['re_content']): ?>
            <p><?php echo $this->_var['lang']['admin_username']; ?><span><?php echo $this->_var['comment']['re_content']; ?></span></p>
 * *
              <?php $_from = $this->_var['pager_bad']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_29643200_1434852996');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_29643200_1434852996']):
 * * * * * * * * * * * * * *
  </section>
   
</div>
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_29929200_1434852996');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_29929200_1434852996']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_29929200_1434852996']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;
 * *
 *
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }
 * * *
   }
 *
   }
 *
   }
 *
   return false;
}

/**
 * 处理提交评论的反馈信息
 *
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');
 *
    }
  }

//]]>
</script>