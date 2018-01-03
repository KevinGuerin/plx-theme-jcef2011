<?php 
	if(!defined('PLX_ROOT')) exit;
	
	function coupe_chaine($chapo, $content, $max) { 
	if ($chapo != null) {
		$chaine_entrer = $chapo;
	} else {
		$chaine_entrer = $content;
	}

	$chaine = filter_var($chaine_entrer, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	if(strlen($chaine) >= $max) {
		$chaine = substr($chaine, 0, $max); 
		$espace = strrpos($chaine, " "); 
		$chaine = substr($chaine, 0, $espace)."...";
	} 
	return $chaine; 
}

function meta_name() {
	global $plxShow;

	switch($plxShow->mode()) {
		case 'home': 
			$var_return = $plxShow->subTitle();
		break;
		case 'article':
			$chapo = strip_tags($plxShow->plxMotor->plxRecord_arts->f('chapo'));
			$var_return = coupe_chaine($chapo,$plxShow->subTitle(), 100);
		break;
		case 'static': 
			$var_return = $plxShow->subTitle();
		break;
        	case 'categorie': 
			$var_return = $plxShow->subTitle();
		break;
        	default: 
			$var_return = $plxShow->subTitle();
		break;
	}
	return $var_return;
}

?>
<!DOCTYPE html>

<!--[if lt IE 7]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>" class="ie6 ie"><![endif]-->
<!--[if IE 7]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>" class="ie7 ie"><![endif]-->
<!--[if IE 8]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>" class="ie8 ie"><![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> 

	<title>JCE <?php $plxShow->pageTitle(); ?></title>

	<meta charset=<?php $plxShow->charset(); ?>" />
	<meta name="description" content="<?php echo meta_name();?>" />
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	
	<link rel="shortcut icon" href="<?php $plxShow->template(); ?>/img/favicon.ico" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css" />
	<?php $plxShow->templateCss() ?>
	
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>

<body role="document" id="top" class="static<?php echo $plxShow->staticId(); ?> cat<?php echo $plxShow->catId(); ?>">

	<header role="banner">

		<h1><a href="<?php $plxShow->racine(); ?>" title="JCEF <?php $plxShow->mainTitle(''); ?>"><img src="<?php $plxShow->template(); ?>/img/logo.png" alt="JCEF <?php $plxShow->mainTitle(''); ?>" /></a></h1>
		<h2><?php $plxShow->mainTitle('link'); ?></h2>

		<nav role="navigation">
			<ul>
				<?php $plxShow->catList($plxShow->getLang('HOME'),'<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
				<?php $plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			</ul>
		</nav>
		<ul class="addthis_toolbox">
			<li class="menu"><a class="addthis_button_twitter" title="Partager cette page sur Twitter"><img src="<?php $plxShow->template(); ?>/img/twitter.png" title="Twitter" width="24px" height="24px"/></a></li>
			<li class="menu"><a class="addthis_button_viadeo" title="Partager cette page sur Viadeo"><img src="<?php $plxShow->template(); ?>/img/viadeo.png" title="Viadeo" width="24px" height="24px"/></a></li>
			<li class="menu"><a class="addthis_button_facebook" title="Partager cette page sur FaceBook"><img src="<?php $plxShow->template(); ?>/img/fb.png" title="Facebook" width="24px" height="24px"/></a></li>
			<li class="menu"><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="Aboonez-vous au fil RSS"><img src="<?php $plxShow->template(); ?>/img/rss.png" title="RSS" width="24px" height="24px"/></a></li>
		</ul>
		
	</header>
	
