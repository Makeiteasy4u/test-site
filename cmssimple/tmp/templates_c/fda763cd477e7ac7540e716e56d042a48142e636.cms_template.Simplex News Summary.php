<?php /* Smarty version Smarty-3.1-DEV, created on 2015-11-02 21:00:06
         compiled from "cms_template:Simplex News Summary" */ ?>
<?php /*%%SmartyHeaderCode:152638229756381526d74499-27479553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda763cd477e7ac7540e716e56d042a48142e636' => 
    array (
      0 => 'cms_template:Simplex News Summary',
      1 => '1446515888',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '152638229756381526d74499-27479553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cats' => 0,
    'node' => 0,
    'items' => 0,
    'entry' => 0,
    'author_label' => 0,
    'category_label' => 0,
    'pagecount' => 0,
    'pagenumber' => 0,
    'firstpage' => 0,
    'prevpage' => 0,
    'pagetext' => 0,
    'oftext' => 0,
    'nextpage' => 0,
    'lastpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56381526e25f17_90689564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56381526e25f17_90689564')) {function content_56381526e25f17_90689564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_repeat')) include '/home/vol5_7/byethost7.com/b7_16814858/hub.byethost7.com/htdocs/cmssimple/plugins/function.repeat.php';
if (!is_callable('smarty_modifier_cms_escape')) include '/home/vol5_7/byethost7.com/b7_16814858/hub.byethost7.com/htdocs/cmssimple/plugins/modifier.cms_escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/vol5_7/byethost7.com/b7_16814858/hub.byethost7.com/htdocs/cmssimple/lib/smarty/plugins/modifier.date_format.php';
?><!-- .news-summary wrapper --><article class='news-summary'><span class='heading'><span>News</span></span><ul class='category-list cf'><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['node']->value['depth']>$_smarty_tpl->tpl_vars['node']->value['prevdepth']) {?><?php echo smarty_function_repeat(array('string'=>'<ul>','times'=>$_smarty_tpl->tpl_vars['node']->value['depth']-$_smarty_tpl->tpl_vars['node']->value['prevdepth']),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['depth']<$_smarty_tpl->tpl_vars['node']->value['prevdepth']) {?><?php echo smarty_function_repeat(array('string'=>'</li></ul>','times'=>$_smarty_tpl->tpl_vars['node']->value['prevdepth']-$_smarty_tpl->tpl_vars['node']->value['depth']),$_smarty_tpl);?>
</li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value['index']>0) {?></li><?php }?><li<?php if ($_smarty_tpl->tpl_vars['node']->value['index']==0) {?> class='first'<?php }?>><?php if ($_smarty_tpl->tpl_vars['node']->value['count']>0) {?><a href='<?php echo $_smarty_tpl->tpl_vars['node']->value['url'];?>
'><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->tpl_vars['node']->value['news_category_name'];?>
 </span><?php }?><?php } ?><?php echo smarty_function_repeat(array('string'=>'</li></ul>','times'=>$_smarty_tpl->tpl_vars['node']->value['depth']-1),$_smarty_tpl);?>
</li></ul><?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?><!-- .news-article (wrapping each article) --><section class='news-article'><header><h2><a href='<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
' title='<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
'><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a></h2><div class='meta cf'><time class='date' datetime='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate,'%Y-%m-%d');?>
'><span class='day'> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate,'%d');?>
 </span><span class='month'> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate,'%b');?>
 </span></time><span class='author'> <?php echo $_smarty_tpl->tpl_vars['author_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>
 </span><span class='category'> <?php echo $_smarty_tpl->tpl_vars['category_label']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>
</span></div></header><?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?><p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value->summary);?>
</p><span class='more'><?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
 &#8594;</span><?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?><p><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value->content);?>
</p><?php }?></section><!-- .news-article //--><?php } ?><!-- news pagination --><?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1) {?><span class='paginate'><?php if ($_smarty_tpl->tpl_vars['pagenumber']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value<$_smarty_tpl->tpl_vars['pagecount']->value) {?><?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
<?php }?></span><?php }?></article><!-- .news-summary //--><?php }} ?>
