
<footer>
	<div class="footer_widgets">
		<div class="row">
			<?php
			if(is_active_sidebar('bm_footersidebar')) {
				dynamic_sidebar('bm_footersidebar');
			}
			?>
		</div>
	</div>
	<div class="mainfooter">
		<div class="mainfooter_left">
			Todos os direitos reservados. - 
			<?php if(get_theme_mod('bm_privacy_url')): ?>

				<a href="<?php the_permalink( get_theme_mod('bm_privacy_url') ); ?>">Política de Privacidade</a> 
				
			<?php endif; ?>
		</div>
		<div class="mainfooter_right">
			<?php 
				if(get_theme_mod('bm_signature_footer')) {
					echo get_theme_mod('bm_signature_footer');
				}		
		 	?>
		</div>
		<div class="mainfooter_scroll">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png" />
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>