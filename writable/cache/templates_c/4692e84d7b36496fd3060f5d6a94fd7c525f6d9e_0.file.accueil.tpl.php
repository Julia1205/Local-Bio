<?php
/* Smarty version 4.1.0, created on 2022-02-16 03:01:10
  from 'C:\wamp64\www\test_local-bio\app\Views\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_620cbd56e2c9a5_10513497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4692e84d7b36496fd3060f5d6a94fd7c525f6d9e' => 
    array (
      0 => 'C:\\wamp64\\www\\test_local-bio\\app\\Views\\accueil.tpl',
      1 => 1645002069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620cbd56e2c9a5_10513497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1688846169620cbd56e0f3f8_34532703', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753566291620cbd56e13484_81184256', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_1688846169620cbd56e0f3f8_34532703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1688846169620cbd56e0f3f8_34532703',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/accueil.css');?>
"/>
<?php
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_753566291620cbd56e13484_81184256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_753566291620cbd56e13484_81184256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--PAGE ACCEUIL-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="BoxTitle">
                        <div class="ContainerAccueil">
                            <h1 class="Title">CHOISISSEZ UN MODE DE VIE PLUS SAIN</h1>
                            <h4 class="TexteTitle">la meilleur marque pour les aliments biologique</h4>
                            <div class="BouttonAchat">
                                <a href="shop.html"><p class="TexteAchat">achetez maintenant</p></a>
                                <div class="CercleFleche">
                                    <img class="FlecheAchat" src="<?php echo base_url('assets/img/fleche.png');?>
" alt="fleche">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 OrangeBoxResponsive">
                    <div class="Orange">
                        <img class="Avocat" src="<?php echo base_url('assets/img/orange.png');?>
">
                    </div>
                    <div class="FontOrange">
                        <img class="FontAvocat" src="<?php echo base_url('assets/img/FontOrange.png');?>
">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img src="<?php echo base_url('assets/img/basilic1.png');?>
" class="basilic1">            
        <img src="<?php echo base_url('assets/img/basilic2.png');?>
" class="basilic2">                       
        <img src="<?php echo base_url('assets/img/basilic3.png');?>
" class="basilic3">                      
        <img src="<?php echo base_url('assets/img/basilic4.png');?>
" class="basilic4">                      
        <img src="<?php echo base_url('assets/img/basilic5.png');?>
" class="basilic5">
    </div>
    <div class="ImageBasPage">
        <img class="FondPage" src="<?php echo base_url('assets/img/slider.png');?>
" alt="slider">
    </div>
    <!--FIN PAGE ACCEUIL-->
    <!--HAUT PAGE 2-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="Box1gauche">
                    <div class="Box1title">
                        <h4>Bénéficiez de 10% de remise sur les légumes</h4>
                        <p class="ParagrapheBox">Achetez notre sélection de légumes frais biologiques à prix
                            réduit.
                            10% de remise sur tous les légumes.</p>
                        <div class="LienBox1">
                            <a class="TexteLienBox1" href="shop.html">achetez maintenant</a>
                        </div>
                    </div>
                    <div class="Box1Image">
                        <img src="<?php echo base_url('assets/img/banner-fixed1.png');?>
" class="LegumeImage2">
                        <img src="<?php echo base_url('assets/img/chou-fleur.png');?>
" class="LegumeImage">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Box2Droite">
                    <div class="Box1title">
                        <h4>Obtenez des fruits frais du jardin</h4>
                        <p class="ParagrapheBox">Achetez notre sélection de légumes frais biologiques à prix
                            réduit.
                            10% de remise sur tous les légumes.</p>
                        <div class="LienBox2">
                            <p class="TexteLienBox2">achetez maintenant</p>
                        </div>
                    </div>
                    <div class="Box1Image">
                        <img src="<?php echo base_url('assets/img/farm_frsh.png');?>
" class="LegumeImage2">
                        <img src="<?php echo base_url('assets/img/baie.png');?>
" class="LegumeImage">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN HAUT PAGE 2-->
    <!--BAS PAGE 2-->
    <div class="container containerPage2">
        <div class="row">
            <div class="col-sm-6">
                <div class="BoxGaucheImage">
                    <img src="<?php echo base_url('assets/img/about-img2.png');?>
" alt="fruitsetlégumes" class="ImageFruitsEtLegume">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="BoxDroiteTexte">
                    <p class="Pvert">~ À propos de nous ~</p>
                    <h2 class="Title2page2">Nous sommes dans une démarche de coopération avec les agriculteurs</h2>
                    <h4 class="Title4page2">Local'Bio est une entreprise familiale fondée en 2004 qui
                        gère des
                        supermarchés biologiques</h4>
                    <p class="Pgris">Bio signifie cultiver notre nourriture, qui doit nous nourrir, sans aides
                        chimiques
                        pendant le processus de croissance telles que les engrais,
                        les pesticides, les fongicides, les herbicides, les larbicides, etc.</p>
                    <div class="BoxBasPage2">
                        <div class="carotte">
                            <div class="Logocarotte">
                                <img src="<?php echo base_url('assets/img/organic-food.png');?>
">
                            </div>
                            <div class="PourquoiBio">
                                <h6 class="TitleBaspage2">Pourquoi Bio ?</h6>
                                <p class="TextBaspage2">Nous faisons de la place aux soins personnels aujourd'hui
                                    avec un
                                    plan.</p>
                            </div>
                        </div>
                        <div class="feuille">
                            <div class="Logofeuille">
                                <img src="<?php echo base_url('assets/img/organic-food2.png');?>
">
                            </div>
                            <div class="PourquoiBio">
                                <h6 class="TitleBaspage2">Produits de spécialité</h6>
                                <p class="TextBaspage2">Nous faisons de la place aux soins personnels aujourd'hui
                                    avec un
                                    plan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN BAS PAGE 2-->
    <div class="SliderTop"></div>
    <div class="FondPage3">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="BoxTopPage3Title">
                        <p class="Pvert">~ Catégories ~</p>
                        <h4 class="Title2page2">Les différentes catégories sont soigneusement sélectionnées par les producteurs</h4>
                    </div>
                </div>
            </div>
            <div class="row ProduitSélectionBox">
                <div class="col-lg-offset-2 col-lg-2">
                    <div class="SliderProduit1">
                        <div class="BorderColor1">
                            <div class="BoxLettre">
                                <span class="lettre">L</span>
                                <img src="<?php echo base_url('assets/img/legume.png');?>
" alt="" class="PngSlider">
                            </div>
                            <h6 class="TitleBaspage2">Les légumes</h6>
                            <p class="TextBaspage2">achats auprès des agriculteurs familiaux sélectionnés qui
                                pratique
                                l'agriculture biologique </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="SliderProduit1">
                        <div class="BorderColor2">
                            <div class="BoxLettre">
                                <span class="lettre2">F</span>
                                <img src="<?php echo base_url('assets/img/OrangeBox.png');?>
" alt="" class="PngSlider">
                            </div>
                            <h6 class="TitleBaspage2">Les fruits</h6>
                            <p class="TextBaspage2">achats auprès des agriculteurs familiaux sélectionnés qui
                                pratique
                                l'agriculture biologique </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="SliderProduit1">
                        <div class="BorderColor4">
                            <div class="BoxLettre">
                                <span class="lettre4">E</span>
                                <img src="<?php echo base_url('assets/img/poivres.png');?>
" alt="" class="PngSlider">
                            </div>
                            <h6 class="TitleBaspage2">Les épices</h6>
                            <p class="TextBaspage2">achats auprès des agriculteurs familiaux sélectionnés qui
                                pratique
                                l'agriculture biologique </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN PAGE3-->

<?php
}
}
/* {/block "content"} */
}
