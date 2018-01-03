<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main">

		<article role="article">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			
			<header>
				<h1><?php $plxShow->artTitle('link'); ?></h1>
				<ul>
					<li><?php $plxShow->artAuthor() ?></li>
					<li class="art-date"> - le <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></li>
				</ul>
			</header>
			
			<section class="art-content chapo">
				<img class="img-art" src="<?php $plxShow->racine(); ?>data/images/<?php echo $plxShow->catName(); ?>/<?php echo $plxShow->artId(); ?>.jpg" />
				<?php $plxShow->artChapo(); ?>
				<p class="clear"></p>
			</section>
			
			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
