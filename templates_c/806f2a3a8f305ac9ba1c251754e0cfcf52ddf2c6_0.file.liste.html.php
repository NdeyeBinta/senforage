<?php
/* Smarty version 3.1.30, created on 2018-06-10 17:47:01
  from "C:\xampp\htdocs\senforage\view\compteur\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d47f5568299_02406521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806f2a3a8f305ac9ba1c251754e0cfcf52ddf2c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\compteur\\liste.html',
      1 => 1528645566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d47f5568299_02406521 (Smarty_Internal_Template $_smarty_tpl) {
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
		</style>
	</head>
	<body>
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
					<?php if (isset($_smarty_tpl->tpl_vars['compteurs']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['compteurs']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Numero</th>
									<th>Consommation en Lettre</th>
                                    <th>Consommation en Chiffre</th>
                                    <th>Consommation Reel</th>
									<th>Action</th>
									<th>Action</th>
                                    <th>Action</th>
								</tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compteurs']->value, 'compteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compteur']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompt'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['consL'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['consC'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['compteur']->value['consR'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/delete/<?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompt'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/edit/<?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompt'];?>
">Editer</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compteur/add?idCompt=<?php echo $_smarty_tpl->tpl_vars['Compteur']->value['idCompt'];?>
">Facture</a></td>
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
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
consommation/add">Ajout d'une Consommation</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
