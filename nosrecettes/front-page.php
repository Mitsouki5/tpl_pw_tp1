<?php get_header(); ?>

<section class="heroAccueil">
    <div class="wrapper">
        <h1><?php bloginfo('name'); ?></h1>
        <div class="gridHero">
            <?php the_content(); ?>
            <a href="<?php bloginfo('url'); ?>/toutes-nos-recettes/"><div class="button">Voir les recettes</div></a>
        </div>
    </div>
</section>

<section class="recettesFavorites">
    <div class="wrapper">
        <?php 
                //Affiche 2 jeux du plus ancien au plus récent (sur la base d'un champs ACF)
                $arg = array(
                    'post_type' => 'recette',
                    'post_status' => 'publish',
                    'posts_per_page' => '2',
                    'orderby' => 'rand',
                    'meta_key' => 'favorite',
                );

                $query = new WP_Query($arg);
        ?>

        <?php if ($query->have_posts()) : ?>
            <h2>Recettes favorites du moment</h2>
            <div class="cards">
                <?php while ($query->have_posts()) : $query->the_post(); ?>     
                    <article class="card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card_media">
                                <?php $image = get_field('thumbnail');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                            </div>
                            <div class="card_content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>

                                <?php $categories = array(); ?>
                                <?php foreach(get_the_category() as $category) : ?>
                                    <?php array_push($categories, $category->name); ?>
                                <?php endforeach; ?>  
                                <?php if ($categories) : ?>
                                    <h4><?php echo implode(', ', $categories); ?></h4>
                                <?php endif; ?>

                            </div>
                        </a>
                    </article>
                <?php endwhile ?>
            </div>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>
