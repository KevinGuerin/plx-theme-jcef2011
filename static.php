<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main">

		<article role="article">
			
				<header>
					<h1><?php $plxShow->staticTitle(); ?></h1>
				</header>
				
				<section>
					<?php $plxShow->staticContent(); ?>
				</section>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
