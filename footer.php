<?php if(!defined('PLX_ROOT')) exit; ?>

	<div class="partners">
		
		<h1>Nos partenaires</h1>
			<div class="art-content chapo">						
				<ul id="mycarousel-partner" class="jcarousel-skin-tango">
					<?php $plxShow->lastArtList($format='
					<li><a href="#art_url" title="#art_title"><img src="./data/images/partenaires/#art_id.jpg" height=50px /></a></li>					
						',$max=25,$cat_id='5',$ending=''); ?>
				</ul>
			</div>
		
	</div>

	<footer role="contentinfo">
		<p>&copy; Jeune Chambre Économique <?php $plxShow->mainTitle(''); ?>
		
		<span>
			<a href="./index.php?allarchive">Archives</a> - 
			<a class="admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -
			<a class="top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></span>
		<br />Association loi 1901 affiliée à la <a href="http://www.jcef.fr"  target="_blank" title="Jeune Chambre Economique Française">Jeune Chambre Économique Française</a>, reconnue d'utilité publique par décret du 10 juin 1976 et <a href="http://www.jci.cc"  target="_blank" title="Jeune Chambre Internationale">membre JCI</p>
	</footer>
	
	<!-- Javascript -->
	
	<!-- <script src="//code.jquery.com/jquery-latest.js"></script> -->
	<script src="<?php $plxShow->template(); ?>/js/jquery.js"></script>
	<script src="//s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ea4164f5370e3c8&domready=1"></script>
	<script src="<?php $plxShow->template(); ?>/js/jcaroussel.js"></script>
	
	<script>
		jQuery(document).ready(function() {
   			 jQuery('#mycarousel-action').jcarousel({ scroll:3 });
   			 jQuery('#mycarousel-partner').jcarousel({ scroll:3 });
		});
	</script>
	
</body>
</html>
