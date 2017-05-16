<?php /* Smarty version 3.1.27, created on 2017-05-16 19:57:17
         compiled from "/var/www/newsletter/main/View/templates/tema01/importarContato.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1858368758591b83cdeb26b9_84840345%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121eeccf59b49315b954e76e05c267491002d7f6' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/importarContato.tpl',
      1 => 1494132664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858368758591b83cdeb26b9_84840345',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
    'json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b83ce0306a1_24420397',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b83ce0306a1_24420397')) {
function content_591b83ce0306a1_24420397 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1858368758591b83cdeb26b9_84840345';
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
                            Importar
                        </li>
                    </ol>
                </section>
                <section class="content">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-md-6 text-left"><h3 class="box-title">Importar Contatos</h3></div>
                                </div>
                                <div class="box-body">

                                    <form id="formulario" role="form" class="submit" action="/newsletter/main/index.php?c=contato&m=importarJSON" >                                    
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputJson">JSON</label>
                                                        <textarea readonly="true" rows="15" class="form-control" id="inputJson" name="json" placeholder="Cole o json de contatos" required="true" ><?php echo $_smarty_tpl->tpl_vars['json']->value;?>
</textarea>
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
 type="text/javascript" src="resource/importarContato.js" ><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
?>