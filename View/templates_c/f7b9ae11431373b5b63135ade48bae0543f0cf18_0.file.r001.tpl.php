<?php /* Smarty version 3.1.27, created on 2017-05-16 20:28:22
         compiled from "/var/www/newsletter/main/View/templates/tema01/relatorio/r001.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:611934021591b8b16e36f77_78172813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b9ae11431373b5b63135ade48bae0543f0cf18' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/relatorio/r001.tpl',
      1 => 1494977284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611934021591b8b16e36f77_78172813',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b8b16e703c2_39411345',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b8b16e703c2_39411345')) {
function content_591b8b16e703c2_39411345 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '611934021591b8b16e36f77_78172813';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
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
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="dataInicial">Data Inicial:</label>
                                                <input type="text" class="form-control data" id="dataInicial" placeholder="Informe a data inicial" required="true" >
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="dataFinal">Data Final:</label>
                                                <input type="text" class="form-control data" id="dataFinal" placeholder="Informe a data final" required="true" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button type="button" id="btnGerar" class="btn btn-flat btn-primary">Gerar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row linha-detalhado hidden">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Relatório Detalhado</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 conteudo-detalhado">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row linha-quantitativo hidden">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Relatório Quantitativo</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12 conteudo-quantitativo">
                                        </div>
                                    </div>
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
 src="plugins/datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="resource/r001.js" ><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>