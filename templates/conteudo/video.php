<?php $query = new WP_Query( 'category_name=video&showposts=-1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="row bg-texto-cinza" id="video">
  <div class="container-fluid">
    <div class="col-md-12 box-texto video-texto-marg">
      <h4><?php the_title(); ?></h4>
    </div>
  </div>
</div>


<div class="video">
    <img src="<?php the_field('poster_do_video'); ?>" height="1080" width="1920">
    <!--<iframe width="940" height="529" src="<?php the_field('url_do_video'); ?>" frameborder="0" allowfullscreen></iframe>-->
</div>
 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
 <?php endif; ?>