<?php /* Smarty version 3.1.27, created on 2017-05-16 20:22:53
         compiled from "/var/www/newsletter/main/View/templates/tema01/novoAssinatura.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1830136648591b89cdbaa505_86864649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c175ec45de2dd1ebeb55fc3244d3e21da7d5474e' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/novoAssinatura.tpl',
      1 => 1494132682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830136648591b89cdbaa505_86864649',
  'variables' => 
  array (
    'titulo' => 0,
    'subtitulo' => 0,
    'assinatura' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591b89cdbd3128_48868236',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591b89cdbd3128_48868236')) {
function content_591b89cdbd3128_48868236 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1830136648591b89cdbaa505_86864649';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <link rel="stylesheet" href="plugins/summernote/dist/summernote.css"/>
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
                        <li>
                            Assinatura
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-md-6 text-left"><h3 class="box-title">Assinatura</h3></div>
                                </div>
                                <div class="box-body">

                                    <form id="formulario" role="form" class="submit" action="/newsletter/main/index.php?c=assinatura&m=salvar" >                                    
                                        <div class="box-body">

                                            <?php if (isset($_smarty_tpl->tpl_vars['assinatura']->value)) {?>
                                                <input id="id" type="hidden" class="form-control" id="codigo" name="assinatura_id" value="<?php echo $_smarty_tpl->tpl_vars['assinatura']->value->getId();?>
">
                                            <?php }?> 

                                            <div class="row">
                                                <div class="col-md-12"><div id="summernote" ><?php if (isset($_smarty_tpl->tpl_vars['assinatura']->value)) {
echo $_smarty_tpl->tpl_vars['assinatura']->value->getHtmlAssinatura();
}?></div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-flat btn-primary">Salvar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="overlay">
                                <i class="fa fa-refresh fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"><?php echo '</script'; ?>
> 
    <?php echo $_smarty_tpl->getSubTemplate ("default/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo '<script'; ?>
 src="plugins/summernote/dist/summernote.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/summernote/dist/lang/summernote-pt-BR.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugins/summernote/dist/summernote-ext-template.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="resource/novoAssinatura.js" ><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>