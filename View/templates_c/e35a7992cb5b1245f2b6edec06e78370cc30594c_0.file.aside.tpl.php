<?php /* Smarty version 3.1.27, created on 2017-05-16 20:10:57
         compiled from "/var/www/newsletter/main/View/templates/tema01/default/aside.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1848490692591b87014e07f1_18250999%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e35a7992cb5b1245f2b6edec06e78370cc30594c' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/default/aside.tpl',
      1 => 1494131957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848490692591b87014e07f1_18250999',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b87014e5ef4_33840400',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b87014e5ef4_33840400')) {
function content_591b87014e5ef4_33840400 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1848490692591b87014e07f1_18250999';
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li><a href="/newsletter/main/index.php?c=assinatura&m=novo"><i class="fa fa-edit"></i> <span>Assinatura</span></a></li>
            <li><a href="/newsletter/main/index.php?c=contato&m=lista"><i class="fa fa-users"></i> <span>Contatos</span></a></li>
            <li><a href="/newsletter/main/index.php?c=template&m=lista"><i class="fa fa-envelope"></i> <span>Templates</span></a></li>
            <li><a href="/newsletter/main/index.php?c=envio&m=lista"><i class="fa fa-send"></i> <span>Envio</span></a></li>
            <li><a href="/newsletter/main/index.php?c=historico&m=lista"><i class="fa fa-history"></i> <span>Histórico</span></a></li>
            <li><a href="/newsletter/main/index.php?c=relatorio&m=lista"><i class="fa fa-bar-chart"></i> <span>Relatórios</span></a></li>
        </ul>
    </section>
</aside><?php }
}
?>