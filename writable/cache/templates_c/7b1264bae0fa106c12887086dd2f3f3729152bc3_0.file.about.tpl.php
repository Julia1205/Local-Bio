<?php
/* Smarty version 4.1.0, created on 2022-02-16 05:52:16
  from 'C:\wamp64\www\Local-Bio\app\Views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620ce570d3a239_29083491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1264bae0fa106c12887086dd2f3f3729152bc3' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\about.tpl',
      1 => 1645002326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620ce570d3a239_29083491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1717232356620ce570d33c64_79088363', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1387357870620ce570d36b85_21221915', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_1717232356620ce570d33c64_79088363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1717232356620ce570d33c64_79088363',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/about.css');?>
"/>
<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_1387357870620ce570d36b85_21221915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1387357870620ce570d36b85_21221915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--ACCUEIL-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ColonneGauche">
                    <div class="BoxColonneGauche">
                        <div class="OrangleCercle">
                            <i class="fas fa-undo IconBoxGauche"></i>
                        </div>
                        <h3 class="TitleBoxGauche">Politique de retour</h3>
                        <p class="TextBoxGauche">Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent
                            l'agriculture biologique.
                        </p>
                    </div>
                    <div class="BoxColonneGauche">
                        <div class="OrangleCercle">
                            <i class="fas fa-leaf IconBoxGauche"></i>
                        </div>
                        <h3 class="TitleBoxGauche">100% frais</h3>
                        <p class="TextBoxGauche">Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent
                            l'agriculture biologique.
                        </p>
                    </div>
                    <div class="BoxColonneGauche">
                        <div class="OrangleCercle">
                            <i class="fas fa-headset IconBoxGauche"></i>
                        </div>
                        <h3 class="TitleBoxGauche">Assistance 24h/24 et 7j/7</h3>
                        <p class="TextBoxGauche">Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent
                            l'agriculture biologique.
                        </p>
                    </div>
                    <div class="BoxColonneGauche">
                        <div class="OrangleCercle">
                            <i class="fas fa-money-check IconBoxGauche"></i>
                        </div>
                        <h3 class="TitleBoxGauche">Paiement sécurisé</h3>
                        <p class="TextBoxGauche">Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent
                            l'agriculture biologique.
                        </p>
                    </div>
                </div>
                <div class="ColonneDroite">
                    <h6 class="TitleGreenh6"> ~ Pourquoi nous choisir ? ~</h6>
                    <h3 class="Titleh3">Vous pouvez-nous faire confiance, on vous garantie une transaction sécurisé.</h3>
                    <p class="TextColonneDroite">Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent
                        l'agriculture biologique parce
                        qu'ils y croient et nous aussi. Nous sommes conscients des kilomètres aériens et de notre
                        empreinte carbone, donc une grande partie de nos produits proviennent d'Égypte.
                        Organic Foods and Café est une entreprise familiale qui gère des supermarchés et des cafés bio
                        vendant des aliments frais biologiques et biodynamiques</p>
                </div>
            </div>
        </div>
    </div>
    <!--FIN ACCUEIL-->
    <!--MEMBRE EQUIPE-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 MemberBox">
                <h6 class="TitleGreenh6-2"> ~ Membre de l'équipe ~</h6>
                <h3 class="Titleh3-2">Une équipe de passioné pour des clients satisfaits.</h3>
            <div class="MemberCarteBox">
                <div class="col-lg-offset-3 col-lg-2 MemberCarte">
                    <div class="CerclePhoto">
                        <img src="<?php echo base_url('assets/img/author6-176x176.png');?>
" alt="Etienne" class="ProfilePhoto">
                    </div>
                    <div class="FeuilleEtPrénom">
                        <div class="BoxPrénom">
                            <p class="PrénomMember">Etienne</p>
                        </div>                   
                    </div>
                        <div class="TextMemberBox">
                            <p>Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent l'agriculture biologique.</p>
                        </div>
                </div>
                <div class="col-lg-2 MemberCarte">
                    <div class="col-lg-offset-3 col-lg-2 MemberCarte">
                        <div class="CerclePhoto">
                            <img src="<?php echo base_url('assets/img/author2-176x176.png');?>
" alt="Etienne" class="ProfilePhoto">
                        </div>
                        <div class="FeuilleEtPrénom">
                            <div class="BoxPrénom">
                                <p class="PrénomMember">Léo</p>
                            </div>
                        </div>
                            <div class="TextMemberBox">
                                <p>Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent l'agriculture biologique.</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-2 MemberCarte">
                    <div class="col-lg-offset-3 col-lg-2 MemberCarte">
                        <div class="CerclePhoto">
                            <img src="<?php echo base_url('assets/img/author3-176x176.png');?>
" alt="Etienne" class="ProfilePhoto">
                        </div>
                        <div class="FeuilleEtPrénom">
                            <div class="BoxPrénom">
                                <p class="PrénomMember">Lola</p>
                            </div>
                        </div>
                            <div class="TextMemberBox">
                                <p>Achats auprès d'agriculteurs familiaux sélectionnés qui pratiquent l'agriculture biologique.</p>
                            </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <!--FIN MEMBRE EQUIPE-->

<?php
}
}
/* {/block "content"} */
}
