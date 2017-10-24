<?php
function every_customizer_css(){ ?>

	<style>
	
	#business .business h1 span {color: <?php echo cs_get_customize_option('site_color');?>;}
	#business .icon-bg {background: <?php echo cs_get_customize_option('site_color');?>;}
	#service .s-icon>.s-ibg {background: <?php echo cs_get_customize_option('site_color');?>;}
	.t-bg, .ti-bg {background: <?php echo cs_get_customize_option('site_color');?>;}
	#our-etp .text h1 {color: <?php echo cs_get_customize_option('site_color');?>;}
	#our-etp .text>.btn-default {color: <?php echo cs_get_customize_option('site_color');?>;}
	h3.title {color: <?php echo cs_get_customize_option('site_color');?>;}
	#filters .button:active, #filters .button.is-checked {color: <?php echo cs_get_customize_option('site_color');?>;}
	#team .content h3 a {color: <?php echo cs_get_customize_option('site_color');?>;}
	#team-bg .team-txt h4 {color: <?php echo cs_get_customize_option('site_color');?>;}
	#our-etp .text>.btn-default {border: 1px solid <?php echo cs_get_customize_option('site_color');?>;}
	
	</style>
	
	<?php
}
add_action('wp_head', 'every_customizer_css');