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
								<li class="LienFooter"><a href="{base_url('index.php/Pages/accueil')}">Accueil</a></li>
								<li class="LienFooter"><a href="{base_url('index.php/shop/boutique')}">Boutique</a></li>
								<li class="LienFooter"><a href="{base_url('index.php/Pages/about')}">A propos</a></li>
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
								<img src="{base_url('assets/img/potager.jpg')}" alt="potager" class="potagerPhoto"></img>
								<img src="{base_url('assets/img/potager2.jpg')}" alt="potager" class="potagerPhoto"></img>
								<img src="{base_url('assets/img/potager3.jpg')}" alt="potager" class="potagerPhoto"></img>
								<img src="{base_url('assets/img/potager4.jpg')}" alt="potager" class="potagerPhoto"></img>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</body>
{block name=js}
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

{/block}
</html>