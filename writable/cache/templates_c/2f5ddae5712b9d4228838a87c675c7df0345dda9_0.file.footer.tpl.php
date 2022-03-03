<?php
/* Smarty version 4.1.0, created on 2022-03-03 11:59:47
  from 'C:\wamp64\www\Local-Bio\app\Views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622102137bb016_52758726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5ddae5712b9d4228838a87c675c7df0345dda9' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\footer.tpl',
      1 => 1646330319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622102137bb016_52758726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!--FOOTER-->
    <section>
        <div class="BoxFooter">
            <div class="BoxImageFooter1"></div>
            <div class="BoxImageFooter2">
                <div class="container">
                    <div class="BoxSubscribe">
                        <div class="subscribe">
                            <span>Abonnez-vous a notre newsletter</span>
                            <div class="newsletter">
                                <input placeholder="entrer votre adresse-email" class="focus-visible-only" id="inputfooter"></input>
                                <a href="subscribe.html/index.html" target="_blank"><button class="abonner">S'abonner</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="BoxLien">
                        <div>
                            <h4 class="TitleFooter">Liens</h4>
                            <li class="LienFooter"><a href="<?php echo base_url('index.php/Pages/accueil');?>
">Accueil</a></li>
                            <li class="LienFooter"><a href="<?php echo base_url('index.php/shop/boutique');?>
">Boutique</a></li>
                            <li class="LienFooter"><a href="<?php echo base_url('index.php/Pages/about');?>
">A propos</a></li>
                        </div>
                        <div>
                            <h4 class="TitleFooter">Informations</h4>
                            <li>48 rue de la promenade, Colmar
                            </li>
                            <li>1-888-452-1505</li>
                            <li>Heures d'ouverture:</li>
                            <li>Lun – Sam : 8h – 17h,
                                Dimanche : FERMÉ
                            </li>
                        </div>
                        <div>
                            <h4 class="TitleFooter">Instagram</h4>
                            <img src="<?php echo base_url('assets/img/potager.jpg');?>
" alt="potager" class="potagerPhoto"></img>
                            <img src="<?php echo base_url('assets/img/potager2.jpg');?>
" alt="potager" class="potagerPhoto"></img>
                            <img src="<?php echo base_url('assets/img/potager3.jpg');?>
" alt="potager" class="potagerPhoto"></img>
                            <img src="<?php echo base_url('assets/img/potager4.jpg');?>
" alt="potager" class="potagerPhoto"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1556096609622102137ba069_96978340', 'js');
?>

</html><?php }
/* {block 'js'} */
class Block_1556096609622102137ba069_96978340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1556096609622102137ba069_96978340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- JavaScript Bundle with Popper -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'js'} */
}
