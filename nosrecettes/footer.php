<footer>
    <div class="wrapper">
        <div class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
        <?php if (have_rows('pw_socials', 'options')) : ?>
        <nav class="nav_socials">
            <ul class="reseaux">
                <?php while(have_rows('pw_socials', 'options')) : the_row(); ?>
                <li>
                    <a href="<?php the_sub_field('link', 'options') ?>" class="nav__link <?php the_sub_field('name', 'options') ?>">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-<?php the_sub_field('name', 'options') ?>"></use>
                        </svg>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </nav>
        <?php endif; ?>
        <p><?php the_field('copyright', 'options') ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
   </body>
</html>