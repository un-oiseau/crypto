<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
        <header>
            <div class="header-top">
                <div class="crypto-container">

					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
							<?php if ( is_front_page() && ! is_paged() ) : ?>
								<?php bloginfo( 'name' ); ?>
							<?php else : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>

                    <div class="header-right">
                        <form role="search" method="get" class="form-inline searchfield" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="search" class="form-input" value="<?php echo get_search_query(); ?>" name="search">
                            <button type="submit" class="btn"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search" title="Search"></button>
                        </form>
                        <img class="crypto-header-lang" src="<?php echo get_template_directory_uri(); ?>/images/canada.svg" alt="Select language" title="Select language">
                        <img class="navbar-toggler" src="<?php echo get_template_directory_uri(); ?>/images/open-menu.png" alt="Open menu" title="Open menu">
            		</div>
                </div>
            </div>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav>
	                <div class="crypto-container">
	                    <ul id="main-nav">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'items_wrap'     => '%3$s',
									'container'      => false,
									'depth'          => 2,
									'link_before'    => '',
									'link_after'     => '',
									'fallback_cb'    => false,
								)
							);
							?>
	                    </ul>
					</div>
	            </nav>
			<?php endif; ?>

        </header>

		<main>

