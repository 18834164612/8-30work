<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 17:34:05
  from 'D:\software\wampserver\www\server\mvc\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4be30d9300e8_13528981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8924973b4ec16dddb844d05c41ffd0ce244a7d03' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc\\application\\template\\admin\\showList.html',
      1 => 1598808831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4be30d9300e8_13528981 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <table class="table table-border">
            <tr>
                <th>所属分类</th>
                <th>标题</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

                </td>
                <td>
                    <a href="/server/mvc/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                    <a href="/server/mvc/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body>
</html><?php }
}
