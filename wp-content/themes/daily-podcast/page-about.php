<?php get_header();

$members = get_field('community_members', 73);
$subscribers = get_field('subscribers', 73);
$listeners = get_field('listeners', 73);

?>
<div class="container">
    <div class="main">
        <h1 class="main__title"><?php the_field('main_title_black', 73) ?><br>
            <span><?php the_field('main_title_primary', 73) ?></span></h1>
        <p class="main__description"><?php the_field('main_text', 73) ?></p>
    </div>
</div>
<div class="main-about__stat">
    <div class="main-about__item">
        <p class="main-about__count" data-max-val="<?php echo $members ?>"></p>
        <p class="main-about__title">Community Members</p>
    </div>
    <div class="main-about__item">
        <p class="main-about__count" data-max-val="<?php echo $subscribers?>"></p>
        <p class="main-about__title">Podcast Subscribers</p>
    </div>
    <div class="main-about__item">
        <p class="main-about__count" data-max-val="<?php echo $listeners ?>"></p>
        <p class="main-about__title">Daily Listeners</p>
    </div>
</div>
</main>
<div class="container">
    <div class="page">
        <section class="history">
            <h2 class="page__title">About and History</h2>
            <div class="history-text">
                <div class="history-text__col">
                    <p>Eu non <strong>diam</strong> phasellus vestibulum lorem. Fringilla est ullamcorper eget nulla facilisi etiam dignissim. Id diam vel quam <strong>elementum pulvinar</strong></p>
                    <p>Elementum eu facilisis sed odio morbi quis commodo. Sed odio morbi quis commodo odio aenean sed adipiscing odio diam. uno fablotoson louw uit.</p>
                </div>
                <div class="history-text__col">
                    <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Quam pellentesque at bibendum euismod tellus duis cursus dignissim odio. Sit vulputate et integer in. Sit vel, senectus iaculis morbi. <strong>Amet</strong> interdum imperdiet laoreet <strong>morbi</strong> tincidunt fermentum, libero. Ante enim eget.</p>
                    <p>Viverra at porttitor accumsan. <a href="#">Orci non here</a></p>
                </div>
            </div>
        </section>
        <section class="founder">
            <h2 class="page__title">Founder and Main Host</h2>
            <div class="founder-card">
                <div class="founder-card__col">
                    <div class="founder-card__thumb">
                        <img src="<?php echo INTERNO_IMG_DIR ?>/founder/porter-severus.png" alt="">
                    </div>
                    <div class="founder-card__info">
                        <p class="founder-card__role">Host 1</p>
                        <p class="founder-card__name">Porter Severus</p>
                        <p class="founder-card__description">Lorem ipsum dolor sit amet con sectet piscing elit, sed do eiusmod tempor rarylet podofcast.</p>
                        <div class="founder-card__social">
                            <span>follow me:</span>
                            <a class="founder-card__link _tt" href="#" target="_blank"></a>
                            <a class="founder-card__link _tw" href="#" target="_blank"></a>
                            <a class="founder-card__link _in" href="#" target="_blank"></a>
                        </div>
                    </div>
                </div>
                <div class="founder-card__col">
                    <div class="founder-card__thumb">
                        <img src="<?php echo INTERNO_IMG_DIR ?>/founder/marques-keith.png" alt="">
                    </div>
                    <div class="founder-card__info">
                        <p class="founder-card__role">Host 2</p>
                        <p class="founder-card__name">Marques Keith</p>
                        <p class="founder-card__description">Lorem ipsum dolor sit amet con sectet piscing elit, sed do eiusmod tempor rarylet podofcast.</p>
                        <div class="founder-card__social">
                            <span>follow me:</span>
                            <a class="founder-card__link _tt" href="#" target="_blank"></a>
                            <a class="founder-card__link _tw" href="#" target="_blank"></a>
                            <a class="founder-card__link _in" href="#" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
