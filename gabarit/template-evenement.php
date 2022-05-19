<?php /* Template name: Évenement */ ?>

<?php get_header() ?>
<main class="site__main">

    

    <section class="evenement__gallerie">
          <?php get_sidebar("evenement_ligne_1"); ?>
     </section>

     <section class="contenu__evenement">
          <?php if (have_posts()): the_post(); ?>
          <?php the_post_thumbnail(); ?>
               <h1 class= 'titre__evenement'><?php the_title() ?></h1>
                         <?php the_content() ?>
                     
          <?php endif ?>
     </section>
</main>
<?php get_footer() ?>