<?php get_header(); ?>
<div class="container">
    <div class="main">
        <h1 class="main__title"><span><?php single_tag_title('', true) ?></span></h1>
    </div>
</div>
<div class="main-blog__search">
    <?php get_search_form(); ?>
</div>
</main>
<section class="page blog">
    <div class="container">
        <?php
        $tag = get_query_var('tag');
        echo do_shortcode('[ajax_load_more tag="'.$tag.'" posts_per_page="4" button_done_label="no more posts"]');
        ?>
    </div>
</section>
<?php get_footer(); ?>