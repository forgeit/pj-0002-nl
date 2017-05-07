<?php /* Smarty version 3.1.27, created on 2017-05-07 01:45:47
         compiled from "/var/www/newsletter/main/View/templates/tema01/default/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:275322579590ea67bb94ff5_07986052%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee81d304cb3a5580cf3881b31197029ff4eabfac' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/default/navbar.tpl',
      1 => 1492556498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275322579590ea67bb94ff5_07986052',
  'variables' => 
  array (
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_590ea67bb9bb47_31905193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590ea67bb9bb47_31905193')) {
function content_590ea67bb9bb47_31905193 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '275322579590ea67bb94ff5_07986052';
?>
<header class="main-header">
    <a href="/" class="logo">
        <span class="logo-mini"><b>N</b>L</span>
        <span class="logo-lg"><b>NEWS</b>Letter</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNmCliente();?>
</span>
                    </a>
                </li>
                <li class="dropdown user user-menu">
                    <a href="/newsletter/login/sair" >
                        <span>Sair</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header><?php }
}
?>