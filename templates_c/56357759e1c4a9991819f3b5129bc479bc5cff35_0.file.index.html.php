<?php
/* Smarty version 3.1.30, created on 2018-06-23 15:09:33
  from "C:\xampp\htdocs\senforage\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2e468d9fe097_09566601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56357759e1c4a9991819f3b5129bc479bc5cff35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\accueil\\index.html',
      1 => 1529759369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2e468d9fe097_09566601 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>page d'accueil</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			 function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			 }

			<?php echo '</script'; ?>
>
		
    <style>
        .cd{
            /*background = "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/13.jpg";*/
            background-repeat: no-repeat;
           /* background-size: 1200px 125px;*/
            /*left: 10000px;
            right: 900px;*/
        }
        .r{
            background: paleturquoise;
            background-color:#46b8da;
            text-decoration-color:#46b8da;
            text-align: center;

        }
    </style>
	</head>
	<body onload="load_design()" background="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/13.jpg"  class ="cd"  >
		<div class="nav navbar  navbar-fixed-top">
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
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		

+		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
			<div class="panel panel-info">
				<div class="panel-heading r ">BIENVENUE DANS SENFORAGE</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
