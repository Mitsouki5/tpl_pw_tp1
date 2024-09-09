<?php get_header(); ?>

<section class="heroRecette">
    <div class="wrapper">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="recette">
    <div class="wrapper">
        <div class="gridRecette">
            <div class="recetteImage">
                <?php $image = get_field('thumbnail');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                <?php if (get_field('rating')) : ?>
                    <p>Note : <?php the_field('rating'); ?></p>
                <?php endif; ?>
                <?php if (in_array("oui", get_field('favorite'))) : ?>
                    <h3>Recette favorite 💖</h3>
                <?php endif; ?>
                
            </div>
            <div class="recetteInfo">
                    <?php the_content(); ?>
                    <?php $chef = get_field('chefname'); ?>
                    <?php if ($chef) : ?>
                        <?php foreach($chef as $chef) : ?>
                            <h4>Recette par <?php echo get_the_title($chef->ID); ?></h4>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <div class="temps">
                    <?php if (get_field('preptime')) : ?>
                        <p><?php the_field('preptime'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('cookingtime')) : ?>
                        <p><?php the_field('cookingtime'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('portions')) : ?>
                        <p><?php the_field('portions'); ?></p>
                    <?php endif; ?>
                </div>
                <?php $categories = array(); ?>
                    <?php foreach(get_the_category() as $category) : ?>
                        <?php array_push($categories, $category->name); ?>
                    <?php endforeach; ?>  
                    <?php if ($categories) : ?>
                            <h3>Catégories</h3>
                        <p><?php echo implode(', ', $categories); ?></p>
                    <?php endif; ?>
            </div>
        </div>
        <div class="ingredients">
            <?php if (get_field('ingredients')) : ?>
                <h2>Ingrédients</h2>
                <p><?php the_field('ingredients'); ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php if ( have_rows('gallery') ): ?>
    <div class="gallery swiper" data-component="Carousel" data-autoplay data-loop data-split>
        <div class="swiper-wrapper">
        <?php while(have_rows('gallery')) : the_row(); ?>
            <div class="swiper-slide">
                <?php 
                $image = get_sub_field('photo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h4><?php the_sub_field('caption'); ?></h4>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
</section>

<?php get_footer(); ?>
