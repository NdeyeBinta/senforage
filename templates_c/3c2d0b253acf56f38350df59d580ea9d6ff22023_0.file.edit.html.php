<?php
/* Smarty version 3.1.30, created on 2018-06-10 16:55:48
  from "C:\xampp\htdocs\senforage\view\client\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d3bf4d4bc16_88605332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c2d0b253acf56f38350df59d580ea9d6ff22023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\client\\edit.html',
      1 => 1528642540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d3bf4d4bc16_88605332 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
            .cd{
                background-color:aqua;
            }
            .r{
                background: paleturquoise;
                background-color:#46b8da;
                text-decoration-color:#46b8da;
                text-align: center;


            }
		</style>
	</head>
	<body background="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/10.jpg">
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav r">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
client/liste">Client</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
abonnement/liste">Abonnement</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/liste">Compteur</a></li>
            </ul>
        </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading r">BIENVENUE DANS SENFORAGE</div>
				<div class="panel-body cd">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/update">
						<div class="form-group">
							<label class="control-label">ID du Client</label>
							<input class="form-control" type="text" name="idC" id="idC" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom de Famille</label>
							<input class="form-control" type="text" name="nomFamille" id="nomFamille" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['nomFamille'];?>
 <?php }?>"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Nom du Chef de Village</label>
                            <input class="form-control" type="text" name="nomChef" id="nomChef" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['nomChef'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nom du Village</label>
                            <input class="form-control" type="text" name="nomVillage" id="nomVillage" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['nomVillage'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Adress</label>
                            <input class="form-control" type="text" name="adress" id="adress" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Numero de Telephone</label>
                            <input class="form-control" type="text" name="numTel" id="numTel" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['numTel'];?>
 <?php }?>"/>
                        </div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
