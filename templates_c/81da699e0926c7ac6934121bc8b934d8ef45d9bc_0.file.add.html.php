<?php
/* Smarty version 3.1.30, created on 2018-06-10 16:49:48
  from "C:\xampp\htdocs\senforage\view\client\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d3a8cdc5399_02490371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81da699e0926c7ac6934121bc8b934d8ef45d9bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\client\\add.html',
      1 => 1528642180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d3a8cdc5399_02490371 (Smarty_Internal_Template $_smarty_tpl) {
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
                  background-color:#46b8da;
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
public/image/6.jpg">
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav r " >
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
				<div class="panel-heading r ">BIENVENUE DANS SENFORAGE</div>
				<div class="panel-body cd">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
client/add">
						<div class="form-group">
							<label class="control-label">Nom de Famille</label>
							<input class="form-control" type="text" name="nomFamille" id="nomFamille"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom du Chef de Village</label>
							<input class="form-control" type="text" name="nomChef" id="nomChef"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Nom du Village</label>
                            <input class="form-control" type="text" name="nomVillage" id="nomVillage"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Adress</label>
                            <input class="form-control" type="text" name="adress" id="adress"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Numero de Telephone</label>
                            <input class="form-control" type="number" name="numTel" id="numTel"/>
                        </div>


                        <div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Valider"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
client/liste">Retour a la liste  </a>
			</div>
		</div>
	</body>
</html><?php }
}
