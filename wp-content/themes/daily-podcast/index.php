<?php get_header(); ?>
    <div class="container">
        <div class="main">
            <h1 class="main__title"><?php the_field('main_title_black', 16) ?> <br><span><?php the_field('main_title_primary', 16) ?></span></h1>
            <p class="main__description _xs"><?php the_field('main_text', 16) ?></p>
            <button class="btn-primary" onclick="openModal()">Subscribe</button>
        </div>
        <div class="supported">
            <p class="supported__text">Supported by:</p>
            <div class="supported__list">
                <a href="<?php the_field('spotify', 16) ?>" class="supported__link">
                    <img src="<?php echo INTERNO_IMG_DIR ?>/supported/spotify.svg" alt="Spotify">
                </a>
                <a href="<?php the_field('google_podcasts', 16) ?>"  class="supported__link">
                    <img src="<?php echo INTERNO_IMG_DIR ?>/supported/google-podcast.svg" alt="Google Podcast">
                </a>
                <a href="<?php the_field('youtube', 16) ?>"  class="supported__link">
                    <img src="<?php echo INTERNO_IMG_DIR ?>/supported/youtube.svg" alt="Youtube">
                </a>
            </div>
        </div>
    </div>
</main>
<section class="page">
    <div class="container about">
        <h2 class="page__title">Talk. Listen. Get inspired by every minute of it.</h2>
        <div class="about-text">
            <div class="about-text__col">
                <img class="about-text__img" src="<?php echo INTERNO_IMG_DIR ?>/about-icon-01.svg" alt="">
                <p><?php the_field('main_post_1', 73) ?></p>
            </div>
            <div class="about-text__col">
                <img class="about-text__img" src="<?php echo INTERNO_IMG_DIR ?>/about-icon-02.svg" alt="">
                <p><?php the_field('main_post_2', 73) ?></p>
            </div>
        </div>
        <div class="feedback">
            <div class="feedback__text"><?php the_field('feedback', 73) ?></div>
            <div class="feedback-box">
                <img src="<?php echo INTERNO_IMG_DIR ?>/feedback/author.png" alt="">
                <span class="feedback__author">John Smith</span>,
                <span class="feedback__role">Social Community Manager</span>
            </div>
        </div>
    </div>
</section>
<section class="page page-bg blog">
    <div class="container">
        <h2 class="page__title">Article and News</h2>
        <p class="page__description">News, tips, tricks and more</p>
        <div class="acticle">
            <?php
            $args = array(
                'numberposts' => 4,
                'post_type' => 'post',
                'suppress_filters' => true,
            );
            $posts = get_posts($args);

            foreach($posts as $post) { ?>
            <article class="article__item">
                <div>
                    <div class="article__thumb">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php
                    $post = get_post();
                    $categories = get_the_category($post->ID);
                    foreach ($categories as $cat) {
                        $category_link = get_category_link($cat->term_id);
                        if ($cat->name != 'Без рубрики') {
                            echo '<a class="article__category" href="' . esc_url($category_link) . '">' . esc_html($cat->name) . ' </a>';
                        }
                    }
                    ?>
                    <h3 class="article__title"><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->post_title ?></a></h3>
                    <p class="article__text"><?php
                        $content = strip_tags($post->post_content);

                        echo mb_strimwidth($content, 0, 190, '...') ?></p>
                </div>
                <div class="article__info">
                    <div class="article__tags">
                        <?php
                        $posttags = get_the_tags();

                        if ( $posttags ) {
                            foreach($posttags as $tag) {
                                echo '<a href="'.get_tag_link($tag).'">' . $tag->name . '</a>';
                            }
                        }?>
                    </div>
                    <span class="article__date">
                        <?php
                        $date = date_i18n('F j, Y', strtotime($post->post_date));
                        echo $date;
                        ?>
                    </span>
                </div>
            </article>
            <?php
                };
                wp_reset_postdata();
            ?>
        </div>
        <a href="<?php echo (esc_url( home_url( '/' ) ).esc_html__( 'blog', 'textdomain' ));?>"  class="btn-primary">browse all</a>
    </div>
</section>
<section class="page">
    <div class="container">
        <h2 class="page__title">Get in touch</h2>
        <p class="page__description">Send your message to us</p>
        <?php echo do_shortcode('[contact-form-7 id="84" title="message to us"]') ?>
    </div>
</section>
<?php get_footer(); ?>