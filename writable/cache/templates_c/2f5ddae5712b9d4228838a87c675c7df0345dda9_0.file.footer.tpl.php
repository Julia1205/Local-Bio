<?php
/* Smarty version 4.1.0, created on 2022-03-01 09:50:52
  from 'C:\wamp64\www\Local-Bio\app\Views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621e40dc2bfbb7_08385990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5ddae5712b9d4228838a87c675c7df0345dda9' => 
    array (
      0 => 'C:\\wamp64\\www\\Local-Bio\\app\\Views\\footer.tpl',
      1 => 1646149851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621e40dc2bfbb7_08385990 (Smarty_Internal_Template $_smarty_tpl) {
?>    <!--FOOTER-->
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

<!-- JavaScript Bundle with Popper -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php if (((isset($_SESSION['user_id'])))) {?>
	<?php } else { ?>
	<?php echo '<script'; ?>
>function openForm() {
    document.getElementById("popupForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("popupForm").style.display = "none";
  }

function createAccount() {
    window.open('inscription.html');

}<?php echo '</script'; ?>
>
	<?php }?>

</html><?php }
}
