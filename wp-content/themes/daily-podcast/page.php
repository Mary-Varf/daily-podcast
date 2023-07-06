<?php
global $wp_query;
get_header();
?>
<div class="container">
    <div class="main">
        <h1 class="main__title"><?php the_field('main_title_black', 38) ?> <span><?php the_field('main_title_primary', 38) ?></span></h1>
        <p class="main__description"><?php the_field('main_text', 38) ?>.</p>
    </div>
</div>
<div class="main-blog__search">
    <?php get_search_form(); ?>
</div>
</main>
<section class="page blog">
    <div class="container">
        <?php
        echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="4" button_done_label="no more posts" no_results_text=" <div class="no-results">Sorry, nothing found in this query</div>"]'); ?>
    </div>
</section>

<?php get_footer(); ?>
