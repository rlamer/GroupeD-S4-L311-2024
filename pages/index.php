<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content">
		<h1>Mon [ blog ].</h1>
		<p class="major">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur porta tellus, quis auctor ante pulvinar non. Quisque aliquet lacus posuere purus vestibulum, eget rutrum turpis scelerisque.</p>
		<ul class="actions stacked">
			<li><a href="#first" class="button big wide smooth-scroll-middle">Consulter mes articles</a></li>
		</ul>
	</div>
	<div class="image">
		<img src="images/banner.jpg" alt="" />
	</div>
</section>

<?php 
	$_articles = getArticlesFromJson();

	if($_articles && count($_articles)){
		$compteur = 1;
		foreach($_articles as $article){
			$classCss = ($compteur % 2 == 0 ? 'left' : 'right');
			$compteur++;//décommenté cette ligne
			?>
				<section class="spotlight style1 orient-<?php echo $classCss;?>  content-align-left image-position-center onscroll-image-fade-in" id="first">
					<div class="content">
						<h2><?php echo $article['titre'];?></h2>
						<!-- corrigé titre par texte -->
						<p><?php echo $article['texte'];?></p>
						<ul class="actions stacked">
							<li><a href="?page=article&id=<?php echo $article['id'];?>" class="button">Lire la suite</a></li>
						</ul>
					</div>
					<div class="image">
						<!-- correction de nom de variable article -->
						<img src="<?php echo $article['image'];?>" alt="" />
					</div>
				</section>

			<?php
		}
	}
?>