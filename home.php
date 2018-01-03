<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main">

		<article role="article">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			
			<header>
				<h1><?php $plxShow->artTitle('link'); ?></h1>
				<ul>
					<li><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?></li>
					<li>le <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></li>
				</ul>
			</header>
			
			<section>
				<?php $plxShow->artChapo(); ?>
			</section>
			
			<footer>
				<ul>
					<li><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></li>
					<li><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></li>
					<li><?php $plxShow->artNbCom(); ?></li>
				</ul>
			</footer>
			
			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
