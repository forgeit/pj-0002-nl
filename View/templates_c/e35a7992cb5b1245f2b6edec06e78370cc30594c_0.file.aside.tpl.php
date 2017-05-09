<?php /* Smarty version 3.1.27, created on 2017-05-08 21:49:25
         compiled from "/var/www/newsletter/main/View/templates/tema01/default/aside.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3359830855911121545f403_58851629%%*/
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
  'nocache_hash' => '3359830855911121545f403_58851629',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59111215463657_07492634',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59111215463657_07492634')) {
function content_59111215463657_07492634 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3359830855911121545f403_58851629';
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