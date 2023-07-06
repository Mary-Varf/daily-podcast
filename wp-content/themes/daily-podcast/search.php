<?php get_header(); ?>
<?php
$args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    's' => get_search_query(),
    'post_per_page' => '4',
    'paged' => get_query_var('paged') ?: 1
);

wp_reset_query();
$query = new WP_Query($args);
?>
    <div class="container">
        <div class="main">
            <h1 class="main__title">Search Result<br><span><?php get_search_query(); ?></span></h1>
        </div>
    </div>
    <div class="main-blog__search">
        <?php get_search_form(); ?>
    </div>
    </main>

    <section class="page blog">
        <div class="container">
            <?php
                $term = sanitize_text_field($_GET['s']);
                if(empty($term)){
                    $term = 'WordPress';
                }
                echo do_shortcode('[ajax_load_more post_type="post" search="'. $term .'" orderby="relevance" posts_per_page="4" scroll="true" css_classes="plain-text"button_done_label="no more posts" no_results_text="<div class=no-results>Sorry, nothing found in this query</div>"]');
            ?>
        </div>
    </section>
<?php get_footer(); ?>