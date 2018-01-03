<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main" id="art-single">

		<article role="article">
			
			<header>
				<h1><?php $plxShow->artTitle(''); ?></h1>

				<p class="addthis_toolbox">
					<span>Partager cette page sur :</span>
					<a class="addthis_button_twitter" title="Partager cette page sur Twitter"><img src="<?php $plxShow->template(); ?>/img/twitter.png" title="Twitter" width="24px" height="24px"/></a>
					<a class="addthis_button_viadeo" title="Partager cette page sur Viadeo"><img src="<?php $plxShow->template(); ?>/img/viadeo.png" title="Viadeo" width="24px" height="24px"/></a>
					<a class="addthis_button_facebook" title="Partager cette page sur FaceBook"><img src="<?php $plxShow->template(); ?>/img/fb.png" title="Facebook" width="24px" height="24px"/></a>
					<a class="addthis_button_rss" title="Abonnez-vous au fil RSS"><img src="<?php $plxShow->template(); ?>/img/rss.png" title="RSS" width="24px" height="24px"/></a>
				</p>
			</header>
				
			<section class="art-content">
				<img class="img-art" src="<?php $plxShow->racine(); ?>data/images/<?php echo $plxShow->catName(); ?>/<?php echo $plxShow->artId(); ?>.jpg" />
				<?php $plxShow->artContent(); ?>
				<p class="clear"></p>
			</section>
			
			<footer>
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			</footer>
	
		</article>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>

