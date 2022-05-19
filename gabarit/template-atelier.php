<?php /* Template name: Atelier */ ?>

<?php get_header() ?>
<main class="site__main">
    TEMPLATE ATELIER 

    <?php
        $descAtelier = get_field("description_atelier");
        $animateur = get_field("animateur");
        $dateDebut = get_field("date_et_debut_de_latelier");
        $dateFin = get_field("date_de_fin_de_latelier");
        $joursSemaine = get_field("jours_de_la_semaine_de_latelier");
        $heureDebut = get_field("heure_de_debut");
        $heureFin = get_field("heur_de_fin");
        $duree = get_field("duree_dune_seance_datelier");
        $local = get_field("local_ou_se_deroulera_latelier");
    ?>

    <section class="contenu__atelier" <?php echo $categories[1]->slug;  ?>>
        <?php if (have_posts()): the_post(); ?>
        <h1 class= 'titre__atelier'><?php the_title() ?></h1>
            <p class="atelier__description"><?= $descAtelier; ?></p>
            <p class="animateur"><?= $animateur; ?></p>
            <div class="date__debut"><?= $dateDebut; ?></div>
            <div class="date__fin"><?= $dateFin; ?></div>
            <p class="jour__semaine"><?= $joursSemaine; ?></p>
            <div class="heure__debut"><?= $heureDebut; ?></div>
            <div class="heure__fin"><?= $heureFin; ?></div>
            <div class="duree__seance"><?= $duree; ?></div>
            <p class="local"><?= $local; ?></p>
        <?php endif ?>
    </section>
</main>
<?php get_footer() ?>