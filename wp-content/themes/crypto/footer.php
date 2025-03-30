</main>

<footer>
	<div class="crypto-container">
		
		<div class="crypto-row">
			<div class="col-8">
				<div class="footer-logo">
					<?php dynamic_sidebar( 'footer_logo' ); ?>
				</div>
				<div class="footer-logos">
					<?php dynamic_sidebar( 'footer_logos' ); ?>
				</div>
			<div class="footer-link-block">
				<div class="footer-links-container crypto-row">
					<div class="footer-links-1 col-3">
						<?php dynamic_sidebar( 'footer_links_1' ); ?>
					</div>
					<div class="footer-links-2 col-3">
						<?php dynamic_sidebar( 'footer_links_2' ); ?>
					</div>
					<div class="footer-links-3 col-3">
						<?php dynamic_sidebar( 'footer_links_3' ); ?>
					</div>
					<div class="footer-links-4 col-3">
						<?php dynamic_sidebar( 'footer_links_4' ); ?>
					</div>
				</div>
			</div>
			</div><div class="col-3 mt-0">
				<div class="flex-box searchfield mt-0">
					<form role="search" method="get" class="form-inline searchfield" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" class="s" value="<?php echo get_search_query(); ?>" name="search">
						<button type="submit" class="btn"><img src="<?php echo get_template_directory_uri(); ?>/images/search-loop.svg" alt="Search" title="Search"></button>
					</form>
					<p class ="copyright">Best Bitcoin Exchange © </br> <?php echo date('Y'); ?>. All rights reserved.</p>
				
				</div>
			<?php dynamic_sidebar( 'footer_text' ); ?>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
