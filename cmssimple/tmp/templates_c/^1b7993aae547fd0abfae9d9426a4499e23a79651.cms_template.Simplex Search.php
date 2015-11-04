<?php /* Smarty version Smarty-3.1-DEV, created on 2015-11-02 21:00:06
         compiled from "cms_template:Simplex Search" */ ?>
<?php /*%%SmartyHeaderCode:29503989456381526c2fbf4-30565070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7993aae547fd0abfae9d9426a4499e23a79651' => 
    array (
      0 => 'cms_template:Simplex Search',
      1 => '1446515888',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '29503989456381526c2fbf4-30565070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'startform' => 0,
    'search_actionid' => 0,
    'searchprompt' => 0,
    'searchtext' => 0,
    'hidden' => 0,
    'endform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_56381526c49a75_31725344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56381526c49a75_31725344')) {function content_56381526c49a75_31725344($_smarty_tpl) {?><div class='five-col search noprint' role='search'>
    <?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

        <label for='<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput' class='visuallyhidden'><?php echo $_smarty_tpl->tpl_vars['searchprompt']->value;?>
:</label>
        <input type='search' class='search-input' id='<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput' name='<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput' size='20' maxlength='50' value='' placeholder='<?php echo $_smarty_tpl->tpl_vars['searchtext']->value;?>
' /><i class='icon-search' aria-hidden='true'></i>
        <?php if (isset($_smarty_tpl->tpl_vars['hidden']->value)) {?><?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
<?php }?>
    <?php echo $_smarty_tpl->tpl_vars['endform']->value;?>

</div><?php }} ?>
