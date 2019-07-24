<?php
 /*
 Template Name: Portafolio
 */
 ?>

 <?php get_header(); ?>

<div id="container-featured-interior">
</div>
<div id="btn-menu-movil" class="visible-xs"> 
    <a href="#menu" title="menú">
        <button type="button" class="btn btn-warning btn-sm">
            <span class="glyphicon glyphicon-align-justify"></span>
        </button>
    </a>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
      <?php get_sidebar(); ?>
        <div class="col-md-9 container-central">
          <div class="row">
              <div class="col-md-12 title_item">
                <h1><?php printf( __( '%s'), single_cat_title( '', false ) ); ?></h1>
              </div>
            <?php while ( have_posts() ) : the_post(); ?>     
                <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail-item">
                  <div class="thumbnail-item-pic">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                    </a>
                    </div>
                    <div class="thumbnail-item-text">
                       <a href="<?php echo get_permalink (); ?>">
                          <h2><?php the_title(); ?></h2>
                      </a>
                      <p class="extracto">
                           <?php the_content( ); ?> 
                      </p>
                    </div>
                    <div class="item-meta">
                      <p><span class="fecha"><?php the_date(); ?></span></p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
         </div>
      </div>
    </div>
  </div>
</div>
 

<?php get_footer(); ?>
