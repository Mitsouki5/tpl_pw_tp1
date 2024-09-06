<?php get_header(); ?>

<section class="heroAccueil">
    <div class="wrapper">
        <h1><?php bloginfo('name'); ?></h1>
        <div class="gridHero">
            <?php the_content(); ?>
            <a href="recettes.html"><div class="button">Voir les recettes</div></a>
        </div>
    </div>
</section>

<section class="recettesFavorites">
    <div class="wrapper">
        <h2>Recettes favorites du moment</h2>
        <div class="cards">
            <article class="card">
                <a href="single-recette.html">
                    <div class="card_media"><img src="assets/images/spaghetti.png" alt="spaghetti" /></div>
                    <div class="card_content">
                        <h3>Titre de la recette</h3>
                        <p>Courte description d'une recette</p>
                        <h4>Catégorie</h4>
                    </div>
                </a>
            </article>

            <article class="card">
                <a href="single-recette.html">
                    <div class="card_media"><img src="assets/images/spaghetti.png" alt="spaghetti" /></div>
                    <div class="card_content">
                        <h3>Titre de la recette</h3>
                        <p>Courte description d'une recette</p>
                        <h4>Catégorie</h4>
                    </div>
                </a>
            </article>
        </div>
    </div>
</section>

<?php get_footer(); ?>
