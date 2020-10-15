<?php
/* Smarty version 3.1.30, created on 2018-06-10 17:03:05
  from "C:\xampp\htdocs\senforage\view\abonnement\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d3da9d33950_66900870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8611e8657370b28846367be18f28df18a68433df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\abonnement\\edit.html',
      1 => 1528642977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d3da9d33950_66900870 (Smarty_Internal_Template $_smarty_tpl) {
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
                background-color:#ffff00;
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
public/image/7.jpg">
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav r ">
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
Abonnement/update">
						<div class="form-group">
							<label class="control-label">Numero  d' Abonnement</label>
							<input class="form-control" type="text" name="idA" id="idA" value="<?php if (isset($_smarty_tpl->tpl_vars['abonnement']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idA'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Date Abonnement</label>
							<input class="form-control" type="text" name="dateA" id="dateA" value="<?php if (isset($_smarty_tpl->tpl_vars['abonnement']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['abonnement']->value['dateA'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Texte d'Abonnement</label>
							<input class="form-control" type="text" name="texteA" id="texteA" value="<?php if (isset($_smarty_tpl->tpl_vars['abonnement']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['abonnement']->value['texteA'];?>
 <?php }?>"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Identifiant Client </label>
                            <input class="form-control" type="text" name="idC" id="idC" value="<?php if (isset($_smarty_tpl->tpl_vars['abonnement']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idC'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Identifiant Compteur</label>
                            <input class="form-control" type="text" name="idCompt" id="idCompt" value="<?php if (isset($_smarty_tpl->tpl_vars['abonnement']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idCompt'];?>
 <?php }?>"/>
                        </div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
