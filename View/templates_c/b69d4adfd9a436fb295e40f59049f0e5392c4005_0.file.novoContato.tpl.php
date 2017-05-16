<?php /* Smarty version 3.1.27, created on 2017-05-16 19:53:16
         compiled from "/var/www/newsletter/main/View/templates/tema01/novoContato.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:178071415591b82dcd4fa16_63026767%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69d4adfd9a436fb295e40f59049f0e5392c4005' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/novoContato.tpl',
      1 => 1494132707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178071415591b82dcd4fa16_63026767',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
    'contato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b82dce1f099_33401959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b82dce1f099_33401959')) {
function content_591b82dce1f099_33401959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '178071415591b82dcd4fa16_63026767';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
                            <a href="/newsletter/main/index.php?c=contato&m=lista">Contato</a>
                        </li>
                        <li>
                            Novo
                        </li>
                    </ol>
                </section>
                <section class="content">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-md-6 text-left"><h3 class="box-title">Novo Contato</h3></div>
                                </div>
                                <div class="box-body">

                                    <form id="formulario" role="form" class="submit" action="/newsletter/main/index.php?c=contato&m=salvar" >                                    
                                        <div class="box-body">
                                            
                                            <?php if (isset($_smarty_tpl->tpl_vars['contato']->value)) {?>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="codigo">Código</label>
                                                        <input id="id" type="text" readonly="true" class="form-control" id="codigo" name="contato_id" value="<?php echo $_smarty_tpl->tpl_vars['contato']->value->getId();?>
">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?> 
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="email">E-mail</label>
                                                        <input type="email" class="form-control" id="email" name="contato_email" placeholder="Informe um e-mail" <?php if (isset($_smarty_tpl->tpl_vars['contato']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['contato']->value->getEmail();?>
"<?php }?> required="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-flat btn-primary">Salvar</button>
                                        </div>
                                    </form>

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
 type="text/javascript" src="resource/novoContato.js" ><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>