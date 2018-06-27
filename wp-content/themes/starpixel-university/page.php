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

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url( <?php echo get_theme_file_uri('images/ocean.jpg') ?> );"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

<?php 
$theParent = wp_get_post_parent_id(get_the_ID());
if ($theParent) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
	<?php } ?>

 <?php 

$testArray = get_pages(array(
	'child_of' => get_the_ID()
));
 if ($theParent or $testArray) { ?>

    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php 
        if ($theParent) {
        	$findChildrenOf = $theParent;
        } else {
        	$findChildrenOf = get_the_ID();
        }
        wp_list_pages(array(
        	'title_li' => NULL,
        	'child_of' => $findChildrenOf
        )); ?>
      </ul>
    </div>
 <?php }?>  

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>

 <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
 <?php endwhile; else: ?>

 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Término verdadeiro do Loop -->
 <?php endif; 

get_footer();


