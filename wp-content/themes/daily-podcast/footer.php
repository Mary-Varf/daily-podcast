<footer>
    <div class="container">
        <div class="footer">
            <div class="footer__top">
                <a href="<?php echo site_url(); ?>" class="footer-logo">
                    <img src="<?php echo INTERNO_IMG_DIR ?>/logo.svg" alt="Logo">
                </a>
                <div class="footer-platform">
                    <p class="footer-platform__text">Listen to episodes on your fav platform:</p>
                    <div class="footer-platform__list">
                        <a href="<?php the_field('spotify', 16) ?>" class="footer-platform__link">
                            <img src="<?php echo INTERNO_IMG_DIR ?>/supported/spotify.svg" alt="Spotify">
                        </a>
                        <a href="<?php the_field('google_podcasts', 16) ?>"  class="footer-platform__link">
                            <img src="<?php echo INTERNO_IMG_DIR ?>/supported/google-podcast.svg" alt="Google Podcast">
                        </a>
                        <a href="<?php the_field('youtube', 16) ?>"  class="footer-platform__link">
                            <img src="<?php echo INTERNO_IMG_DIR ?>/supported/youtube.svg" alt="Youtube">
                        </a>
                    </div>
                </div>
            </div>
            <p class="footer__copyright">©<?php echo date("Y") ?>. All Rights Reserved. <a href="<?php echo site_url(); ?>">Pod of Cast</a></p>
            <div class="footer-links">
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay">
        <div class="modal-subscribe">
            <div class="container">
                <div class="modal-subscribe__content">
                    <h2>Please enter data:</h2>
                    <button onclick="closeModal()" class="btn-close"></button>

                    <form class="form-subscribe" method="POST" action="https://cp.unisender.com/ru/subscribe?hash=685h4b6awdg4yj4rj19nsrkp7wgsmsrkppbcrfuph1dbw1q45pnuo" name="subscribtion_form"">
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="email" placeholder="Email">
                        <button class="btn-primary" type="Submit">Subscribe</button>
                    <input type="hidden" name="charset" value="UTF-8">
                    <input type="hidden" name="default_list_id" value="1">
                    <input type="hidden" name="overwrite" value="2">
                    <input type="hidden" name="is_v5" value="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>