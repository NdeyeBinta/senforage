<?php
/* Smarty version 3.1.30, created on 2018-06-10 17:01:26
  from "C:\xampp\htdocs\senforage\view\abonnement\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d3d46606ce2_66070018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a53e1bd3382427bc617f6fc78e3fff07c33f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\abonnement\\liste.html',
      1 => 1528642882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d3d46606ce2_66070018 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
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
public/image/5.png">
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
					<?php if (isset($_smarty_tpl->tpl_vars['abonnements']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['abonnements']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Date d'Abonnement</th>
                                    <th>Texte d'Abonnement</th>
                                    <th>Identifiant Client</th>
                                    <th>Identifiant Compteur</th>
									<th>Action</th>
									<th>Action</th>
                                    <th>Action</th>
								</tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonnements']->value, 'abonnement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['abonnement']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idA'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['dateA'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['texteA'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idC'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idCompt'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
abonnement/delete/<?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idA'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
abonnement/edit/<?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idA'];?>
">Editer</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/add?idCompt=<?php echo $_smarty_tpl->tpl_vars['abonnement']->value['idCompt'];?>
">Compteur</a></td>
									</tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>

			</div>
		</div>
		
	</body>
</html>
<?php }
}
