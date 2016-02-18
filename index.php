<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// init $tpl helper
require dirname(__FILE__) . '/php/init.php';

?><?php echo $tpl->renderHTML(); ?>
<head>
    <jdoc:include type="head" />
</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>">

    <!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->


    <!--
        Your HTML code starts here!-->
		
<header>
	<nav class="navbar navbar-default">
		<div class="container-fluid no-gutter">
			<div class="row">
					<div class="navbar-header col-md-3 col-lg-3 col-sm-3 no-gutter" >
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">
								<!--<img class="visible-lg" src="templates/jblank/images/logos/logo-original.png" alt="Туристическая компания ДАН">
								<img class="visible-md" src="templates/jblank/images/logos/logo_sm.png" alt="Туристическая компания ДАН">
								<img class="visible-sm" src="templates/jblank/images/logos/logo_xs.png" alt="Туристическая компания ДАН">-->
							</a>
					</div>
						
					<div class="collapse navbar-collapse col-md-9 col-lg-9 no-gutter" id="bs-example-navbar-collapse-1">
						<div class="phones-main visible-lg">
							8-351-211-38-38<br>
							8-800-300-76-50
						</div>
						<jdoc:include type="modules" name="main_menu" />
					</div>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
				<div class="triangle-wrapper clearfix">
					<jdoc:include type="modules" name="triangle_menu" />
					<div class="triangle-block"></div>
				</div>
			</div>
				<div class="col-md-9 col-lg-3 hidden-xs hidden-sm">
			</div>
		</div>
	</div>
					
	<jdoc:include type="modules" name="header_carousel" />
</header>	
		
		
		

  <!--  -->

    <?php if ($tpl->isMobile()) : ?>
        <!-- only for mobiles  -->
    <? endif; ?>

    <?php if ($tpl->isTablet()) : ?>
        <!-- only for tablets  -->
    <? endif; ?>

    
    <!-- show modules and components -->
    
        <!-- show Joomla messages -->
        <?php if ($tpl->isError()) : ?>
            <jdoc:include type="message" />
        <?php endif; ?>

         <jdoc:include type="component" />
     
   <footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-sm-12">
			
			</div>
			<div class="col-md-9 col-sm-12">
			
			</div>
		</div>
	</div>
</footer>		
    <!-- partial example -->
    <?php echo $tpl->partial('counters', array(
        'myVar' => 123
    ));?>

    <?php if ($tpl->isDebug()) : ?>
        <jdoc:include type="modules" name="debug" />
    <?php endif; ?>

</body>
</html>
