<?php
/* Smarty version 3.1.30, created on 2018-06-10 16:58:44
  from "C:\xampp\htdocs\senforage\view\abonnement\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d3ca41189d2_60930349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81ce0cc43089218ac319472a5d3b83695edbea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\abonnement\\add.html',
      1 => 1528642714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d3ca41189d2_60930349 (Smarty_Internal_Template $_smarty_tpl) {
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
public/image/6.jpg">
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
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
abonnement/add">
                        <div class="form-group">
                            <?php if (isset($_GET['idC'])) {?>
                            <label class="control-label" >Identifinat Client:</label>
                            <input readonly  class="form-control" type="text" name="idC" id="idC" value="<?php echo $_GET['idC'];?>
" />
                            <?php }?>
                        </div>
						<div class="form-group">
							<label class="control-label">Date de l'Abonnement</label>
							<input class="form-control" type="date" name="dateA" id="dateA"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Texte d'Abonnement</label>
                            <input class="form-control" type="text" name="texteA" id="texteA"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Compteur</label>
                            <input class="form-control" type="text" name="idCompt" id="idCompt"/>
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
