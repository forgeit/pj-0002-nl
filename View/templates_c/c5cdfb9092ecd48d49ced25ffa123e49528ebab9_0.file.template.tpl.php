<?php /* Smarty version 3.1.27, created on 2017-05-16 20:22:52
         compiled from "/var/www/newsletter/main/View/templates/tema01/template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:432384163591b89cc1656f6_56814926%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5cdfb9092ecd48d49ced25ffa123e49528ebab9' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/template.tpl',
      1 => 1494974112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '432384163591b89cc1656f6_56814926',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b89cc18bf38_63845469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b89cc18bf38_63845469')) {
function content_591b89cc18bf38_63845469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '432384163591b89cc1656f6_56814926';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.min.js"/>
        <link rel="stylesheet" href="plugins/datatables/extensions/Responsive/css/dataTables.responsive.css"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ("default/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("default/aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                        <small><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            Template
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-md-6 text-left"><h3 class="box-title">Lista de Templates</h3></div>
                                    <div class="col-md-6 text-right">
                                        <a class="btn btn-flat btn-primary" href="/newsletter/main/index.php?c=template&m=novo">Novo</a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table class="table table-striped tabela-acoes table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="tabela">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%;">Código</th>
                                                <th>Título</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("default/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="plugins/datatables/jquery.dataTables.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="plugins/datatables/dataTables.bootstrap.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="resource/template.js" ><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>