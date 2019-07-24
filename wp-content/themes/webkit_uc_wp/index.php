<?php get_header(); ?>

<!-- 1. CALENDARIO -->
<div class="container" id="tag__calendario">
  <div class="row">
    <div class="col-md-12">

      <h2  id="calendario" class="container-center">Calendario de admisión</h2>
      <section id="container__slider">
        <div class="slider__control">
          <a href="#" class="control__prev">
            <svg width="50px" height="80px" viewBox="0 0 50 80" xml:space="preserve">
              <polyline fill="none" stroke="#3d7edb" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="25.63,65.8 0.375,38.087 25.63,10.375 "/>
            </svg>
          </a>
          <a href="#" class="control__next">
            <svg width="50px" height="80px" viewBox="0 0 40 80" xml:space="preserve">
              <polyline fill="none" stroke="#3d7edb" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="15.375,10.375 45.63,38.087 15.375,65.8 "/>
            </svg>
          </a>
        </div>
        <div class="slider">
          <ul class="slider__content">
            <?php query_posts('category_name=calendario&posts_per_page=20' );
            while ( have_posts() ) : the_post(); ?>
              <?php
                global $post;
                $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                $ruta_imagen = $imagen[0];
              ?>
              <li class="slider__box">
                <div class="card--vertical">
                  <div class="card__image" style="background-image:url(<?php echo $ruta_imagen; ?>);">
                    <h4><?php the_field('fecha'); ?> <?php the_field('fecha_termino'); ?></h4>
                    <span><?php the_field('horario'); ?></span>
                  </div>
                  <div class="card__content">
                      <?php the_content(); ?>
                  </div>
                </div>
              </li>
            <?php endwhile; wp_reset_query(); ?>
          </ul>
        </div>
      </section>
    </div>
  </div>
</div>

<!-- 3. CARRERAS -->
<section class="container" id="tag__carreras">
    <div class="row">
      <div class="col-md-12 container-center">
        <?php query_posts('category_name=carreras&posts_per_page=1' );
        while ( have_posts() ) : the_post(); ?>
          <h2  class="post__title" id="<?php echo single_cat_title("", false); ?>">
            <?php the_title(); ?>
          </h2>
          <div class="post__content__cols-5">
            <?php the_content(); ?>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>


<!-- 4. PORQUE -->
<section class="container" id="tag__porque-la-uc">
    <div class="row">
      <div class="col-md-12 container-center">
        <?php query_posts('category_name=porque&posts_per_page=1' );
        while ( have_posts() ) : the_post(); ?>
          <h2  class="post__title" id="<?php echo single_cat_title("", false); ?>">
            <?php the_title(); ?>
          </h2>
          <div class="post__content">
            <?php the_content(); ?>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>


<!-- 5. ARANCELES Y FINANCIAMIENTO -->
<section class="container" id="tag__financiamiento">
    <div class="row">
      <div class="col-md-12 container-center">
        <?php query_posts('category_name=aranceles-financiamiento' );
        while ( have_posts() ) : the_post(); ?>
          <h2  class="post__title" id="<?php echo single_cat_title("", false); ?>">
            <?php the_title(); ?>

          </h2>
          <div class="post__content">

            <?php the_content(); ?>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
</section>

<!-- 5.A. REQUISITOS -->

<section class="container" id="tag__requisitos">

  <div class="row">

    <div class="col-sm-12">
        <h2 id="requisitos" class="container-center">Admisión PSU: Requisitos y puntajes 2019</h2>
    </div>

    <div class="col-sm-12 flex-container">

      <?php query_posts('category_name=requisitos' );
      while ( have_posts() ) : the_post(); ?>
        <div class="flex-container flex-box box box--blue">
              <h4 class="flex-box__title">
                <?php the_title(); ?>
              </h4>
              <p class="flex-box__content">
                <?php the_content(); ?>
              </p>
            <a class="btn btn-sm btn-default flex-box__link" href="<?php the_field('enlace'); ?>" target="blank" data="<?php the_title(); ?>" role="button" >
              Ver más
            </a>

        </div>
      <?php endwhile; wp_reset_query(); ?>

    </div>
  </div>
</section>

<!-- 5.B. REQUISITOS - Otras vías de admisión -->

<section class="container" id="tag__requisitos-otros">

  <div class="row">

    <div class="col-sm-12">
        <h2 class="container-center">Conoce otras vías de admisión</h2>
    </div>

    <div class="col-sm-12 flex-container">

      <?php query_posts('category_name=requisitos-especial' );
      while ( have_posts() ) : the_post(); ?>
        <div class="flex-container flex-box box box--white">
              <h4 class="flex-box__title">
                <?php the_title(); ?>
              </h4>
              <p class="flex-box__content">
                <?php the_content(); ?>
              </p>
            <a class="btn btn-sm btn-primary flex-box__link" href="<?php the_field('enlace'); ?>" target="blank" data="<?php the_title(); ?>" role="button" >
              Ver más
            </a>

        </div>
      <?php endwhile; wp_reset_query(); ?>

    </div>
  </div>
</section>



<!-- 6. Datos prácticos -->
<div class="container" id="tag__datos-practicos">
  <div class="row">
    <div class="col-md-12">
      <h2 id="datos" class="container-center">
        Noticias y datos prácticos
      </h2>
    </div>
    <?php query_posts('category_name=datos&posts_per_page=4' );
    while ( have_posts() ) : the_post(); ?>
      <div class="col-sm-6 col-md-3">
        <div class="card--vertical card--vertical--datos">
          <div class="card__image">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
          </div>
          <div class="card__content">
            <div class="card__date">
              <?php echo get_the_date(); ?>
            </div>
            <h4 class="card__title">
              <?php the_title(); ?>
            </h4>
            <div class="post__content">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="card__action">
            <div><a href="<?php the_field('enlace'); ?>" target="blank" class="btn btn-primary" role="button" data="<?php the_title(); ?>">Ver más</a></div>
          </div>
        </div>
      </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<!-- POSTULACIÓN -->
<section class="container" id="tag__postulacion">
  <div class="row">
    <div class="col-md-12 container-center">
      <?php query_posts('category_name=postula&posts_per_page=1' );
      while ( have_posts() ) : the_post(); ?>
        <h2 class="post__title" id="<?php echo single_cat_title("", false); ?>">
          <?php the_title(); ?>
        </h2>
        <div class="post__content__cols-2">
          <?php the_content(); ?>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<!-- 2. MATRICULA -->
<section class="container" id="tag__matricula">
  <div class="row">
    <div class="col-md-12 container-center">
      <?php query_posts('category_name=matricula&posts_per_page=1' );
      while ( have_posts() ) : the_post(); ?>
        <h2 class="post__title" id="<?php echo single_cat_title("", false); ?>">
          <?php the_title(); ?>
        </h2>
        <div class="post__content__cols-2">
          <?php the_content(); ?>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
