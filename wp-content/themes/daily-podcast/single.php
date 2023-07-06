<?php
global $wp_query;
get_header();
?>
    <div class="container">
        <div class="main-article">
            <div class="main-article__top">
                <a href="<?php echo (esc_url( home_url( '/' ) ).esc_html__( 'blog', 'textdomain' ));?>" class="main-article__back">Back to articles</a>
                <span class="main-article__date">
                    <?php
                        $date = date_i18n('F j, Y', strtotime(the_date()));
                        echo $date;
                    ?>
                </span>
            </div>
            <div class="main-article__info">
                <?php
                $post = get_post();
                $categories = get_the_category($post->ID);
                foreach ($categories as $cat) {
                    $category_link = get_category_link($cat->term_id);
                    if ($cat->name != 'Без рубрики') {
                        echo '<a class="main-article__category" href="' . esc_url($category_link) . '">' . esc_html($cat->name) . ' </a>';
                    }
                }
                ?>
                <h1 class="main-article__title"><?php the_title(); ?></h1>
                <div class="main-article__tags">
                    <?php
                    $posttags = get_the_tags();

                    if ( $posttags ) {
                        foreach($posttags as $tag) {
                            echo '<a href="'.get_tag_link($tag).'">' . $tag->name . '</a>';
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>
</main>
<article class="post">
    <div class="post__thumb">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <div class="container">
        <div class="post-body">
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>