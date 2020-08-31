<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 19:14:26
  from 'D:\software\wampserver\www\server\mvc\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bfa92e8e441_95923145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844979b1620b0f388453a89758f8ef1b38e1b54f' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc\\application\\template\\index\\header.html',
      1 => 1598814865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bfa92e8e441_95923145 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index/index.css">

<ul class="nav">
    <div class="nav-left">
        <span>本页面仅作练习参考，如有侵权，立即删除</span>
        <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
    </div>


<!--nav开始 -->
    <ul class="nav-list">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li>
            <div class="box"></div>
            <a href="/server/mvc/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
            <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
            <div class="more-1">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>

                    <a href="/server/mvc/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                    </a>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<!--nav结束-->
<!--banner开始-->
    <div class="banner">
        <div class="banner-box">
            <a href="javascript:;">
                <div class="smbanner-1">
                    <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101429_89538.png" alt="">
                </div>
                <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101429_52709.jpg" alt="">
            </a>
            <a href="javascript:;">
                <div class="smbanner-2">
                    <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101409_15254.png" alt="">
                </div>
                <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101409_41113.jpg" alt="">
            </a>
            <a href="javascript:;">
                <div class="smbanner-1">
                    <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101355_74519.png" alt="">
                </div>
                <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101354_74297.jpg" alt="">
            </a>
            <a href="javascript:;">
                <img src="http://www.feeleast.com/uploadfile/image/20191029/20191029101429_52709.jpg" alt="">
            </a>
        </div>
        <ul class="banner-btns">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
<!--banner结束-->
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
aniMath.js"><?php echo '</script'; ?>
>


<!--    <ul class="nav-list">-->
<!--        <li>-->
<!--            <div class="box"></div>-->
<!--            <a href="lianxi.html">联系我们</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <div class="box"></div>-->
<!--            <a href="newsone.html">新闻资讯</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <div class="box"></div>-->
<!--            <a href="kehu.html">知名客户</a>-->
<!--        </li>-->
<!--        <li class="list-changping">-->
<!--            <div class="box"></div>-->
<!--            <a href="prodtct.html">产品中心</a>-->
<!--            <div class="more-2">-->
<!--                <a href="javascript:;">MES</a>-->
<!--                <a href="javascript:;">SCADA</a>-->
<!--                <a href="javascript:;">ANTON</a>-->
<!--                <a href="javascript:;">EMS</a>-->
<!--                <a href="javascript:;">计算机视觉系统(CVS)</a>-->
<!--                <a href="javascript:;">机器人智能抓取系统(RIGS)</a>-->
<!--                <a href="javascript:;">质量(生成)追溯系统(QTS)</a>-->
<!--                <a href="javascript:;">自动化控制系统(DCS)</a>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="list-about">-->
<!--            <div class="box"></div>-->
<!--            <a href="jianjie.html">关于丰逸</a>-->
<!--            <div class="more-1">-->
<!--                <a href="jianjie.html">丰逸简介</a>-->
<!--                <a href="wenhua.html">企业文化</a>-->
<!--                <a href="team.html">核心团队</a>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <div class="box"></div>-->
<!--            <a style="color: blue;" href="index.html">网站首页</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>--><?php }
}
