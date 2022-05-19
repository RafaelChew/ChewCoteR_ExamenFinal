<?php get_header() ?>
<main class="site__main">
<?php if (have_posts()):?>
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
                <?php while (have_posts()): the_post(); ?>
                <article class="formation__cours">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>
                        <h3 class="cours__titre"> <?= $titreFiltreCours; ?></h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>
                <?php endwhile ?>             
            </div>
        </section>
    <?php endif ?>
</main>
<?php get_footer() ?>