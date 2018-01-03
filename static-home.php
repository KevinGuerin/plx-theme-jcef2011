<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main">
		
		<aside role="secondary">
			
			<p class="logo"><img src="./data/images/logo/logo.jpg" alt="JCE <?php $plxShow->mainTitle(''); ?>" /></p>
			
			
				<div class="about-home">
				<?php $plxShow->lastArtList($format='					 
											<h1>#art_title</h1>
                                             <p>#art_chapo <a href="#art_url" title="#art_title">En savoir plus</a></p>								
					     ',$max=1,$cat_id='6',$ending=''); ?>	
				
			</div>
			
		</aside>

		<article role="article">
				
				<section class="last-actu">
					<h1>A la une</h1>
						<div class="art-content chapo">
					     <?php $plxShow->lastArtList($format='					   
                                             <h2><a href="#art_url" title="#art_title">#art_title</a></h2>
					     <p class="last-info">#art_author - #art_date</p> 
                                             <p>#art_chapo</p>					
					     ',$max=1,$cat_id='1',$ending=''); ?>	
						</div>
				</section>
				
				<section class="last-actions">
					<h1>Nos actions</h1>
						<div class="art-content chapo">
							<ul id="mycarousel-action" class="jcarousel-skin-tango">
							<?php $plxShow->lastArtList($format='
								<li><a href="#art_url" title="#art_title"><img src="./data/images/actions/#art_id.jpg" height=80px /></a></li>
							',$max=25,$cat_id='2',$ending=''); ?>
							</ul>
						</div>	
				</section>
				
				<section class="coming-soon">
					<h1>A venir</h1>
						<div class="art-content chapo">
							<div class="featured-home">	
								<?php $plxShow->lastArtList($format='
									<p><a href="#art_url" title="#art_title"><img src="./data/images/featured/#art_id.jpg" /></a></p>
									<p><a href="#art_url" title="#art_title">#art_title</a></p>
									<p>#art_chapo</p>					
								',$max=1,$cat_id='7',$ending=''); ?>
							</div>							
							<ul>
							<?php $plxShow->lastArtList($format='
									<li><a href="#art_url" title="#art_title">#art_title</a></li>				
							',$max=6,$cat_id='3',$ending=''); ?>
							</ul>	
						</div>	
				</section>
				
		</article>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
