<?php
/* Smarty version 3.1.30, created on 2018-06-10 16:53:08
  from "C:\xampp\htdocs\senforage\view\client\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d3b54a43f65_58752970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8659ef063cee9fc2aab4d4dbb38febca3df1e336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\senforage\\view\\client\\liste.html',
      1 => 1528642385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d3b54a43f65_58752970 (Smarty_Internal_Template $_smarty_tpl) {
?>
    ²²<html>
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
public/image/11.jpg">
    <div class="nav navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav  r">
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
					<?php if (isset($_smarty_tpl->tpl_vars['clients']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['clients']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Nom Famille</th>
									<th>Nom Chef de Village</th>
                                    <th>Nom du Village</th>
                                    <th>Adress</th>
                                    <th>Numero de Telephone</th>
									<th>Action</th>
									<th>Action</th>
                                    <th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['client']->value['nomFamille'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['client']->value['nomChef'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['client']->value['nomVillage'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['client']->value['numTel'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
client/delete/<?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
client/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
">Editer</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
abonnement/add?idC=<?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
">Abonner</a></td>
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
client/add">Ajout d'un Client</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
