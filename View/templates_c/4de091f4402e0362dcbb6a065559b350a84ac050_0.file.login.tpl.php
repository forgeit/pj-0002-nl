<?php /* Smarty version 3.1.27, created on 2017-05-08 21:45:47
         compiled from "/var/www/newsletter/main/View/templates/tema01/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4083706805911113b480f68_71144863%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de091f4402e0362dcbb6a065559b350a84ac050' => 
    array (
      0 => '/var/www/newsletter/main/View/templates/tema01/login.tpl',
      1 => 1492556498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4083706805911113b480f68_71144863',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5911113b497157_63071612',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5911113b497157_63071612')) {
function content_5911113b497157_63071612 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4083706805911113b480f68_71144863';
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>NewsLetter - Forge IT Solutions</title>
        <?php echo $_smarty_tpl->getSubTemplate ("default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <link rel="stylesheet" href="resource/login.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap">
                        <p class="form-title">
                            <img src="resource/logo.png" style="width: 80px;"/><br/>
                            NEWSLETTER
                        </p>
                        <form class="login" >
                            <input type="text" name="login" placeholder="Informe o login" id="input_login" required="true"/>
                            <input type="password" name="senha" placeholder="Informe a senha" id="input_password" required="true"/>
                            <input type="button" value="Entrar" class="btn btn-danger btn-sm" id="login"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("default/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="resource/login.js" ><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>