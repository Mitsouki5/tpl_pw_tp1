<?php get_header(); ?>

<section class="heroAccueil">
    <div class="wrapper">
        <h1>NosRecettes</h1>
        <div class="gridHero">
            <p>
                Bienvenue sur NosRecettes ! 🌟 Ici, nous célébrons la joie de cuisiner et de partager des plats
                délicieux avec ceux que vous aimez. Que vous soyez un chef en herbe ou un gourmet averti, notre site est
                votre destination idéale pour découvrir des recettes savoureuses, des astuces pratiques et des idées
                inspirantes pour chaque occasion. Explorez, créez et régalez-vous avec NosRecettes, où chaque plat
                raconte une histoire et chaque recette est un voyage culinaire. Bon appétit ! 🍽️
            </p>
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
