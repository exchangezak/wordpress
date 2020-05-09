

    <section>
        <?php
// BOUCLE PRINCIPALE
// PROGRAMMATION FONCTIONNELLE
// ON FAIT APPEL A DES FONCTIONS have_posts
if (have_posts()) :         // FAIT LA REQUETE SELECT SUR LA BASE DE DONNEES SQL
   while (have_posts()) :
      the_post();           // FAIT LE CODE PHP fetchAll


      echo "<h2>";
      the_title();
      echo "</h2>";

      
      echo "<p>";
      the_content();
      echo "</p>";
    
      //     https://developer.wordpress.org/reference/functions/the_post_thumbnail/
      the_post_thumbnail();

   endwhile;
endif;

        ?>
        </section>


        <section>
           <h2>BOUCLE MULTIPLE POUR AFFICHER SEULEMENT LES ARTICLES DANS LA CATEGORIE sport</h2>
           <div class="listeArticle">
<?php

// BOUCLE MULTIPLE
// https://developer.wordpress.org/themes/basics/the-loop/#multiple-loops

// Example argument that defines three posts per page. 
$args = [ 
   "posts_per_page"     => 3,
   "category_name"      => "sport",
]; 
 
// POO ON INSTANCIE UN OBJET DEPUIS LA CLASSE WP_Query
// Variable to call WP_Query. 
$the_query = new WP_Query( $args ); 

// ON APPELLE DES METHODES AVEC L'OBJET have_posts
if ( $the_query->have_posts() ) : 
    // Start the Loop 
    while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>    
      <article>
         <?php the_post_thumbnail() ?>
        <h3><?php the_title() ?></h3>
        <h4>DATE DU MATCH: <?php echo post_custom("date-match") ?></h4>
        <div><?php the_content() ?></div>
</article>
<?php        
    // End the Loop 
    endwhile; 
else: 
// If no posts match this query, output this text. 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
 
wp_reset_postdata(); 
?>
           </div>
        </section>

        <section>
            <h2>CATEGORIE animaux</h2>
            <div class="listeArticle">
            <?php

// BOUCLE MULTIPLE
// https://developer.wordpress.org/themes/basics/the-loop/#multiple-loops

// Example argument that defines three posts per page. 
$args = [ 
   "posts_per_page"     => 3,
   "category_name"      => "animaux",
]; 
 
// POO ON INSTANCIE UN OBJET DEPUIS LA CLASSE WP_Query
// Variable to call WP_Query. 
$the_query = new WP_Query( $args ); 

// ON APPELLE DES METHODES AVEC L'OBJET have_posts
if ( $the_query->have_posts() ) : 
    // Start the Loop 
    while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>    
      <article>
         <?php the_post_thumbnail() ?>
         <h4>AVEC WP ET CUSTOM FIELDS: <?php echo post_custom("prix") ?> euros</h4>
         <h4>AVEC ACF: <?php the_field("prix") ?> euros</h4>
</article>
<?php        
    // End the Loop 
    endwhile; 
else: 
// If no posts match this query, output this text. 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
 
wp_reset_postdata(); 
?>
            </div>
        </section>


        <section>
            <h2>CATEGORIE anonymous</h2>
            <div class="listeArticle">
            <?php

// BOUCLE MULTIPLE
// https://developer.wordpress.org/themes/basics/the-loop/#multiple-loops

// Example argument that defines three posts per page. 
$args = [ 
   "posts_per_page"     => 3,
   "category_name"      => "anonymous",
]; 
 
// POO ON INSTANCIE UN OBJET DEPUIS LA CLASSE WP_Query
// Variable to call WP_Query. 
$the_query = new WP_Query( $args ); 

// ON APPELLE DES METHODES AVEC L'OBJET have_posts
if ( $the_query->have_posts() ) : 
    // Start the Loop 
    while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>    
      <article>
         <h3><?php the_title() ?></h3>
      </article>
<?php        
    // End the Loop 
    endwhile; 
else: 
// If no posts match this query, output this text. 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
 
wp_reset_postdata(); 
?>
            </div>
        </section>