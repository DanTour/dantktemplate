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
						</a>
					</div>
						
					<div class="collapse navbar-collapse col-md-9 col-lg-9 no-gutter" id="bs-example-navbar-collapse-1">
						<div class="phones-main visible-lg">
							<a href="tel:+73512113838">8-351-211-38-38</a>
							<a href="tel:+78003007650">8-800-300-76-50</a>
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
					<div class="wrapper clearfix">
						<jdoc:include type="modules" name="triangle_menu" />
					</div>
					<div class="tr-social-buttons">
						<div class="soc-buttons">
							<a class= "tr-vk" href="http://vk.com/dantk" title="Туристическая компания Дан Вконтакте"></a>
							<a class="tr-twitter" href="https://twitter.com/dan_chel" title="Туристическая компания Дан в Twitter"></a>
							<a class="tr-youtube" href="http://www.youtube.com/channel/UCK0gnncvShhU1pJkUCkPgOA" title="Туристическая компания Дан Youtube"></a>
							<a class="tr-facebook" href="https://www.facebook.com/dancheltours" title="Туристическая компания Дан facebook"></a>
							<a class="tr-instagram" href="https://www.instagram.com/dantk.ru/" titile="Туристическая компания Дан Instagram"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-lg-3 hidden-xs hidden-sm">
				
			</div>
		</div>
	</div>
					
	<div class="carousel-imgs hidden-xs hidden-sm">
		<jdoc:include type="modules" name="header_carousel" />
	</div>
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
	<div class="container-fluid no-gutter">
		<div class="footer-top">
			<div class="row">
				<div class="col-md-9 col-sm-12">
				  <jdoc:include type="modules" name="footer_menu" />
					<!--<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
										Collapsible Group Item #1
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat 
									skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
									single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you 
									probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Collapsible Group Item #2
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat 
									skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
									coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven'tab
									heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Collapsible Group Item #3
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard 
									dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird 
									on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes 
									anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer 
									farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>-->
			</div>
				<div class="col-md-3 col-sm-12">
					<div class="footer-contacts">
						<h4>контакты</h4>
						<div class="phones hidden-sm hidden-xs">
							<ul>
								<li><a href="tel:+73512113838">8-351-211-38-38</a></li>
								<li><a href="tel:+78003007650">8-800-300-76-50</a></li>
							</ul>
						</div>
						<div class="adress">
							<ul>
								<li>Г. ЧЕЛЯБИНСК, ПРОСПЕКТ ЛЕНИНА, Д.30</li>
								<li><span>Телефон:</span> <a href="tel:+73512113838">8-351-211-38-38</a></li>
								<li><span>Электронная почта:</span> <a href="mailto:info@dan-chel.ru">info@dan-chel.ru</a></li>
							</ul>
						</div>
						<div class="adress">
							<ul>
								<li>Г. ЧЕЛЯБИНСК, ПР. КОМСОМОЛЬСКИЙ , Д.94</li>
								<li><span>Телефон:</span> <a href="tel:+73517349834">8-351-734-98-34</a></li>
								<li><span>Электронная почта:</span> <a href="mailto:info@dan-chel.ru">info@dan-chel.ru</a></li>
							</ul>
						</div>
						<div class="emails">
							<ul>
								<li><span>Тур. отдел: <span><a href="mailto:mpp@dan-chel.ru">mpp@dan-chel.ru</a></li>
								<li><span>Агент. отдел: </span><a href="mailto:info@dan-chel.ru">info@dan-chel.ru</a></li>
								<li><span>Бух. отдел: </span><a href="mailto:oplata@dan-chel.ru">oplata@dan-chel.ru</a></li>
								<li><span>Отдел маркетинга: </span> <a href="mailto:market@dan-chel.ru">market@dan-chel.ru</a></li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="footer-bottom clearfix">
			<div class="row ">
				<a href="/" titile="Туристическая компания Дан"></a>
				<p>© Туристическая компания ДАН, 1996 - <?php echo date('Y') ?> </p>
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
