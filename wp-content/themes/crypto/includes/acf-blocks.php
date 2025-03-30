<?php

add_action('acf/init', 'ocs_acf_init_block_types');
function ocs_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'hero-block',
            'title'             => __('Hero Block'),
            'render_template'   => 'includes/acf-blocks/hero-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Hero Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'brand-rating',
            'title'             => __('Brand Rating'),
            'render_template'   => 'includes/acf-blocks/brand-rating.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Brand Rating' ),
        ));

        acf_register_block_type(array(
            'name'              => 'disclaimer',
            'title'             => __('Disclaimer'),
            'render_template'   => 'includes/acf-blocks/disclaimer.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Disclaimer' ),
        ));

        acf_register_block_type(array(
            'name'              => 'content',
            'title'             => __('Content'),
            'render_template'   => 'includes/acf-blocks/content.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'affiliate-table',
            'title'             => __('Affiliate table'),
            'render_template'   => 'includes/acf-blocks/affiliate-table.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Affiliate table' ),
        ));

        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'render_template'   => 'includes/acf-blocks/faq.php',
            'category'          => 'formatting',
            'keywords'          => array( 'FAQ' ),
        ));

        acf_register_block_type(array(
            'name'              => 'important-information',
            'title'             => __('Important Information'),
            'render_template'   => 'includes/acf-blocks/important-info.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Important Information' ),
        ));

        acf_register_block_type(array(
            'name'              => 'offer',
            'title'             => __('Offer'),
            'render_template'   => 'includes/acf-blocks/offer.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Offer' ),
        ));

        acf_register_block_type(array(
            'name'              => 'linking-block',
            'title'             => __('Linking Block'),
            'render_template'   => 'includes/acf-blocks/linking-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Linking Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'ordered-list',
            'title'             => __('Ordered list'),
            'render_template'   => 'includes/acf-blocks/ordered-list.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Ordered list' ),
        ));

        acf_register_block_type(array(
            'name'              => 'information-tables',
            'title'             => __('Information tables'),
            'render_template'   => 'includes/acf-blocks/info-tables.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Information tables' ),
        ));

        acf_register_block_type(array(
            'name'              => 'advantages-and-disadvantages',
            'title'             => __('Advantages and disadvantages'),
            'render_template'   => 'includes/acf-blocks/adv-and-disadv.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Advantages and disadvantages' ),
        ));

        acf_register_block_type(array(
            'name'              => 'author-block',
            'title'             => __('Author'),
            'render_template'   => 'includes/acf-blocks/author-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Author' ),
        ));

        acf_register_block_type(array(
            'name'              => 'enumeration-block',
            'title'             => __('Enumeration Block with Properties'),
            'render_template'   => 'includes/acf-blocks/enumeration-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Enumeration Block with Properties' ),
        ));

        acf_register_block_type(array(
            'name'              => 'related-articles',
            'title'             => __('Related Articles'),
            'render_template'   => 'includes/acf-blocks/related-articles.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Related Articles' ),
        ));

        acf_register_block_type(array(
            'name'              => 'how-to',
            'title'             => __('How To Block'),
            'render_template'   => 'includes/acf-blocks/how-to.php',
            'category'          => 'formatting',
            'keywords'          => array( 'How To Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'how-to-home',
            'title'             => __('How To Block Home'),
            'render_template'   => 'includes/acf-blocks/how-to-home.php',
            'category'          => 'formatting',
            'keywords'          => array( 'How To Block Home' ),
        ));

        acf_register_block_type(array(
            'name'              => 'index',
            'title'             => __('Index'),
            'render_template'   => 'includes/acf-blocks/index-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Index' ),
        ));

        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Gallery'),
            'render_template'   => 'includes/acf-blocks/gallery.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Gallery' ),
        ));

        acf_register_block_type(array(
            'name'              => 'more-articles',
            'title'             => __('More Articles'),
            'render_template'   => 'includes/acf-blocks/more-articles.php',
            'category'          => 'formatting',
            'keywords'          => array( 'More Articles' ),
        ));

        acf_register_block_type(array(
            'name'              => 'follow-us',
            'title'             => __('Follow Us'),
            'render_template'   => 'includes/acf-blocks/follow-us.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Follow Us' ),
        ));

        acf_register_block_type(array(
            'name'              => 'authors-article',
            'title'             => __('Authors Article'),
            'render_template'   => 'includes/acf-blocks/authors-article.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Authors Article' ),
        ));

        acf_register_block_type(array(
            'name'              => 'more-articles-2',
            'title'             => __('More Articles 2'),
            'render_template'   => 'includes/acf-blocks/more-articles-2.php',
            'category'          => 'formatting',
            'keywords'          => array( 'More Articles 2' ),
        ));

        acf_register_block_type(array(
            'name'              => 'recommended-offer',
            'title'             => __('Recommended Offer'),
            'render_template'   => 'includes/acf-blocks/recommended-offer.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Recommended Offer' ),
        ));

        acf_register_block_type(array(
            'name'              => 'separate-block',
            'title'             => __('Separate Block'),
            'render_template'   => 'includes/acf-blocks/separate-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Separate Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'list-of-the-best-exchanges',
            'title'             => __('List of the best exchanges'),
            'render_template'   => 'includes/acf-blocks/list-exchanges.php',
            'category'          => 'formatting',
            'keywords'          => array( 'List of the best exchanges' ),
        ));

        acf_register_block_type(array(
            'name'              => 'how-we-review',
            'title'             => __('How We Review'),
            'render_template'   => 'includes/acf-blocks/how-we-review.php',
            'category'          => 'formatting',
            'keywords'          => array( 'How We Review' ),
        ));

        acf_register_block_type(array(
            'name'              => 'conclusion',
            'title'             => __('Conclusion'),
            'render_template'   => 'includes/acf-blocks/conclusion.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Conclusion' ),
        ));

        acf_register_block_type(array(
            'name'              => 'pros-cons',
            'title'             => __('Pros and Cons'),
            'render_template'   => 'includes/acf-blocks/pros-cons.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Pros and Cons' ),
        ));

        acf_register_block_type(array(
            'name'              => 'hero-inner',
            'title'             => __('Hero Block Inner'),
            'render_template'   => 'includes/acf-blocks/hero-inner.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Hero Block Inner' ),
        ));

        acf_register_block_type(array(
            'name'              => 'exchange-review',
            'title'             => __('Exchange Review'),
            'render_template'   => 'includes/acf-blocks/exchange-review.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Exchange Review' ),
        ));

        acf_register_block_type(array(
            'name'              => 'error-block',
            'title'             => __('Error Block'),
            'render_template'   => 'includes/acf-blocks/error-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Error Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'btc-block',
            'title'             => __('BTC Block'),
            'render_template'   => 'includes/acf-blocks/btc-block.php',
            'category'          => 'formatting',
            'keywords'          => array( 'BTC Block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'best-exchanges',
            'title'             => __('Best Exchanges'),
            'render_template'   => 'includes/acf-blocks/best-exchanges.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Best Exchanges' ),
        ));

        acf_register_block_type(array(
            'name'              => 'review-tables',
            'title'             => __('Review Tables'),
            'render_template'   => 'includes/acf-blocks/review-tables.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Review Tables' ),
        ));

        acf_register_block_type(array(
            'name'              => 'table-compare',
            'title'             => __('Table Compare'),
            'render_template'   => 'includes/acf-blocks/table-compare.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Table Compare' ),
        ));
     
    }
}

?>
