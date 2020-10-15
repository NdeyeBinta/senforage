<?php
/* Smarty version 3.1.30, created on 2018-06-11 15:16:22
  from "C:\xampp\htdocs\senforage\view\compteur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1e7626777577_59576878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa015821eacb24499a4b42e4fb630ac9602ef1b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\compteur\\add.html',
      1 => 1528722978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1e7626777577_59576878 (Smarty_Internal_Template $_smarty_tpl) {
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
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
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
				<div class="panel-heading">BIENVENUE DANS SENFORAGE</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/add">
                        <div class="form-group">
                            <?php if (isset($_GET['idCompt'])) {?>
                            <label class="control-label" >Numero Compteur:</label>
                            <input readonly  class="form-control" type="text" name="idCompt" id="idCompt" value="<?php echo $_GET['idCompt'];?>
" />
                            <?php }?>
                        </div>
						<div class="form-group">
							<label class="control-label">Consommation en Lettre</label>
							<input class="form-control" type="consL" name="consL" id="consL"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Consommation en Chiffre</label>
                            <input readonly  class="form-control" type="text" name="consC" id="consC" value="0" />
                        </div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="Confirmer" value="Confirmer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/liste">Retour a la liste  </a>
			</div>
		</div>
	</body>
</html><?php }
}
