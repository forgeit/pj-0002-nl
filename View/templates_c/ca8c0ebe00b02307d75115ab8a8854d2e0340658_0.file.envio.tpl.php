<?php /* Smarty version 3.1.27, created on 2017-05-16 19:50:13
         compiled from "/var/www/newsletter/main/View/templates/tema01/envio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1010098211591b822564d359_85849853%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca8c0ebe00b02307d75115ab8a8854d2e0340658' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/envio.tpl',
      1 => 1494974997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1010098211591b822564d359_85849853',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
    'template_ids' => 0,
    'template_id' => 0,
    'template_titulos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b822567b6a3_18598374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b822567b6a3_18598374')) {
function content_591b822567b6a3_18598374 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/newsletter/main/vendor/smarty/smarty/libs/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '1010098211591b822564d359_85849853';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.min.js"/>
        <link rel="stylesheet" href="plugins/datatables/extensions/Responsive/css/dataTables.responsive.css"/>
        <link rel="stylesheet" href="plugins/iCheck/all.css">
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
                            Envio
                        </li>
                    </ol>
                </section>
                <section class="content">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-md-6 text-left"><h3 class="box-title">Lista de Templates e Contatos</h3></div>
                                    <div class="col-md-6 text-right">Total Selecionado: <span id="totalSelecionado">0</span></div>
                                </div>


                                <?php if (count($_smarty_tpl->tpl_vars['template_ids']->value) != 0) {?>
                                <form id="formulario" role="form" class="submit" action="/newsletter/main/index.php?c=envio&m=enviar" >                                    
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="templates">Template:</label>
                                                    <select name="template_id" id="templates" class="form-control">
                                                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['template_ids']->value,'selected'=>$_smarty_tpl->tpl_vars['template_id']->value,'output'=>$_smarty_tpl->tpl_vars['template_titulos']->value),$_smarty_tpl);?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-striped tabela-acoes table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="tabela">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 15%;">Código</th>
                                                            <th>E-mail</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-flat btn-primary">Enviar E-mails</button>
                                        <button type="button" class="btn btn-flat btn-primary" onclick="marcar()">Marcar/Desmarcar Todos</button>
                                    </div>
                                </form>
                                <?php } else { ?>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Para enviar os e-mails para sua lista de contatos é necessário criar um novo modelo.</p>
                                                <p>Para criar um novo modelo clique <a href="/newsletter/main/index.php?c=template&m=lista">aqui!</a></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
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
 src="plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="resource/envio.js" ><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>