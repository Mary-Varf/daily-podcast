<?php get_header(); ?>
    <div class="container">
        <div class="main">
            <h1 class="main__title"><span><?php if( is_category() ){
                echo get_queried_object()->name;
            }?></span></h1>
        </div>
    </div>
    <div class="main-blog__search">
        <?php get_search_form(); ?>
    </div>
    </main>
    <section class="page blog">
        <div class="container">
            <?php
            $cat = get_query_var('cat');
            $category = get_category ($cat);
            echo do_shortcode('[ajax_load_more seo="true" category="'.$category->slug.'"  posts_per_page="4" button_done_label="no more posts"]');
            ?>
        </div>
    </section>
<?php get_footer(); ?>