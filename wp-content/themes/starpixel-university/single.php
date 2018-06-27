<?php

get_header();
  //Começa o Loop.
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- O código a seguir testa se o post atual pertence à categoria 3 -->
 <!-- Se pertence, a classe css da DIV será definida como "post-cat-three". -->
 <!-- Se não, a classe da DIV será definida como "post". -->
 <?php if ( in_category('3') ) { ?>
           <div class="post-cat-three">
 <?php } else { ?>
           <div class="post">
 <?php } ?>

 <!-- Mostra o título como um link para o link permanente do post -->
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <!-- Mostra a data e um link para outros posts do mesmo autor. -->
 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

 <!-- Mostra o conteúdo do post em uma DIV -->
 <div class="entry">
   <?php the_content(); ?>
 </div>

 <!-- Mostra uma lista de categorias do post separadas por vírgula -->
 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
 </div> <!-- Fecha a primeira DIV -->

 <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; 

get_footer();

