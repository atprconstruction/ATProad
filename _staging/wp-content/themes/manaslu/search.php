<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Manaslu
 */
get_header();
$page_layout = manaslu_get_page_layout();
global $wp_query;
$archive_post_layout = manaslu_get_option('archive_post_layout');
$enable_post_title_center = manaslu_get_option('enable_post_title_center');
$archive_title = sprintf(
    '%1$s %2$s',
    '<span class="color-accent">' . __('Search:', 'manaslu') . '</span>',
    '&ldquo;' . get_search_query() . '&rdquo;'
);

if ($wp_query->found_posts) {
    $archive_subtitle = sprintf(
    /* translators: %s: Number of search results. */
        _n(
            '%s result for your search.',
            '%s results for your search.',
            $wp_query->found_posts,
            'manaslu'
        ),
        number_format_i18n($wp_query->found_posts)
    );
} else {
    $archive_subtitle = __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'manaslu');
}
?>

    <main id="site-content" role="main">
        <div id="primary" class="content-area">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf(esc_html__('Search Results for: %s', 'manaslu'), '<span>' . get_search_query() . '</span>');
                        ?>
                    </h1>
                </header><!-- .page-header -->


                <div class="manaslu-article-wrapper <?php echo esc_attr($archive_post_layout); ?> <?php if ($enable_post_title_center) { echo 'align-article-center'; } ?>">
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part('template-parts/content', 'search');

                endwhile;

                echo '</div><!-- .manaslu-article-wrapper -->';

                get_template_part('template-parts/pagination');

            else : ?>

                <header class="page-header">
                    <div class="archive-header-content-wrap">
                        <h1 class="archive-title">
                            <?php echo wp_kses_post($archive_title); ?>
                        </h1>
                        <div class="archive-subtitle"><?php echo wp_kses_post(wpautop($archive_subtitle)); ?></div>
                    </div>
                </header><!-- .page-header -->

                <div class="no-search-results-form">
                    <?php
                    get_search_form(
                        array(
                            'aria_label' => __('search again', 'manaslu'),
                        )
                    );
                    ?>
                </div><!-- .no-search-results -->

            <?php endif;
            ?>

        </div> <!-- #primary -->
        <?php
        if ('no-sidebar' != $page_layout) {
            get_sidebar();
        }
        ?>
    </main> <!-- #site-content-->

<?php
get_footer();
