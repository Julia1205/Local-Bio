{extends file="layout.tpl"}


{block name="css" append}
	<link rel="stylesheet" href="{base_url('assets/css/shop.css')}"/>
	<link rel="stylesheet" href="{base_url('assets/css/banniere.css')}"/>
{/block}

{block name="content"}

					
						{foreach from=$products item=objProduct}
							<div class="col-lg-2">
									<div class="BorderBoxGreen">
										<div class="ArticleAchat">
											<img src="{base_url('assets/img')}/{$objProduct->product_img}" alt="{$objProduct->product_name}" class="ImgArticle">
											<span class="TitleArticle">{$objProduct->product_name}</span>
											<span>{$objProduct->product_pu} €</span>
											<button class="BouttonAchatArticle" onclick="window.location.href ='legume.html';" >
												<span class="SpanAchat"><a href='{base_url('index.php/products/productModify')}/{$objProduct->url_name}'>Modifier</a></span>
											</button>
										</div>
									</div>
								</div>			
						{/foreach}
			
{/block}